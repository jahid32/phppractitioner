<?php

require_once "Task.php";



$tasks = $app['db']->selectAll('todos', 'Task');

require_once 'views/index.tpl.php';