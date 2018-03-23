<?php

class Auth
{
  static function admin()
  {
    $user = Session::get("user");
    return ($user["role"] == "admin");
  }

  static  function getAge()
  {
    $user = Session::get("user");
    $birthdate = $user['birthdate'];
    return $birthdate;
  }
}
