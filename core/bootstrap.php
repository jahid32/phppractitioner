<?php


App::bind('config', require 'config.php');

App::bind('db', new QueryBuilder(
  Connection::make(App::get('config')['database'])
  ));


function view($name, $data = []){
  extract($data);
  return require "views/{$name}.tpl.php";
}


function redirect($uri){
  header("Location: /{$uri}");
}