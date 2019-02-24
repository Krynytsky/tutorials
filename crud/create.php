<?php
require 'db.php';
$message = '';
if (isset ($_POST['st_first_name']) &&
    isset($_POST['st_last_name']) &&
    isset($_POST['st_age']) &&
    isset($_POST['un_name'])) {
  $st_first_name = $_POST['st_first_name'];
  $st_last_name = $_POST['st_last_name'];
  $st_age = $_POST['st_age'];
  $un_name = $_POST['un_name'];
  $sql = 'INSERT INTO students(st_first_name, st_last_name, st_age, un_name)
          VALUES(:st_first_name, :st_last_name, :st_age, :un_name)';

  $statement = $connection->prepare($sql);

  if ($statement->execute([':st_first_name' => $st_first_name,
                           ':st_last_name' => $st_last_name,
                           ':st_age' => $st_age,
                           ':un_name' =>$un_name
                           ])) {
    $message = 'data inserted successfully';
  }
}
?>

<?php require 'header.php'; ?>

<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>Create a student</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
       <div class="alert alert-success">
         <?= $message; ?>
       </div>
     <?php endif; ?>
      <form  method="post">

        <div class="form-group">
          <label for="name">First Name</label>
          <input type="text" name="st_first_name" id ="st_first_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">Last Name</label>
          <input type="text" name="st_last_name" id ="st_last_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">Age</label>
          <input type="int" name="st_age" id ="st_age" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">University</label>
          <input type="text" name="un_name" id ="un_name" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a student</button>

        </div>

      </form>

    </div>
  </div>

</div>

<?php require 'footer.php'; ?>
