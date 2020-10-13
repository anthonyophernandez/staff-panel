<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Panel</title>
</head>
<body>
  <h1>Staff Panel</h1>
  <ul>
  <?php foreach ($employees as $employee) : ?>
    <li>
      <?= $employee->getId(); ?> - <?= $employee->getName(); ?> - <?= $employee->getPosition(); ?> - <?= $employee->getExperience(); ?> - <?= $employee->getStatus(); ?>
    </li>
  <?php endforeach; ?>
  </ul>
</body>
</html>