<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eimei High School')</title>
    
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>

    <!-- HEADER / NAVBAR -->
    <header class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo.png') }}" alt="Eimei High School Logo" class="logo-img">
                </a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#akademik">Akademik</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <img src="{{ asset('images/logo3.png') }}" alt="Eimei Logo" class="footer-logo-img">
                <p class="footer-desc">Mewujudkan Generasi Berprestasi dalam Akademik dan Olahraga.</p>
            </div>
            <div class="footer-links">
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Suasana Sekolah</a></li>
                    <li><a href="#">Olahraga</a></li>
                    <li><a href="#">Berita</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Program</h4>
                <ul>
                    <li><a href="#">Intensif Akademik</a></li>
                    <li><a href="#">Klub Bulu Tangkis</a></li>
                    <li><a href="#">Klub Bola Basket</a></li>
                    <li><a href="#">Senam Artistik</a></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; {{ date('Y') }} Eimei High School. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </footer>

</body>
</html>