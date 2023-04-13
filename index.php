<?php
session_start();
//$sessionId = session_id();
// insert config.php

include('config.php');
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title><span style="color: #FFA500">My Ecommerce Website</span></title>
  <style>
    body {
      background-color: #F5F5F5;
    }
  </style>
</head>
<body>

  <h1><span style="color: #9BB7D4">Welcome to My Ecommerce Website</span></h1>

  <?php if (isset($_SESSION['username'])) : ?>
    <p><span style="color: #1E90FF">Welcome, <?php echo $_SESSION['username']; ?>!</span></p>
    <p><a href="shop.php?session_id=<?php echo $sessionId; ?>"><span style="color: #228B22">Shop Now</span></a></p>
    <p><a href="logout.php"><span style="color: #DC143C">Logout</span></a></p>
  <?php else : ?>
    <p><a href="login.php"><span style="color: #228B22">Login</span></a> or <a href="register.php"><span style="color: #228B22">Register</span></a> to start shopping.</p>
  <?php endif; ?>

  <p?><a href="contact.php"><span style="color: #1E90FF">contact</span></a></p>

 
</body>
</html>

