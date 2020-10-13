<?php

require 'Employee.php';

$employees = [
  new Employee(1, 'John Smith', 'Software Engineer', '2 yrs 1 mo', 'Full-time'),
  new Employee(2, 'Isabella Everlasting', 'UI/UX Designer', '5 yrs 3 mos', 'Part-time'),
  new Employee(3, 'Mikhael Zukenberg', 'Frontend Developer', '8 mos', 'Remote'),
  new Employee(4, 'Sasha Ho', 'Product Manager', '1 yr 9 mos', 'Remote'),
  new Employee(5, 'Jacob Ginnish', 'Product Manager', '3 yrs 3 mos', 'Full-time'),
  new Employee(6, 'Loren Spear', 'Software Engineer', '1 yr 1 mo', 'Full-time'),
  new Employee(7, 'Adam Driver', 'iOS Developer', '2 mos', 'Full-time'),
  new Employee(8, 'Jordan Lyall', 'Product Manager', '7 yrs 4 mos', 'Remote'),
  new Employee(9, 'Allison Kuperman', 'HR Manager', '11 yrs 1 mo', 'Full-time')
];

require 'index.view.php';