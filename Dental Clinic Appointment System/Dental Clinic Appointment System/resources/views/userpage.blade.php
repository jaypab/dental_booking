<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dental World Clinic</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<form method="POST" action="{{ route('userpage') }}">
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
        <button><a href="landingpage">Logout</a></button>
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
