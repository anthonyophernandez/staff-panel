<?php

// $employees = $app['database']->selectAll('employees', 'Employee', array('id', 'name', 'position', 'experience', 'status'));
$employees = [
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time'),
  new Employee(1, 'John Doe', 'Software Engineer', '1 yr 2 mos', 'Full-time')
];

require 'views/index.view.php';