@extends('layouts.app')

@section('title', 'Bola Voli - Eimei High School')

@push('styles')
    <!-- CSS khusus halaman bola voli -->
    <link rel="stylesheet" href="{{ asset('css/voli.css') }}">
@endpush

@section('content')

  <!-- ================= HERO SECTION TERANG ================= -->
  <section class="hero-light">
    <div class="container">

      <!-- HERO TITLE BOLA VOLI -->
      <div class="hero-volley-title">
        <img src="{{ asset('images/Logo2.png') }}" alt="Eimei High School Logo" class="hero-logo-img">
        <h1>Volley</h1>

        <!-- DEKORASI BOLA VOLI FLOATING -->
        <img src="{{ asset('images/Volley.png') }}" alt="Bola Voli Dekorasi" class="deco-ball ball-left">
        <img src="{{ asset('images/Volley.png') }}" alt="Bola Voli Dekorasi" class="deco-ball ball-right">
      </div>

      <!-- TAGLINE & DESKRIPSI -->
      <div class="hero-volley-desc">
        <h2>Menembus Batas<br>Menggapai Puncak Nasional</h2>
        <p>
          Klub Bola Voli SMA Eimei berkomitmen membentuk atlet dengan kekuatan smash,
          refleks pertahanan tinggi, serta kerja sama tim yang solid untuk mendominasi 
          kejuaraan Inter-High dan ajang tingkat nasional.
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

        <!-- Card 3: Voli (Aktif Default) -->
        <a href="{{ url('/voli') }}" class="gallery-card active">
          <img src="{{ asset('images/sport6.jpg') }}" alt="Voli">
          <div class="card-overlay"><span>Bola Voli ↗</span></div>
        </a>

        <!-- Card 4: Senam Artistik -->
        <a href="{{ url('/senam') }}" class="gallery-card">
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
        <img src="{{ asset('images/sport6.jpg') }}" alt="Pemain Bola Voli Spike">
      </div>
      <div class="curriculum-content">
        <h2>Fokus Pembinaan<br>& Kurikulum Latihan</h2>
        
        <div class="curriculum-item">
          <h3>1. Teknik Servis & Penyerangan Presisi</h3>
          <p>Penguasaan teknik spike bertenaga, jump serve, serta variasi penyerangan cepat (quick attack) untuk menembus pertahanan lawan.</p>
        </div>

        <div class="curriculum-item">
          <h3>2. Ketahanan Pertahanan & Block</h3>
          <p>Latihan intensif pemblokiran di jaring, refleks receive bola spike, serta komunikasi transisi bertahan ke menyerang.</p>
        </div>

        <div class="curriculum-item">
          <h3>3. Kebugaran Fisik & Kekuatan Melompat</h3>
          <p>Program khusus pembentukan kekuatan otot kaki, kelincahan pergerakan lapangan, dan stamina ekstra untuk pertandingan sistem set.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION: KATEGORI SPESIALISASI (BANNER) ================= -->
  <section class="section-character-banner">
    <div class="container">
      <h2 class="section-title-purple">Kategori Spesialisasi</h2>
      <div class="banner-image">
        <img src="{{ asset('images/sport6.jpg') }}" alt="Aksi Match Bola Voli">
      </div>
    </div>
  </section>

  <!-- ================= SECTION: POIN SPESIALISASI & FASILITAS ================= -->
  <section class="section-features">
    <div class="container">
      <!-- Poin Spesialisasi -->
      <div class="feature-list">
        <div class="feature-item">
          <div class="icon-circle">🏐</div>
          <p>Tim Putra & Tim Putri Utama: Melatih dan menggembleng atlet siap tanding untuk ajang resmi prefektur dan kualifikasi nasional.</p>
        </div>
        <div class="feature-item">
          <div class="icon-circle">🏐</div>
          <p>Tim Junior & Pengembangan: Wadah seleksi dan pembinaan bakat awal bagi siswa yang baru bergabung agar dapat mencapai standar atlet nasional.</p>
        </div>
      </div>

      <!-- Fasilitas Pendukung -->
      <div class="facility-block">
        <h2 class="section-title-purple">Fasilitas Pendukung</h2>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-circle">🏛️</div>
            <p>Lapangan voli indoor berstandar internasional dengan lantai khusus penyerap benturan untuk keamanan dan kenyamanan sendi atlet.</p>
          </div>
          <div class="feature-item">
            <div class="icon-circle">🎧</div>
            <p>Peralatan latihan ball launcher automatik, net tinggi dapat disesuaikan, serta fasilitas gym kebugaran khusus kekuatan fisik.</p>
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