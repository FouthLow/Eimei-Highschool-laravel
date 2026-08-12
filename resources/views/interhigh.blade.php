@extends('layouts.app')

@section('title', 'Atletik Prestasi (Inter-High) - Eimei High School')

@push('styles')
    <!-- CSS khusus halaman Inter-High -->
    <link rel="stylesheet" href="{{ asset('css/interhigh.css') }}">
@endpush

@section('content')

  <!-- ================= HERO SECTION GELAP ================= -->
  <section class="hero-dark">
    <div class="container">

      <!-- HERO HEADER TITLE -->
      <div class="hero-dark-header">
        <div class="hero-dark-left">
          <h1>Atletik Prestasi (Inter-High)</h1>
          <p>Program Pembinaan Olahraga Unggulan SMA Eimei</p>
        </div>
        <div class="hero-dark-right">
          <img src="{{ asset('images/Logo.png') }}" alt="Eimei High School Logo" class="hero-logo-right">
        </div>
      </div>

      <!-- TEKS KONTEN & DEKORASI BOLA -->
      <div class="hero-dark-content">
        <!-- GAMBAR BOLA / SHUTTLECOCK DEKORASI -->
        <img src="{{ asset('images/Kok.png') }}" alt="Kok Dekorasi" class="deco-img deco-shuttlecock">
        <img src="{{ asset('images/Volley.png') }}" alt="Voli Dekorasi" class="deco-img deco-volleyball">
        <img src="{{ asset('images/Bola Basket.png') }}" alt="Basket Dekorasi" class="deco-img deco-basketball">
        <img src="{{ asset('images/Bola.png') }}" alt="Sepak Bola Dekorasi" class="deco-img deco-soccer">

        <div class="quote-item quote-main">
          <p>"Masa muda adalah tentang melampaui<br>batas dan mengejar impian tertinggi."</p>
        </div>

        <div class="quote-item quote-sub">
          <p>Fokus utama kami adalah pembinaan atlet berprestasi dan akademik unggul untuk menyeimbangkan mereka di tingkat nasional dan internasional.</p>
        </div>

        <div class="quote-item quote-foot">
          <p>melalui program ini mari ikuti bulu tangkis, bola basket,<br>senam artistik, serta bentuk persiapan masa depanmu.</p>
        </div>
      </div>

    </div>

    <!-- DEKORASI GARIS MELENGKUNG DI KANAN BAWAH HERO -->
    <div class="arc-decoration"></div>
  </section>

  <!-- ================= SECTION: PROGRAM SISWA (GALERI NAVIGASI) ================= -->
  <section class="section-gallery">
    <div class="container">
      <h2 class="section-title">Program siswa<br>yang dapat Anda ikuti</h2>
      
      <!-- GALERI 4 GAMBAR INTERAKTIF (HOVER EXPAND) -->
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

        <!-- Card 4: Senam Artistik -->
        <a href="{{ url('/senam') }}" class="gallery-card">
          <img src="{{ asset('images/sport2.jpg') }}" alt="Senam Artistik">
          <div class="card-overlay"><span>Senam Artistik ↗</span></div>
        </a>
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

        <!-- FOTO ATLET -->
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