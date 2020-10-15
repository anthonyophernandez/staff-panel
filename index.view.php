<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Panel</title>
  <link rel="stylesheet" href="/public/css/style.css">
</head>
<body class="w-full">
  <h1 class="w-full">Staff Panel</h1>

  <form class="w-6/12" action="GET" action="/employee">
    
    <div class="flex justify-between">
      <label for="name">Name:</label>
      <input type="text" name="name" required>
    </div>
    
    <div class="flex justify-between">
      <label for="position">Position:</label>
      <input type="text" name="position" required>
    </div>
    
    <div class="flex justify-between">
      <label for="experience">Experience:</label>
      <input type="text" name="experience" required>
    </div>

    <div class="flex justify-between">
      <label for="status">Status:</label>
      <input type="text" name="status" required>
    </div>

    <button type="submit">Submit</button>
  </form>

  <div class="w-12/12">
    <?php foreach ($employees as $employee) : ?>
      <div class="flex justify-between w-full">
        <div class="w-2/12">
          <?= $employee->getId(); ?> 
        </div>

        <div class="w-3/12">
          <?= $employee->getName(); ?>
        </div>

        <div class="w-3/12">
          <?= $employee->getPosition(); ?>
        </div>

        <div class="w-2/12">
          <?= $employee->getExperience(); ?>
        </div>

        <div class="w-2/12">
          <?= $employee->getStatus(); ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</body>
</html>