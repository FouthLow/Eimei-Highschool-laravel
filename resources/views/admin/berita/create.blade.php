@extends('layouts.admin')

@section('title', 'Tambah Berita - Eimei Highschool Admin')

@push('styles')
    <!-- CSS Khusus Halaman Tambah Berita -->
    <link rel="stylesheet" href="{{ asset('css/admin/tambah-berita.css') }}">
@endpush

@section('content')
    <!-- FORM TAMBAH BERITA SECTION -->
    <section class="form-page-container">
        <h1 class="page-title">Berita</h1>

        <!-- Tampilkan Alert Error Jika Ada Validasi yang Gagal -->
        @if ($errors->any())
            <div style="color: #d9534f; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="form-news">
            @csrf

            <!-- DRAG & DROP UPLOAD AREA -->
            <div class="upload-area" id="uploadArea">
                <input type="file" id="fileInput" name="gambar" accept="image/png, image/jpeg, image/jpg" hidden required>
                <div class="upload-icon">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </div>
                <p class="upload-text" id="uploadText">Tarik atau tambah gambar</p>
                <span class="upload-hint">*png, jpeg, jpg</span>
            </div>

            <!-- INPUT FIELDS ROW (JUDUL & JADWALKAN BERITA) -->
            <div class="form-row">
                <div class="form-group col-judul">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul') }}" required>
                </div>

                <div class="form-group col-jadwal">
                    <label for="jadwal">Jadwalkan berita</label>
                    <div class="schedule-input-wrapper">
                        <input type="date" id="jadwal" name="created_at" class="form-control" value="{{ old('created_at') }}">
                        <button type="button" class="btn-toggle-switch"></button>
                    </div>
                </div>
            </div>

            <!-- TEXTAREA DESKRIPSI -->
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="8" class="form-control textarea-control" required>{{ old('isi') }}</textarea>
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="form-actions">
                <button type="submit" class="btn-submit">Tambah berita</button>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('fileInput');
        const uploadText = document.getElementById('uploadText');

        // Pemicu Klik Upload
        uploadArea.addEventListener('click', () => {
            fileInput.click();
        });

        // Tampilkan Nama File Saat Dipilih
        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                uploadText.textContent = `File terpilih: ${e.target.files[0].name}`;
            }
        });
    </script>
@endpush