<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
</head>
<body>
  <div class="container">
    <a href="{{ url('auth/login') }}" class="back-arrow">
      <i class="fas fa-arrow-left"></i>
    </a>
    <h2>Create Account</h2>

    <form action="{{ url('/auth/daftar') }}" method="POST">
      @csrf
      <label for="username">Username</label>
      <input id="username" name="username" type="text" required />
      
      <label for="email">Email address</label>
      <input id="email" name="email" type="email" required />
      
      <label for="password">Password</label>
      <div class="password-container">
        <input id="password" name="password" type="password" required />
        <i class="fas fa-eye toggle-password" id="togglePassword"></i>
      </div>
      
      <label for="confirm-password">Konfirmasi Password</label>
      <div class="password-container">
        <input id="confirm-password" name="password_confirmation" type="password" required />
        <i class="fas fa-eye toggle-password" id="toggleConfirmPassword"></i>
      </div>

      <div class="terms">
        <input id="terms" name="terms_accepted" type="checkbox" required />
        <label for="terms">I agree with <a href="#">Terms</a> and <a href="#">Privacy</a></label>
      </div>

      <button type="submit" class="signup-btn">Sign Up</button>
      <div class="or">OR</div>

      <div class="google-btn">
        <img alt="Google Logo" height="20" src="{{ asset('img/google.png') }}" width="20" />
        Continue with Google
      </div>

      <div class="login-link">
        <p>Already have an account?</p>
        <a href="{{ url('auth/login') }}" id="openLoginModal">Log In</a>
      </div>

      <!-- Tampilkan pesan kesalahan jika ada -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </form>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
    const password = document.querySelector('#password');
    const confirmPassword = document.querySelector('#confirm-password');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });

    toggleConfirmPassword.addEventListener('click', function () {
      const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
      confirmPassword.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>