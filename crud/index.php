
<?php
require 'db.php';
$sql = 'SELECT * FROM students';
$statement = $connection->prepare($sql);
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>


<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Students</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>University</th>
          <th>Action</th>
        </tr>
        <?php foreach($students as $students ): ?>
          <tr>
            <!-- <td><?= $students->st_id;?></td> -->
            <td><?= $students->st_first_name;?></td>
            <td><?= $students->st_last_name;?></td>
            <td><?= $students->st_age;?></td>
            <td><?= $students->un_name;?></td>
            <td>
              <a href="edit.php?st_id=<?= $students->st_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?st_id=<?= $students->st_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
