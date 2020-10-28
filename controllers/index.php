<?php

$employees = $app['database']->selectAll('employees', 'Employee', array('id', 'name', 'position', 'experience', 'status'));

require 'views/index.view.php';