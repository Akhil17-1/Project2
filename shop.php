<?php
session_start();
// insert config.php

include('config.php');
 include('header.php');

$query = "SELECT * FROM products";
$results = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shop - My Ecommerce Website</title>
</head>
<body>
  <h1>Shop</h1>
  <?php if (isset($_SESSION['username'])) : ?>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="logout.php">Logout</a></p>
  <?php else : ?>
    <p><a href="login.php">Login</a> or <a href="register.php">Register</a> to start shopping.</p>
  <?php endif; ?>
  <h2>Products</h2>
  <table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($results)) : ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><a href="add_to_cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
