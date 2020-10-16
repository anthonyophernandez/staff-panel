<?php

$query = require 'bootstrap.php';

$employees = $query->selectAll('employees', 'Employee');

require 'index.view.php';