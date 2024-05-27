<?php

session_start();

$path = $_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Router.php";

$url = key($_GET);

$router = new Router();
$router->addRoute("/", "main.php");
$router->addRoute("/main", "main.php");
$router->addRoute("/start", "main.php");
$router->addRoute("/главная", "main.php");
$router->addRoute("/profile", "profile.php");
$router->addRoute("/rules", "rules.php");

$router->route("/".$url);