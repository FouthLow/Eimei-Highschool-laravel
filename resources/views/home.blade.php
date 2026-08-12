@extends('layouts.app')

@section('title', 'Beranda - Eimei High School')

@section('content')

    <!-- HERO SECTION / BANNER -->
    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('images/head1.png') }}') center/cover no-repeat;">
        <div class="container hero-content">
            <h1>Temukan Potensi<br>Akademik dan Olahragamu</h1>
            <p>Melalui kurikulum terintegrasi dan fasilitas tingkat dunia, kami membantu siswa mencapai prestasi tertinggi baik di dalam maupun di luar kelas.</p>
            <a href="#" class="btn-text">Selengkapnya &rarr;</a>
        </div>
    </section>

    <!-- SECTION: BUKA SEGALA KEMUNGKINAN -->
    <section class="section-about" id="about">
        <div class="container grid-2">
            <div class="image-box">
                <img src="{{ asset('images/Pic2.png') }}" alt="Pemain Badminton">
            </div>
            <div class="text-box">
                <h2>Buka Segala<br>Kemungkinan Bersama Kami.</h2>
                <p>Aktivitas pembelajaran di kelas dipadukan dengan lingkungan olahraga kompetitif yang dinamis. Kami mendorong siswa untuk berkembang sebagai pribadi mandiri, berkarakter kuat, dan siap menghadapi tantangan masa depan.</p>
                <a href="#" class="btn-black">Pelajari Lebih Lanjut &rarr;</a>
            </div>
        </div>
    </section>

    <!-- SECTION: PROGRAM SISWA 1 -->
    <section class="section-program-1" id="akademik">
        <div class="container grid-2">
            <div class="text-box">
                <h2>Program siswa<br>yang dapat Anda ikuti.</h2>
                
                <div class="program-item">
                    <h3>Keunggulan Akademik</h3>
                    <p>Fasilitas pembelajaran modern dan kurikulum berbasis riset untuk mendukung persiapan memasuki perguruan tinggi terbaik.</p>
                </div>

                <div class="program-item">
                    <h3>Program Atletik Nasional</h3>
                    <p>Pembinaan atlet muda secara intensif dengan pelatih berpengalaman di bidangnya, difasilitasi arena olahraga standar nasional.</p>
                </div>

                <div class="program-item">
                    <h3>Komunitas yang Suportif</h3>
                    <p>Menyediakan lingkungan sosial yang hangat, inklusif, dan saling mendukung dalam mengembangkan potensi setiap siswa.</p>
                </div>
            </div>
            <div class="image-box">
                <img src="{{ asset('images/Pic1.png') }}" alt="Pemain Voli">
            </div>
        </div>
    </section>

    <!-- SECTION: PROGRAM SISWA 2 (LIST KLUB) -->
    <section class="section-program-2">
        <div class="container grid-2">
            <div class="text-box">
                <h2>Program siswa<br>yang dapat Anda ikuti.</h2>
                
                <div class="program-item">
                    <h3 class="hover-title">Program Atletik Prestasi (Inter-High)</h3>
                </div>

                <div class="program-item">
                    <h3 class="hover-title">Program Klub Bulu Tangkis</h3>
                </div>

                <div class="program-item">
                    <h3 class="hover-title">Program Klub Bola Basket</h3>
                </div>

                <div class="program-item">
                    <h3 class="hover-title">Program Senam Artistik</h3>
                </div>

                <div class="program-item">
                    <h3 class="hover-title">Program Olahraga & Renang</h3>
                </div>
            </div>

            <div class="image-box relative-img">
                <img src="{{ asset('images/Pic3.png') }}" alt="Pemain Basket">
            </div>
        </div>
    </section>

    <!-- SECTION: AGENDA -->
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
                    <p class="location">&#128205; GOR Utama SMA Eimei</p>
                    <a href="#" class="card-link">Pelajari Lebih Lanjut &nearr;</a>
                </div>

                <div class="card">
                    <h3>Babak Penyisihan Final Turnamen Basket Tingkat Prefektur</h3>
                    <p class="date">20 April</p>
                    <p class="location">&#128205; Stadion Olahraga Prefektur</p>
                    <a href="#" class="card-link">Pelajari Lebih Lanjut &nearr;</a>
                </div>

                <div class="card">
                    <h3>Publikasi Hasil Seleksi Atlet & Open Campus Day</h3>
                    <p class="date">27 April</p>
                    <p class="location">&#128205; Aula Utama & Kampus SMA Eimei</p>
                    <a href="#" class="card-link">Pelajari Lebih Lanjut &nearr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: BERITA -->
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