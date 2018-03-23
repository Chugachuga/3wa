<?php

session_start();
require_once "../core/Request.php";
require_once "../core/Config.php";
require_once "../core/Router.php";
require_once "../core/Controller.php";
require_once "../core/Database.php";
require_once "../src/Model/User.php";
require_once "../core/Session.php";
require_once "../core/Alert.php";
require_once "../core/Auth.php";

$config   = new Config;
$db       = Database::getInstance($config);

$request  = new Request($config);
$config->get("base", "app");
$router1  = new Router($config, $request);
$router1->dispatch();
