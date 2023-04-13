<!-- db config -->
<?php
// Path: config.php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','akhil');
define('DB_PASS','akhil');
define('DB_NAME','project2');
// Establish database connection.
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
~
<!DOCTYPE html>
<html>
<head>
  <title>Beware you are under watch</title>
</head>
<body>

  <h1>configs</h1>
    <p>DB_HOST=localhost </p>
    <p>DB_USER=akhil</p>
    <p>DB_PASS=akhil</p>
    <p>DB_NAME=project2</p>

  <h2>Powered by Akhil Reddy Duvvuru:' </h2>

</body>
</html>
~
~                                                                                                                                                                                                           
~            
