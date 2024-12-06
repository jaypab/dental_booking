<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dental World Clinic - Login</title>
  <link rel="stylesheet" href="css/login.css"> 
</head>

<body>
  <!-- Login Form -->
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <nav class="navbar">
      <div class="navdiv">
        <!-- Logo with Image -->
        <div class="logo">
          <a href="#">
            <img src="Documentation/logo.png" alt="Dental World Clinic Logo">
            <span>Dental World Clinic</span>
          </a>
        </div>
        <!-- Navigation Links -->
        <ul>
          <li><a href="{{ route('landingpage') }}">Home</a></li>
          <li><a href="#">Contact Us</a></li>
          <button><a href="{{ route('login') }}">Log In</a></button>
        </ul>
      </div>
    </nav>

    <div class="login-form-container">
      <h1>Log In</h1>
      <p>Welcome back! Please log in to your account.</p>
      <div class="input-field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="submit-button">
        <button type="submit">Log In</button>
      </div>
      <div class="">
        <p>Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
      </div>
    </div>
  </form>

  <script>
    // Remove the JavaScript redirection as it's handled by Laravel authentication system
  </script>

</body>

</html>
