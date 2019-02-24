<?php
require 'db.php';
$st_id = $_GET['st_id'];
$sql = 'DELETE FROM students WHERE st_id=:$st_id';
$statement = $connection->prepare($sql);
if ($statement->execute([':st_id' => $st_id])) {
  header("Location: /");
}
