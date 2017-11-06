<?php
try {
$connection = new PDO('mysql:host=localhost;dbname=csv', 'root', ''); 
} catch (PDOException $e) {
  die ('Connection failed error: ' . $e->getMessage());
}
$statement = $connection->prepare('select * from people');
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
