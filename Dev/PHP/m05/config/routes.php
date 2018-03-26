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
  ],
  "addproducts" => [
    "path" => "/addproducts",
    "run"  => "AdminController@addproducts"
  ],
  "listproducts" => [
    "path" => "/listproducts",
    "run"  => "AdminController@displayprod"
  ],
  "reservations" => [
    "path" => "/reservations",
    "run"  => "AdminController@displayreserve"
  ],
  "editproducts" => [
    "path" => "/editproducts",
    "run"  => "AdminController@editProducts"
  ]
];
