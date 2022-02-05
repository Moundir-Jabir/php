<?php
require('../app/models/task.php');

$task = new task();
$task->deleteTask(13);