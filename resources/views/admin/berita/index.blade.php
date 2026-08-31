@extends('layouts.admin')

@section('title', 'Berita - Eimei Highschool Admin')

@section('content')
    <!-- BERITA SECTION -->
    <section class="berita-container">
        <div class="page-title-row">
            <h1 class="page-main-title">Berita</h1>
            <a href="{{ route('admin.berita.create') }}" class="btn btn-black btn-add-news">Tambah berita</a>
        </div>

        <!-- ALERT NOTIFIKASI SUKSES -->
        @if (session('success'))
            <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <!-- GRID CARD BERITA -->
        <div class="berita-grid">
            @forelse ($beritalist as $berita)
                <div class="berita-card">
                    <div class="berita-img-wrapper">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    </div>
                    <div class="berita-card-body">
                        <h4>{{ $berita->judul }}</h4>
                        <div class="berita-card-footer">
                            <p>Tanggal: {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</p>
                            <div class="card-actions">
                                <!-- TOMBOL EDIT -->
                                <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn-card-action" title="Edit Berita">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <!-- FORM HAPUS -->
                                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-card-action delete" title="Hapus Berita">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #666;">
                    <p>Belum ada berita yang ditambahkan.</p>
                </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        <div class="pagination-wrapper">
        {{ $beritalist->links('vendor.pagination.custom') }}
        </div>
    </section>
@endsection