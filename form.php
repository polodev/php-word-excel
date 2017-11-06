<?php 
require 'db.php';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=people.csv');
$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'Name', 'Email']);
foreach ($people as $person) {
  $id = $person->id;
  $name = $person->name;
  $email = $person->email;
  $row = [$id, $name, $email];
  fputcsv($output, $row);
}
fclose($output);
