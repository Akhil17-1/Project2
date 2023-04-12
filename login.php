<?php
session_start();
// insert config.php

include('config.php');
include('header.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Vulnerable code - user input not sanitized before using in SQL query
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('location: shop.php');
  } else {
    echo "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - My Ecommerce Website</title>
</head>
<body>
  <h1>Login</h1>
  <form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>
