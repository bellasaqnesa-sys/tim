<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign in — LPM</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
  <main class="card">
    <div class="logo"><img src="{{ asset('img/logo.jpg') }}" alt=""><span>LPM</span></div>

    @if (session('status')) <div class="alert ok">{{ session('status') }}</div> @endif
    @if ($errors->any())    <div class="alert err">{{ $errors->first() }}</div> @endif

    <form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama lengkap" value="{{ old('name') }}" required autofocus>
    <input type="email" name="email" placeholder="joestudent@gmail.com" value="{{ old('email') }}" required>
    <input type="password" name="password" placeholder="Password" minlength="8" required>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi password" minlength="8" required>
    <div class="bar"></div>
    <button type="submit">Create account</button>
    </form>

    <p class="terms">Dengan mendaftar, kamu menyetujui <a href="#">Ketentuan Layanan</a> dan <a href="#">Kebijakan Privasi</a> kami.</p>
    <p class="foot">Sudah punya akun? <a href="{{ route('login') }}">Sign in</a></p>
  </main>
</body>
</html>