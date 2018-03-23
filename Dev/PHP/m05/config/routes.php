<?php

return [
  "home" => [
    "path" => "/",
    "run" => "PagesController@index"
  ],
  "signup" => [
    "path" => "/signup",
    "run" => "UserController@signup"
  ],
  "signin" => [
    "path" => "/signin",
    "run" => "UserController@signin"
  ],
  "logout" => [
    "path" => "/logout",
    "run"  => "UserController@logout"
  ],
  "reservation" => [
    "path" => "/reservation",
    "run"  => "ReserveController@reserve"
  ],
  "admin" => [
    "path" => "/admin",
    "run"  => "AdminController@admin"
  ]
];
