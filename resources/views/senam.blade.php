@extends('layouts.app')

@section('title', 'Senam Artistik - Eimei High School')

@push('styles')
    <!-- CSS khusus halaman senam artistik -->
    <link rel="stylesheet" href="{{ asset('css/senam.css') }}">
@endpush

@section('content')

  <!-- ================= HERO SECTION TERANG ================= -->
  <section class="hero-light">
    <div class="container">

      <!-- HERO TITLE SENAM ARTISTIK -->
      <div class="hero-senam-title">
        <img src="{{ asset('images/Logo2.png') }}" alt="Eimei High School Logo" class="hero-logo-img">
        <h1>Senam artistik</h1>
      </div>

      <!-- TAGLINE & DESKRIPSI -->
      <div class="hero-senam-desc">
        <h2>Menembus Batas<br>Menggapai Puncak Nasional</h2>
        <p>
          Klub Senam Artistik SMA Eimei berfokus pada kelenturan, keindahan gerakan, 
          serta kekuatan fisik presisi tinggi untuk mencetak pesenam bertalenta 
          yang siap bersaing di tingkat nasional maupun internasional.
        </p>
      </div>

      <!-- ================= GALERI 4 GAMBAR INTERAKTIF (HOVER EXPAND) ================= -->
      <div class="gallery-interactive">
        <!-- Card 1: Basket -->
        <a href="{{ url('/basket') }}" class="gallery-card">
          <img src="{{ asset('images/sport3.jpg') }}" alt="Basket">
          <div class="card-overlay"><span>Bola Basket ↗</span></div>
        </a>

        <!-- Card 2: Badminton -->
        <a href="{{ url('/badminton') }}" class="gallery-card">
          <img src="{{ asset('images/sport8.jpg') }}" alt="Badminton">
          <div class="card-overlay"><span>Bulu Tangkis ↗</span></div>
        </a>

        <!-- Card 3: Voli -->
        <a href="{{ url('/voli') }}" class="gallery-card">
          <img src="{{ asset('images/sport6.jpg') }}" alt="Voli">
          <div class="card-overlay"><span>Bola Voli ↗</span></div>
        </a>

        <!-- Card 4: Senam Artistik (Aktif Default) -->
        <a href="{{ url('/senam') }}" class="gallery-card active">
          <img src="{{ asset('images/sport2.jpg') }}" alt="Senam Artistik">
          <div class="card-overlay"><span>Senam Artistik ↗</span></div>
        </a>
      </div>

    </div>
  </section>

  <!-- ================= SECTION: FOKUS PEMBINAAN & KURIKULUM ================= -->
  <section class="section-curriculum">
    <div class="container grid-curriculum">
      <div class="curriculum-image">
        <img src="{{ asset('images/sport2.jpg') }}" alt="Aksi Pesenam Artistik">
      </div>
      <div class="curriculum-content">
        <h2>Fokus Pembinaan<br>& Kurikulum Latihan</h2>
        
        <div class="curriculum-item">
          <h3>1. Penguasaan Teknik Dasar & Koreografi</h3>
          <p>Pelatihan teknik dasar gerakan, keseimbangan tubuh, keindahan koreografi, serta sinkronisasi irama untuk performa yang presisi.</p>
        </div>

        <div class="curriculum-item">
          <h3>2. Fleksibilitas & Kekuatan Otot</h3>
          <p>Program penguatan fisik khusus untuk kelenturan sendi, kekuatan inti tubuh (core strength), serta daya ledak lompatan.</p>
        </div>

        <div class="curriculum-item">
          <h3>3. Pendampingan Mental & Keberanian</h3>
          <p>Latihan kesiapan mental saat melakukan gerakan tingkat kesulitan tinggi serta simulasi penilaian juri untuk membangun rasa percaya diri.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION: KATEGORI SPESIALISASI (BANNER) ================= -->
  <section class="section-character-banner">
    <div class="container">
      <h2 class="section-title-purple">Kategori Spesialisasi</h2>
      <div class="banner-image">
        <img src="{{ asset('images/sport2.jpg') }}" alt="Senam Artistik Pita">
      </div>
    </div>
  </section>

  <!-- ================= SECTION: POIN SPESIALISASI & FASILITAS ================= -->
  <section class="section-features">
    <div class="container">
      <!-- Poin Spesialisasi -->
      <div class="feature-list">
        <div class="feature-item">
          <div class="icon-circle">🧘‍♀️</div>
          <p>Kategori Serba Bisa Perorangan Putra & Putri: Fokus pembinaan pada penguasaan seluruh alat utama senam artistik sesuai standar kompetisi kejuaraan nasional.</p>
        </div>
        <div class="feature-item">
          <div class="icon-circle">🎗️</div>
          <p>Kategori Ritmik & Alat Khusus: Pembinaan koreografi indah menggunakan alat (pita, simpai, gada, bola) dengan pengawasan pelatih profesional.</p>
        </div>
      </div>

      <!-- Fasilitas Pendukung -->
      <div class="facility-block">
        <h2 class="section-title-purple">Fasilitas Pendukung</h2>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-circle">🏛️</div>
            <p>Studio Khusus Senam Berstandar Internasional dilengkapi matras peredam benturan, lantai senam (floor exercise), balok keseimbangan, dan piranti modern.</p>
          </div>
          <div class="feature-item">
            <div class="icon-circle">🎧</div>
            <p>Peralatan & Sistem Musik Khusus untuk latihan ritmik, cermin latihan penuh, serta pendampingan fisioterapis olahraga khusus sekolah.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION: JEJAK PRESTASI ================= -->
  <section class="section-achievement">
    <div class="container">
      <h2 class="section-title">Jejak Prestasi<br>SMA Eimei di Inter-High.</h2>
      
      <div class="achievement-grid">
        <div class="achievement-list">
          
          <div class="achievement-item">
            <span class="bullet">•</span>
            <div class="achievement-text">
              <h3>2025 – Inter-High Badminton Qualifiers</h3>
              <p>Juara 1 Kategori Tunggal Putra & Ganda Putra Tingkat Prefektur.</p>
            </div>
          </div>

          <div class="achievement-item">
            <span class="bullet">•</span>
            <div class="achievement-text">
              <h3>2025 – Prefectural Basketball Championship</h3>
              <p>Peringkat Pertama dan Tim Terbaik di Prefektur.</p>
            </div>
          </div>

          <div class="achievement-item">
            <span class="bullet">•</span>
            <div class="achievement-text">
              <h3>2024 – National Artistic Gymnastics Tournament</h3>
              <p>Medali Perak Kategori Serba Bisa Perorangan Putri.</p>
            </div>
          </div>

        </div>

        <div class="achievement-image">
          <img src="{{ asset('images/Pres.png') }}" alt="Siswa Berprestasi Inter-High">
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION: AGENDA ================= -->
  <section class="section-agenda">
    <div class="container grid-2">
      <div class="agenda-title">
        <h2>AGENDA</h2>
        <p>Ikuti kegiatan kami mendatang</p>
        <div class="big-date">
          <span>April</span>
          <strong>2026</strong>
        </div>
      </div>

      <div class="agenda-cards">
        <div class="card">
          <h3>Pertandingan Persahabatan Bulu Tangkis Antar-SMA</h3>
          <p class="date">5 - 6 April</p>
          <p class="location">📍 GOR Utama SMA Eimei</p>
          <a href="#" class="card-link">Pelajari Lebih Lanjut ↗</a>
        </div>

        <div class="card">
          <h3>Babak Penyisihan Final Turnamen Basket Tingkat Prefektur</h3>
          <p class="date">20 April</p>
          <p class="location">📍 Stadion Olahraga Prefektur</p>
          <a href="#" class="card-link">Pelajari Lebih Lanjut ↗</a>
        </div>

        <div class="card">
          <h3>Publikasi Hasil Seleksi Atlet & Open Campus Day</h3>
          <p class="date">27 April</p>
          <p class="location">📍 Aula Utama & Kampus SMA Eimei</p>
          <a href="#" class="card-link">Pelajari Lebih Lanjut ↗</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION: BERITA ================= -->
  <section class="section-news">
    <div class="container">
      <h2 class="section-title">Berita</h2>
      <div class="news-grid">
        <div class="news-card">
          <div>
            <h3>Persiapan Latihan Tim Bulu Tangkis Menjelang Kualifikasi Inter-High</h3>
            <p class="news-date">Tanggal: 28 April 2026</p>
            <p class="news-desc">Siswa-siswi tim bulu tangkis meningkatkan intensitas latihan untuk menghadapi ajang kualifikasi mendatang...</p>
          </div>
          <a href="#" class="card-link">Baca Selengkapnya ↗</a>
        </div>
        <div class="news-image">
          <img src="{{ asset('images/Pic2.png') }}" alt="Latihan Badminton">
        </div>
      </div>
    </div>
  </section>

@endsection