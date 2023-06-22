
<?php include('d-server.php')?>
<head>
  <title>
    HealthX
  </title>
  <link rel="stylesheet" href="../index-style.css">
  
</head>
<body>
  <!-- Nav Bar Starts here -->
  <div class="banner">
    <div class="navbar">
      <img src="../Images/main-logo.png" alt="logo">
      <ul>
        <li><a href="">Pharmacy</a></li>
        <li><a href="../index.php">Sign In</a></li>
        <li><a href="../login.php">Log In</a></li>
      </ul>
    </div>
    <!-- Nav Bar Ends Here -->

    <!-- Content and Login starts here -->
    <div class="container">
      <div class="signup">
        <h2>Welcome Back Doctor!</h2>
        <p>Just enter your user name and password!</p>
        <form method="post" action="d-login.php">
          <?php include('../errors.php'); ?>
          <input type="text" name="username" placeholder="Enter your Username" required>
          <input type="text" name="email" placeholder="Enter your Email" required>
          <input type="password" name="pass" placeholder="Enter your Password" required>
          <button type="submit" name="login_user">Login</button>
          <p>Not yet a member? <a href="index.php">Sign up</a></p>
        </form>
      </div>
    </div>
    <!-- Content and Login ends here -->

    <!-- Footer starts here -->
  </div>
  <footer class="footer">
    <div class="ft-container">
      <div class="ft-row">
        <div class="ft-col">
          <h4>Company</h4>
          <ul>
            <li><a href="#" style="color: white;">About</a></li>
            <li><a href="#" style="color: white;">Services</a></li>
            <li><a href="#" style="color: white;">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="ft-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#" style="color: white;">FAQ</a></li>
            <li><a href="#" style="color: white;">Payment Options</a></li>
          </ul>
        </div>
        <div class="ft-col">
          <h4>Follow Us</h4>
          <ul>
            <li><a href="#"><img src="/Images/facebook-logo.png" alt="facebook-logo"></a></li>
            <li><a href="#"><img src="/Images/insta-logo.png" alt="insta-logo"></a></li>
            <li><a href="#"><img src="/Images/twitter-logo.png" alt="twitter-logo"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Ends Here -->
</body>
