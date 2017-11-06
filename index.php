<?php require 'db.php'; ?>
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
    <form action="form.php" method="post" class="text-center mb-2">
        <input type="submit" class="btn btn-info" value="Download csv">
    </form>
    <form action="worddb.php" method="post" class="text-center mb-2">
        <input type="submit" class="btn btn-info" value="Download word">
    </form>
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