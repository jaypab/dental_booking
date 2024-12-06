<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dental World Clinic - Login</title>
  <link rel="stylesheet" href="css/signup.css"> 
</head>
<form method="POST" action="{{ route('login') }}">
    @csrf
<script>
    function landingpage() {
        window.location.href = "{{ route('landingpage') }}";
    }
</script>
<script>
    function user() {
        window.location.href = "{{ route('user') }}";
    }
</script>
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
        <li><a href="landingpage">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <button><a href="signup">Sign Up</a></button>
        <button><a href="login">Log In</a></button>
      </ul>
    </div>
  </nav>

  <form method="POST" action="{{ route('signup') }}" onsubmit="return validateForm();">
    @csrf  <!-- CSRF Token -->
    <div class="contact-form-container">
      <div id="contact-us" class="section contact-us">
        <h1>Sign Up</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="input-group">
          <div class="input-field">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" >
          </div>
          <div class="input-field">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" >
          </div>
        </div>

        <div class="input-group">
          <div class="input-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" >
          </div>
          <div class="input-field">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" >
          </div>
        </div>

        <div class="input-group">
          <div class="input-field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" >
          </div>
          <div class="input-field">
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" name="password_confirmation" placeholder="Confirm Password" >
          </div>
        </div>

        <div class="submit-button">
          <button type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>

  <script>
    function login() {
      window.location.href = "{{ route('login') }}";
    }

    function validateForm() {
      const password = document.getElementById('password').value;
      const cpassword = document.getElementById('cpassword').value;

      if (password !== cpassword) {
        alert('Passwords do not match!');
        return false;
      }

      return true;
    }
  </script>
</body>

</html>
