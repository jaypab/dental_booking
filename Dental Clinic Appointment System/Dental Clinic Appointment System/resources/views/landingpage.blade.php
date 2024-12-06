<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dental World Clinic</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<form method="POST" action="{{ route('landingpage') }}">
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
        <li><a href="landingpage">Home</a></li>
        <li><a href="#contact-us">Contact Us</a></li>
        <button><a href="signup">Sign Up</a></button>
        <button><a href="login">Log In</a></button>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="content">
      <h1>Dental World Clinic</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="form-container">
      <h2>BOOK APPOINTMENT</h2>
      <center>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Full Name">

        <label for="phone">Phone No</label>
        <input type="tel" id="phone" name="phone" placeholder="9××××××××××" >'
        
          <label for="address">Address</label>
        <input type="text" id="adress" name="address" placeholder="Address" >
      
        <label for="date">Date</label>
        <input type="date" id="date" name="date" >
        
        <label for="time">Time</label>
        <input type="time" id="time" name="time" >

        <button type="submit">BOOK</button>
      </form>
</center>
    </div>
  </div>
<body>

<section class="services">
  <h1>Services we provide</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan.</p>
  <div class="services-container">
    <!-- General Dentistry -->
    <div class="service-box">
      <img src="Documentation/Image1.jpeg" alt="General Dentistry">
      <h2>General Dentistry</h2>
      <p>Lorem ipsum dolor sit amet consectetur tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitom.</p>
    </div>
    
    <!-- Orthodontics -->
    <div class="service-box">
      <img src="Documentation/Image2.jpeg" alt="Orthodontics">
      <h2>Orthodontics</h2>
      <p>Lorem ipsum dolor sit amet consectetur tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitom.</p>
    </div>
    
    <!-- Cosmetic Dentistry -->
    <div class="service-box">
      <img src="Documentation/Image3.jpeg" alt="Cosmetic Dentistry">
      <h2>Cosmetic Dentistry</h2>
      <p>Lorem ipsum dolor sit amet consectetur tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitom.</p>
    </div>
    
    <!-- Pediatric Dentistry -->
    <div class="service-box">
      <img src="Documentation/Image4.jpeg" alt="Pediatric Dentistry">
      <h2>Pediatric Dentistry</h2>
      <p>Lorem ipsum dolor sit amet consectetur tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitom.</p>
    </div>
    
    <!-- Specialized Procedure -->
    <div class="service-box">
      <img src="Documentation/Image5.jpeg" alt="Specialized Procedure">
      <h2>Specialized Procedure</h2>
      <p>Lorem ipsum dolor sit amet consectetur tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitom.</p>
    </div>
  </div>
</section>

<section class="services">
  <h1>Team Member</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan.</p>
  <div class="services-container">
    <div class="service-box">
      <img src="Documentation/Flores.jpg" alt="Image 1">
      <h2>Programmer</h2>
      <h1>Kent Zyrone Flores</h1>
    </div>
    <div class="service-box">
      <img src="Documentation/Roa.jpg" alt="Image 2">
      <h2>Programmer</h2>
      <h1>Mc Raven Roa</h1>
    </div>
    <div class="service-box">
      <img src="Documentation/Saplot.jpg" alt="Image 3">
      <h1>Mary Alchery Saplot</h1>
    </div>
    <div class="service-box">
      <img src="Documentation/Soriano.jpg" alt="Image 4">
      <h1>Kirk John Soriano</h1>
    </div>
    <div class="service-box center-box">
      <img src="Documentation/Pabua.jpg" alt="Image 5">
      <h2>Project Manager</h2>
      <h1>Lowell Jay Pabua</h1>
    </div>
  </div>
</section>
<section id="contact-us" class="contact-us">
  <h1>Contact Us</h1>
  <p>Have questions or need assistance? Get in touch with us!</p>
  <div class="contact-container">
    <form>
      <!-- Row 1: First Name and Last Name -->
      <div class="form-row">
        <div class="form-column">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
        </div>
        <div class="form-column">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
        </div>
      </div>

      <!-- Row 2: Address and Phone Number -->
      <div class="form-row">
        <div class="form-column">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>
        <div class="form-column">
          <label for="phone-number">Phone Number</label>
          <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number" required>
        </div>
      </div>

      <!-- Row 3: Message -->
      <div class="form-row full-width">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" placeholder="Write your message here" rows="5" required></textarea>
      </div>

      <button type="submit">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer Section -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-details">
      <h2>Contact Details</h2>
      <p><strong>Phone:</strong> +123 456 789</p>
      <p><strong>Email:</strong> info@dentalworldclinic.com</p>
      <p><strong>Address:</strong> 123 Dental Street, Smile City, 56789</p>
    <div class="footer-rights">
      <p>&copy; 2024 Dental World Clinic. All Rights Reserved.</p>
    </div>
  </div>
</footer>
</form>
</html>

<!-- Javascript -->
<script>
    function landingpage() {
        window.location.href = "{{ route('landingpage') }}";
    }
</script>
<script>
  document.querySelector('a[href="#contact-us"]').addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('#contact-us').scrollIntoView({
      behavior: 'smooth',
    });
  });
</script>
