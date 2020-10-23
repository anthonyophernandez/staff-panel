<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Panel</title>
  <link rel="stylesheet" href="/public/css/style.css">
</head>
<body class="w-full h-screen bg-gray-300">

  <header class="bg-indigo-900">
    <h1 class="text-lg text-white p-2">Staff Panel</h1>
  </header>

  <div class="w-full">
    <div class="flex justify-between w-full">
      <div class="text-indigo-900 font-bold text-sm w-2/12 p-2">Id</div>
      <div class="text-indigo-900 font-bold text-sm w-3/12 p-2">Name</div>
      <div class="text-indigo-900 font-bold text-sm w-3/12 p-2">Position</div>
      <div class="text-indigo-900 font-bold text-sm w-2/12 p-2">Experience</div>
      <div class="text-indigo-900 font-bold text-sm w-2/12 p-2">Status</div>
    </div>
    <div class="w-full bg-gray-200">
      <?php foreach ($employees as $employee) : ?>
        <div class="flex justify-between w-full">
          <div class="w-2/12 p-2 text-gray-800">
            <?= $employee->getId(); ?> 
          </div>

          <div class="w-3/12 p-2 text-gray-800">
            <?= $employee->getName(); ?>
          </div>

          <div class="w-3/12 p-2 text-gray-800">
            <?= $employee->getPosition(); ?>
          </div>

          <div class="w-2/12 p-2 text-gray-800">
            <?= $employee->getExperience(); ?>
          </div>

          <div class="w-2/12 p-2 text-gray-800">
            <?= $employee->getStatus(); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  
  <div class="bg-indigo-900">
    <h2 class="text-lg text-white p-2">Add Employee</h2>
  </div>

  <form class="w-64 p-2" method="POST" action="/employee">
    <div class="flex flex-column justify-between w-full my-1">
      <label class="w-full" for="name">Name:</label>
      <input class="w-full my-1" type="text" name="name" required>
    </div>
      
    <div class="flex flex-column justify-between w-full my-1">
      <label class="w-full" for="position">Position:</label>
      <select class="w-full my-1" name="position" required>
        <option value="Software Engineer">Software Engineer</option>
        <option value="UI/UX Designer">UI/UX Designer</option>
        <option value="Frontend Developer">Frontend Developer</option>
        <option value="Backend Developer">Backend Developer</option>
        <option value="iOS Developer">iOS Developer</option>
        <option value="Android Developer">Android Developer</option>
        <option value="Product Manager">Product Manager</option>
        <option value="HR Manager">HR Manager</option>
      </select>
    </div>
      
    <div class="flex flex-row justify-between w-full my-1">
      <div class="flex flex-column w-6/12">
        <label class="w-full" for="years">Years:</label>
        <input class="w-12 my-1" type="number" name="years" min="0" max="15" required>
      </div>
      <div class="flex flex-column w-6/12">
        <label class="w-full" for="months">Months:</label>
        <input class="w-12 my-1" type="number" name="months" min="0" max="12" required>
      </div>
    </div>

    <div class="flex flex-column justify-between w-full my-1">
      <label class="w-full" for="status">Status:</label>
      <select class="w-full my-1" name="status" required>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Remote">Remote</option>
      </select>
    </div>

    <button class="w-24 my-1" type="submit">Submit</button>
  </form>
</body>
</html>