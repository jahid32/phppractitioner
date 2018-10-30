<?php

class App
{

  protected static $regestry = [];

  public static function bind($key, $value)
  {
    static::$regestry[$key] = $value;
  }

  public static function get($key)
  {
    if (! array_key_exists($key, static::$regestry)){
      throw new Exception("Now {$key} is bound in the container.");
    }
    return static::$regestry[$key];
  }
}