<?php
/**
 * Created by PhpStorm.
 * User: Suriaya
 * Date: 10/17/2018
 * Time: 1:41 AM
 */

class Connection
{
  public static function make($config)
  {
    try {
      return new PDO(
        $config['connection'] . ';dbname=' . $config['name'],
        $config['username'],
        $config['password'], $config['options']
      );
    } catch (PDOException $e) {

      die($e->getMessage());
    }
  }
}