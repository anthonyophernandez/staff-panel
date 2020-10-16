<?php

$query = require 'bootstrap.php';

$employees = $query->selectAll('employees', 'Employee', array('id', 'name', 'position', 'experience', 'status'));

require 'index.view.php';