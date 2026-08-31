@extends('layouts.admin')

@section('title', 'Pratinjau Berita - Eimei Highschool Admin')

@section('content')
<section class="preview-page-container">
    <h1 class="page-title">Pratinjau berita</h1>

    <div class="preview-grid">
        <!-- KOLOM KIRI: GAMBAR UTAMA & BOX UPLOAD -->
        <div class="preview-media-col">
            <div class="image-box">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
            </div>

            <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" id="quickUploadForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="judul" value="{{ $berita->judul }}">
                <input type="hidden" name="isi" value="{{ $berita->isi }}">
                
                <div class="upload-area" onclick="document.getElementById('fileInput').click();">
                    <input type="file" id="fileInput" name="gambar" accept="image/png, image/jpeg, image/jpg" hidden onchange="document.getElementById('quickUploadForm').submit();">
                    <div class="upload-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <p class="upload-text">Tambah gambar</p>
                    <span class="upload-hint">*png, jpeg, jpg</span>
                </div>
            </form>
        </div>

        <!-- KOLOM KANAN: DETAIL BERITA & TOMBOL AKSI -->
        <div class="preview-details-col">
            <h2 class="news-title">{{ $berita->judul }}</h2>
            <p class="news-date">Tanggal: {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</p>

            <p class="news-description">
                {!! nl2br(e($berita->isi)) !!}
            </p>

            <div class="action-buttons">
                <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn-edit">Edit berita</a>
                <a href="{{ route('admin.berita.index') }}" class="btn-upload">Unggah berita</a>
            </div>
        </div>
    </div>
</section>
@endsection