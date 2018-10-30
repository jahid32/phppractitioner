<?php

$app = [];
$app['config'] = require_once 'config.php';

//require_once 'core/Router.php';
//require_once 'core/Request.php';
//require_once 'core/database/Connection.php';
//require_once 'core/database/QueryBuilder.php';


$app['db'] = new QueryBuilder( Connection::make($app['config']['database']));