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
    <div class="logo"><img src="{{ asset('img/logo.png') }}" alt=""><span>LPM</span></div>

    @if (session('status')) <div class="alert ok">{{ session('status') }}</div> @endif
    @if ($errors->any())    <div class="alert err">{{ $errors->first() }}</div> @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" name="email" placeholder="joestudent@gmail.com" value="{{ old('email') }}" required autofocus>
      <input type="password" name="password" placeholder="Password" required>
      <div class="bar"></div>
      <button type="submit">Sign in</button>
    </form>

    <p class="foot">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
  </main>
</body>
</html>