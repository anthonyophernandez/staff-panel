<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass, $params)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $intoClass, $params);
  }

  public function insert($table, $parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (Exception $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
  }
}