<?php
use GenFrame\src\core\Router;

$router = new Router;
$router->define([
  'login' => "Controller/ValidationController.php",
  'register' => "Controller/RegisterController.php"
]);
