<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Eimei Highschool</title>

  <!-- Panggil CSS khusus Login Admin -->
  <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
</head>
<body>

  <div class="login-card">
    <!-- Bagian Gambar Kiri -->
    <div class="image-container">
      <img src="{{ asset('images/Piclogin1.png') }}" alt="Pemain Voli" class="hero-image">
    </div>

    <!-- Bagian Form Kanan -->
    <div class="form-container">
      <div class="header">
        <div class="title-group">
          <h1>栄明高等学校</h1>
          <h2>Admin Login</h2>
        </div>
        <p class="subtitle">Eimei Highschool</p>
      </div>

      <!-- Menampilkan Error jika Login Gagal -->
      @if ($errors->any())
        <div style="color: #d9534f; margin-bottom: 15px; font-size: 14px;">
          {{ $errors->first() }}
        </div>
      @endif

      <form action="{{ route('admin.login.post') }}" method="POST">
        @csrf

        <div class="input-group">
          <input 
            type="email" 
            name="email" 
            id="email" 
            placeholder="Email Admin" 
            value="{{ old('email') }}"
            required 
            autofocus
          >
        </div>

        <div class="input-group">
          <input 
            type="password" 
            name="password" 
            id="password" 
            placeholder="Kata Sandi" 
            required
          >
        </div>

        <div class="checkbox-group">
          <input type="checkbox" name="remember" id="remember">
          <label for="remember">Simpan riwayat masuk</label>
        </div>

        <button type="submit" class="btn-submit">Masuk</button>
      </form>

      <p class="footer-text">
        *Hubungi pihak terkait untuk meminta akun <a href="#">Hubungi</a>
      </p>
    </div>
  </div>

</body>
</html>