<?php
require 'db.php';
  header("Content-Type: application/vnd.ms-word");
  header("Content-Disposition: attachment; Filename=my.doc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>csv export</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body class="bg-success">
  <div class="container mt-5 bg-light p-5">
    <h2 class="text-center">People information</h2>
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php foreach($people as $person): ?>
        <tr>
          <td><?= $person->id; ?></td>
          <td><?= $person->name; ?></td>
          <td><?= $person->email; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
  
</body>
</html>