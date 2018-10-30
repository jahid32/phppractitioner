<?php

require_once "Task.php";



$tasks = $app['db']->selectAll('todos', 'Task');
$users = $app['db']->selectAll('users', 'Task');

require_once 'views/index.tpl.php';