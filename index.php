<?php
session_start();
$sessionId = session_id();
// insert config.php

 include('config.php');
 include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>My Ecommerce Website</title>
</head>
<body>

  <h1>Welcome to My Ecommerce Website</h1>
  <?php if (isset($_SESSION['username'])) : ?>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="shop.php?session_id=<?php echo $sessionId; ?>">Shop Now</a></p>
    <p><a href="logout.php">Logout</a></p>
  <?php else : ?>
    <p><a href="login.php">Login</a> or <a href="register.php">Register</a> to start shopping.</p>
  <?php endif; ?>
    <p?><a href="contact.php">contact</a></p>

  <h2>Powered by Akhil Reddy Duvvuru:' </h2>

</body>
</html>
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~               
