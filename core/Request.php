<?php
/**
 * Created by PhpStorm.
 * User: Suriaya
 * Date: 10/23/2018
 * Time: 11:59 PM
 */

class Request
{
  public static function uri()
  {
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
 }

  public static function method()
  {
    return $_SERVER['REQUEST_METHOD'];
 }
}