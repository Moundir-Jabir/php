<?php
require('../app/models/task.php');

$task = new task();
$task->updateTask(10,"Youcode", "1337");