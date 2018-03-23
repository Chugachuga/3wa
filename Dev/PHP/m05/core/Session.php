<?php

class Session
{
  public static function set($name, $value){
    $_SESSION[$name] = $value;
  }

  public static function get($name){
    return $_SESSION[$name];
  }

  static function remove($name){
    if(array_key_exists($name,$_SESSION))
    unset($_SESSION[$name]);
  }
}
?>
