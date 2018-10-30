<?php

require_once "Task.php";



$tasks = App::get('db')->selectAll('todos', 'Task');
$users = App::get('db')->selectAll('users', 'Task');

require_once 'views/index.tpl.php';