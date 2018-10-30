<?php
//$router->define([
//  '' => 'controllers/index.php',
//  'about' => 'controllers/about.php',
//  'about/culture' => 'controllers/about-culture.php',
//  'contact' => 'controllers/contact.php',
//  'names' => ''
//]);

$router->get('', 'PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
//$router->get('about/culture', 'about-culture.php');
//$router->get('tasks', 'tasks.php');
//$router->post('tasks', 'tasks.php');
//$router->post('names', 'add-name.php');


