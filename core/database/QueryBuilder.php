<?php
/**
 * Created by PhpStorm.
 * User: Suriaya
 * Date: 10/17/2018
 * Time: 1:45 AM
 */

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass){
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
  }
}