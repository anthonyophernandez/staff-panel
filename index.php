<?php

require 'Employee.php';

require 'config.php';

$host = $config['host'];
$db   = $config['db'];

$user = $config['user'];
$pass = $config['pass'];

$charset = $config['charset'];
$options = $config['options'];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
  $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$statement = $pdo->prepare('select * from employees');
$statement->execute();

$employees = $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Employee', array('id', 'name', 'position', 'experience', 'status'));

require 'index.view.php';