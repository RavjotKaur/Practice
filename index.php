<?php

/*$task=[
  'title' => 'finish homework',
  'due' => 'today',
  'assigned_to' => 'ravjot',
  'completed' => 1
];*/
//$animal = ['dog','cat'];

//dd($animal);
//dumper('hello','big','world');
//echo '<pre>';
//die(var_dump($animal));
//echo '</pre>';
//die();
// class task {
//
//   // variables
//   public $description;
//   public $completed = false;
//
//   // constructor
//   public function __construct($description) {
//     $this->description = $description;
//   //automatically triggered on instantiation
//   }
//   public function isComplete() {
//     return $this->completed;
//   }
//
//   public function complete() {
//
//     $this->completed = true;
//   }
// }
// /*$task = new task('go to the store'); //new task object
//
// $task->complete(); //complete the task
//
// dd($task->isComplete());*/
// // array of tasks
// $tasks= [
//   new task('go to the store'),
//   new task('finish my screencast'),
//   new task('clean my room')
// ];
//
// $tasks[0]->complete();
//phpinfo();
//var_dump($tasks);
// require 'functions.php';
// require 'task.php';
require 'connection.php';
require 'functions.php';

$pdo = connection::make();

//$tasks = fetchAllTasks($pdo);
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');
var_dump($tasks);



require 'index.view.php';
