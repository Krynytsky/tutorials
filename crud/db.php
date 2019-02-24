<?php
$dsn = 'mysql:host=localhost;dbname=students';
$username = 'root';
$password = 'Krntsk020594';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
