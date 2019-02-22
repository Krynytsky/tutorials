<?php
$dsn = 'mysql:host=localhost; dbname = ';
$username = 'root';
$password = 'Krntsk020594';
$options = [];
try {
  $conn = new PDO ($dsn, $username, $password, $options);
  echo "connection successful!";

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();

}

 ?>
