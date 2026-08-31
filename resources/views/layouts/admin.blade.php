<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - Eimei Highschool')</title>
    
    <!-- Google Fonts & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href=" {{ asset('css/admin/adminstyle.css') }} ">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: #f7f7f7; color: #000; }
        .app-container { display: flex; width: 100%; min-height: 100vh; background-color: #f7f7f7; }
        .sidebar { width: 260px; background-color: #ffffff; padding: 24px 16px; display: flex; flex-direction: column; border-right: 1px solid #e0e0e0; }
        .user-profile { display: flex; align-items: center; gap: 12px; margin-bottom: 32px; padding-left: 8px; }
        .avatar { width: 40px; height: 40px; border-radius: 50%; background-color: #e0e0e0; display: flex; align-items: center; justify-content: center; font-weight: 600; color: #666; }
        .user-info h3 { font-size: 14px; font-weight: 700; }
        .user-info p { font-size: 11px; color: #666; }
        .nav-menu { display: flex; flex-direction: column; gap: 16px; }
        .group-label { font-size: 18px; font-weight: 700; margin-bottom: 8px; display: block; color: #222; }
        .menu-group { display: flex; flex-direction: column; gap: 8px; }
        .nav-item { display: flex; align-items: center; gap: 12px; padding: 10px 16px; text-decoration: none; color: #333; font-size: 14px; font-weight: 500; border: 1px solid #000; border-radius: 8px; transition: all 0.2s; }
        .nav-item.active { background-color: #000; color: #fff; border-color: #000; }
        .main-content { flex: 1; padding: 24px 32px; background-color: #ffffff; }
        .top-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 32px; }
        .header-title h1 { font-size: 20px; font-weight: 700; }
        .header-title h1 span { font-size: 16px; font-weight: 600; margin-left: 8px; }
        .header-title p { font-size: 12px; color: #555; }
        .header-right { display: flex; align-items: center; gap: 16px; }
        .search-box { position: relative; width: 280px; }
        .search-box input { width: 100%; padding: 8px 36px 8px 16px; border: 1px solid #000; border-radius: 20px; outline: none; font-size: 12px; }
        .search-box i { position: absolute; right: 14px; top: 50%; transform: translateY(-50%); font-size: 12px; color: #333; }
        .icon-btn { width: 36px; height: 36px; border-radius: 50%; background-color: #000; color: #fff; border: none; display: flex; align-items: center; justify-content: center; cursor: pointer; }
        .welcome-text h2 { font-size: 24px; font-weight: 400; margin-bottom: 16px; color: #333; }
        .welcome-text h2 span { font-weight: 700; color: #000; }
        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 16px; }
        .stat-card { border: 1px solid #000; border-radius: 4px; padding: 16px; text-align: center; }
        .stat-card h4 { font-size: 14px; text-align: left; margin-bottom: 8px; }
        .stat-value { font-size: 42px; font-weight: 700; line-height: 1; }
        .stat-label { font-size: 14px; font-weight: 600; }
        .card { border: 1px solid #000; border-radius: 4px; padding: 16px; background-color: #fff; }
        .middle-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 16px; margin-bottom: 16px; }
        .calendar-card { display: flex; flex-direction: column; justify-content: space-between; }
        .calendar-header { display: flex; align-items: center; justify-content: center; gap: 24px; margin-bottom: 16px; }
        .nav-arrow { background: none; border: none; cursor: pointer; font-size: 12px; }
        .month-title { font-weight: 700; font-size: 14px; }
        .dates-scroll-container { display: flex; justify-content: space-between; align-items: center; gap: 12px; overflow-x: auto; padding-bottom: 8px; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; }
        .dates-scroll-container::-webkit-scrollbar { display: none; }
        .date-item { display: flex; flex-direction: column; align-items: center; min-width: 48px; cursor: pointer; }
        .date-item .day { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
        .date-item .number { font-size: 20px; font-weight: 700; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; }
        .date-item.active .number { background-color: #000; color: #fff; }
        .card-footer-title h3 { font-size: 14px; margin-top: 12px; }
        .agenda-card { display: flex; flex-direction: column; justify-content: flex-start; gap: 16px; }
        .agenda-card h3 { font-size: 14px; font-weight: 700; }
        .agenda-content { display: flex; align-items: flex-start; gap: 16px; margin: 0; }
        .agenda-date { font-size: 42px; font-weight: 700; line-height: 0.9; }
        .agenda-details h4 { font-size: 12px; font-weight: 600; line-height: 1.3; }
        .agenda-details p { font-size: 10px; color: #555; margin-top: 6px; }
        .link-more { margin-top: auto; align-self: flex-end; font-size: 11px; font-weight: 700; color: #000; text-decoration: underline; }
        .news-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .news-card h3 { font-size: 14px; margin-bottom: 12px; }
        .news-card h2 { font-size: 18px; font-weight: 700; line-height: 1.3; margin-bottom: 8px; }
        .news-date { font-size: 11px; color: #444; margin-bottom: 16px; }
        .news-author { display: flex; align-items: center; gap: 8px; }
        .small-avatar { width: 20px; height: 20px; border-radius: 50%; background-color: #e0e0e0; font-size: 10px; display: flex; align-items: center; justify-content: center; }
        .news-author span { font-size: 10px; color: #555; }
        .news-image-card { padding: 0; overflow: hidden; }
        .news-image-card img { width: 100%; height: 100%; object-fit: cover; display: block; }
    </style>
    @stack('styles')
</head>
<body>

    {{-- HANYA DITAMPILKAN JIKA ADMIN SUDAH AUTH/LOGIN --}}
    @auth
    <div class="app-container">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="user-profile">
                <!-- Inisial Nama Admin -->
                <div class="avatar">{{ strtoupper(substr(auth()->user()->name ?? 'Admin', 0, 1)) }}</div>
                <div class="user-info">
                    <!-- Nama & Role Admin Dinamis -->
                    <h3>{{ auth()->user()->name ?? 'Admin 1' }}</h3>
                    <p>Role : {{ auth()->user()->role ?? 'Super Admin' }}</p>
                </div>
            </div>

            <nav class="nav-menu">
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-border-all"></i> Dashboard
                </a>

                <div class="menu-group">
                    <span class="group-label">Konten</span>
                    <a href="{{ route('admin.berita.index') }}" class="nav-item {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}"><i class="fa-regular fa-newspaper"></i> Berita</a>                    
                    <a href="#" class="nav-item"><i class="fa-regular fa-calendar-days"></i> Agenda kegiatan</a>
                    <a href="#" class="nav-item"><i class="fa-solid fa-trophy"></i> Jejak prestasi</a>
                    <a href="#" class="nav-item"><i class="fa-solid fa-user-tie"></i> Guru</a>
                    <a href="#" class="nav-item"><i class="fa-solid fa-user-graduate"></i> Siswa</a>
                    <a href="#" class="nav-item"><i class="fa-solid fa-users-rectangle"></i> Klub</a>
                </div>

                <div class="menu-group">
                    <span class="group-label">Lainnya</span>
                    <a href="#" class="nav-item"><i class="fa-solid fa-gear"></i> Pengaturan</a>
                    
                    <!-- FORM LOGOUT -->
                    <form method="POST" action="{{ route('admin.logout') }}" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-item">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
                    </a>
                </div>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="main-content">
            <!-- HEADER -->
            <header class="top-header">
                <div class="header-title">
                    <h1>栄明高等学校 <span>Panel admin</span></h1>
                    <p>Eimei Highschool</p>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <input type="text" placeholder="Telursuri">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <button class="icon-btn">
                        <i class="fa-regular fa-bell"></i>
                    </button>
                </div>
            </header>

            <!-- ISI CONTENT DASHBOARD -->
            @yield('content')
        </main>
    </div>
    @endauth

    {{-- JIKA BELUM LOGIN (GUEST), OTOMATIS REDIRECT KE HALAMAN LOGIN --}}
    @guest
        <script>window.location.href = "{{ route('admin.login') }}";</script>
    @endguest

    @stack('scripts')
</body>
</html>