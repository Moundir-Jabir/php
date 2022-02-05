<?php
require('../app/models/task.php');

$task = new task();
$result = $task->searchTasks("bright");
print_r($result);