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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Shop</h1>
    <?php if (isset($_SESSION['username'])) : ?>
      <p class="welcome-msg">Welcome, <?php echo $_SESSION['username']; ?>!</p>
      <p><a href="logout.php" class="logout-link">Logout</a></p>
    <?php else : ?>
      <p><a href="login.php">Login</a> or <a href="register.php">Register</a> to start shopping.</p>
    <?php endif; ?>
    <div class="product-list">
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
              <td>$<?php echo $row['price']; ?></td>
              <td><a href="add_to_cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a></td>
            </tr>
          <?php endwhile; ?>
          <tr>
            <td>Apple iPhone 13</td>
            <td>$999.99</td>
            <td><a href="add_to_cart.php?id=5">Add to Cart</a></td>
          </tr>
          <tr>
            <td>Samsung Galaxy Watch 4</td>
            <td>$349.99</td>
            <td><a href="add_to_cart.php?id=6">Add to Cart</a></td>
          </tr>
          <tr>
            <td>Bose QuietComfort Earbuds</td>
            <td>$279.99</td>
            <td><a href="add_to_cart.php?id=7">Add to Cart</a></td>
          </tr>
          <tr>
            <td>Apple MacBook Pro</td>
            <td>$1499.99</td>
            <td><a href="add_to_cart.php?id=8">Add to Cart</a></td>
          </tr>
          <tr>
            <td>Google Pixel Buds</td>
            <td>$179.99</td>
            <td><a href="add_to_cart.php?id=9">Add to Cart</a></td>
          </tr>
          <tr>
            <td>Samsung Galaxy Watch 3</td>
            <td>$249.99</td>
            <td><a href="add_to_cart.php?id=10">Add to Cart</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>
