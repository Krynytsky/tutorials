<?php
require 'db.php';
$st_id = $_GET['st_id'];

$sql = 'SELECT * FROM students WHERE st_id = :st_id';
$statement = $connection->prepare($sql);
$statement->execute([':st_id' => $st_id ]);
$students = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['st_first_name'])  &&
    isset($_POST['st_last_name']) &&
    isset($_POST['st_age']) &&
    isset($_POST['un_name'])
    ) {
  $st_first_name = $_POST['st_first_name'];
  $st_last_name = $_POST['st_last_name'];
  $st_age = $_POST['st_age'];
  $un_name = $_POST['un_name'];
  $sql = 'UPDATE students SET st_first_name =:st_first_name,
                              st_last_name =:st_last_name,
                              st_age = :st_age,
                              un_name = :un_name
                          WHERE st_id =:st_id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':st_first_name' => $st_first_name,
                           ':$st_last_name' => $st_last_name,
                           ':$st_age' => $st_age,
                           ':$un_name' => $un_name,
                           ':st_id' => $st_id,
                           ])) {
    header("Location: /");
  }

}

 ?>
 <?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Students Info</h2>
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
          <input value="<?= $students->st_first_name; ?>" type="text" name="st_first_name" id ="st_first_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">Last Name</label>
          <input value="<?= $students->$st_last_name; ?>" type="text" name="st_last_name" id ="st_last_name" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">Age</label>
          <input value="<?= $students->$st_age; ?>" type="int" name="st_age" id ="st_age" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">University</label>
          <input value="<?= $students->un_name; ?>" type="text" name="un_name" id ="un_name" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update student</button>

        </div>

      </form>

    </div>
  </div>

</div>

<?php require 'footer.php'; ?>
