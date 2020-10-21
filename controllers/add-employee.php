<?php

$name = $_POST['name'];
$position = $_POST['position'];

$years = $_POST['years'];
if (intval($years) == 0) {
  $years = '';
} elseif (intval($years) == 1) {
  $years = $years . ' year';
} else {
  $years = $years . ' years';
}

$months = $_POST['months'];
if (intval($months) == 0) {
  $months = '';
} elseif (intval($months) == 1) {
  $months = $months . ' mo';
} else {
  $months = $months . ' mos';
}

$experience = trim($years . ' ' . $months);

$status = $_POST['status'];


$app['database']->insert('employees', [
  'name' => $name,
  'position' => $position,
  'experience' => $experience,
  'status' => $status
]);

header('Location: /');