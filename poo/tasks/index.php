<?php
require('../app/models/task.php');

$task = new task();
$listTasks = $task->getTasks();
//print_r($listTasks);
$oneTask = $task->getTaskById(10);
print_r($oneTask);