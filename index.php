<?php
require_once 'vendor/autoload.php';
$query = require_once 'core/bootstrap.php';


Router::load('routes.php')->direct(Request::uri(), Request::method());