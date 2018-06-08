<?php

class QueryBuilder
{

  protected $pdo;
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}
// require "task.php";
//
// function fetchAllTasks($pdo) {
//
//   $statement = $pdo->prepare('select * from todos');
//   $statement->execute();
//
//   return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// }
//
function dd($data){
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}
