<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Login page for Kost Terdekat">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
  <div class="container">
    <a href="/" class="back-arrow">
      <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Log in</h2>
    <div class="google-btn">
      <img alt="Google Logo" height="20" src="{{ asset('img/google.png') }}" width="20"/>
      Continue with Google
    </div>
    <div class="divider">
      OR
    </div>
    <form method="POST" action="{{ route('login') }}">
  @csrf
  <label for="email">Email address or Username</label>
  <input id="email" name="email" type="text" required/>
  <label for="password">Password</label>
  <div class="password-container">
    <input id="password" name="password" type="password" required/>
    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
  </div>
  <div class="forgot-password">
    <a href="lupa">Forget your password</a>
  </div>
  <div class="terms">
    <input id="remember-me" name="remember-me" type="checkbox"/>
    <label for="remember-me">Remember me</label>
  </div>
  <button type="submit" class="signup-btn">Log in</button>
</form>
<div class="divider"></div>
<div class="login-link">
  <p>Don't have an account?</p>
  <a href="/auth/daftar">Sign up</a>
</div>
    </div>
  </div>
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>