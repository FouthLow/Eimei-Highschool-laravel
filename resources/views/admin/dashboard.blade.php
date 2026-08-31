@extends('layouts.admin')

@section('title', 'Dashboard - Eimei Highschool')

@section('content')
    <!-- WELCOME TEXT -->
    <section class="welcome-text">
        <h2>Selamat datang <span>Admin 1</span></h2>
    </section>

    <!-- STATS CARDS -->
    <section class="stats-grid">
        <div class="stat-card">
            <h4>Jumlah guru</h4>
            <div class="stat-value">{{ $totalGuru ?? 60 }}</div>
            <span class="stat-label">Guru</span>
        </div>
        <div class="stat-card">
            <h4>Jumlah siswa</h4>
            <div class="stat-value">{{ $totalSiswa ?? 1300 }}</div>
            <span class="stat-label">Siswa</span>
        </div>
        <div class="stat-card">
            <h4>Jumlah klub</h4>
            <div class="stat-value">{{ $totalKlub ?? 10 }}</div>
            <span class="stat-label">Klub</span>
        </div>
    </section>

    <!-- MIDDLE SECTION (CALENDAR & AGENDA) -->
    <section class="middle-grid">
        <!-- CALENDAR BOX -->
        <div class="card calendar-card">
            <div class="calendar-header">
                <button class="nav-arrow"><i class="fa-solid fa-chevron-left"></i></button>
                <span class="month-title">April</span>
                <button class="nav-arrow"><i class="fa-solid fa-chevron-right"></i></button>
            </div>

            <!-- SCROLLABLE DATES CONTAINER -->
            <div class="dates-scroll-container">
                <div class="date-item">
                    <span class="day">Sen</span>
                    <span class="number">12</span>
                </div>
                <div class="date-item">
                    <span class="day">Sel</span>
                    <span class="number">13</span>
                </div>
                <div class="date-item">
                    <span class="day">Rab</span>
                    <span class="number">14</span>
                </div>
                <div class="date-item active">
                    <span class="day">Kam</span>
                    <span class="number">15</span>
                </div>
                <div class="date-item">
                    <span class="day">Jum</span>
                    <span class="number">16</span>
                </div>
                <div class="date-item">
                    <span class="day">Sab</span>
                    <span class="number">17</span>
                </div>
                <div class="date-item">
                    <span class="day">Min</span>
                    <span class="number">18</span>
                </div>
                <div class="date-item">
                    <span class="day">Sen</span>
                    <span class="number">19</span>
                </div>
                <div class="date-item">
                    <span class="day">Sel</span>
                    <span class="number">20</span>
                </div>
            </div>

            <div class="card-footer-title">
                <h3>Agenda</h3>
            </div>
        </div>

        <!-- AGENDA TERDEKAT BOX -->
        <div class="card agenda-card">
            <h3>Agenda terdekat</h3>
            <div class="agenda-content">
                <div class="agenda-date">15</div>
                <div class="agenda-details">
                    <h4>Pertandingan Persahabatan Bulu Tangkis Antar-SMA</h4>
                    <p><i class="fa-solid fa-location-dot"></i> GOR Utama SMA Eimei</p>
                </div>
            </div>
            <a href="#" class="link-more">Tambah agenda <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
    </section>

    <!-- NEWS SECTION -->
    <section class="news-grid">
        <div class="card news-card">
            <h3>Berita terbaru</h3>
            <h2>Persiapan Latihan Pagi Tim Bulu Tangkis Menjelang Kualifikasi Inter-High</h2>
            <p class="news-date">Tanggal: 24 April 2026</p>
            <div class="news-author">
                <div class="small-avatar">A</div>
                <span>Admin 1</span>
            </div>
        </div>
        <div class="card news-image-card">
            <img src="https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?auto=format&fit=crop&q=80&w=1000" alt="Bulu Tangkis">
        </div>
    </section>
@endsection