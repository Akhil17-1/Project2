<?php
session_start();
$errors = array();

// insert config.php
include('config.php');
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - My Ecommerce Website</title>
</head>
<body>
  <h1>Contact Us</h1>
  
  <form action="submit_contact.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <button type="submit">Submit</button>
</form>
  
  <footer>
    <p>&copy; 2023 Eco-Friendly Products Online Shop</p>
  </footer>
</body>
</html>
