<?php

class Connection
{
  public static function make($config)
  {
    $host = $config['host'];
    $db   = $config['db'];
    
    $user = $config['user'];
    $pass = $config['pass'];
    
    $charset = $config['charset'];
    $options = $config['options'];
    
    $dsn = "mysql:host={$host};dbname={$db};charset={$charset}";
    try {
      return new \PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
  }
}