<?php

use GenFrame\src\core\{Database, Template, Dispatch, Router, Request};
use GenFrame\src\Interfaces\validation\{ValidateEmptyField};
use GenFrame\Controller\{PageController, ValidationController};

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . 'GenFrame' . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR);
define('MODULE_PATH', ROOT_PATH . 'GenFrame' . DIRECTORY_SEPARATOR . 'Modules' . DIRECTORY_SEPARATOR);
define('ENCRYPTION_SALT', 'G6dg*&fdFS%6sD%JS87s0bs*77s');

require_once 'pageroutes.php';
require_once ROOT_PATH . 'Config/config.php';
require_once ROOT_PATH . 'Config/loaders/autoloader.php';
//require_once ROOT_PATH . 'Config/loaders/autoloaderValidation.php';
//require_once ROOT_PATH . 'App/dataroutes.php';


//Manually Set timezone
date_default_timezone_set('America/Toronto');

//GET CURRENT VIEW PAGE DISPATCHER
$action = $_GET['page_url'] ?? 'home';

//var_dump($dbc);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost')?'.'.$_SERVER['HTTP_HOST']:false;

//var_dump($pgr['routes'][0]);
$dispatch = new Dispatch($pgr);
$dispatch->findPageBy('page_url', $action);
//var_dump($dispatch);

$module = $dispatch->module;
// $section = $dispatch->section;
// var_dump($section);

if($module == "page") {
  $action = $dispatch->action != '' ? $dispatch->action : 'default';
  $moduleName = $dispatch->module . 'Controller';
  $mdln = ucfirst($moduleName);//converts first letter to uppercase because classes start with uppercase

  $section = $dispatch->section;

  $controllerFile = ROOT_PATH . 'GenFrame/Controller/' . $mdln . '.php';

  if(file_exists($controllerFile)) {
    //var_dump($controllerFile);
    //include $controllerFile;
    $controller = new PageController($pgr);

    $controller->template = new Template(MODULE_PATH . 'Page/View/PageLayout/DefaultPageLayout');

    $controller->setEntityId($dispatch->entity_id);
    $controller->runAction($action);

  }
  //END GET VIEW PAGE DISPATCHER
}

//var_dump($_SERVER['REQUEST_URI']);


if(!empty($_POST)){

  //echo "It's working";
  $validationController = new ValidationController();
  $validationController->template = new Template(MODULE_PATH . 'Page/View/PageLayout/DefaultPageLayout');
  //$validationController = setEntityId($router->entity_id);
  $validationController->runAction($action);
  //require Router::load(ROOT_PATH . 'App/dataroutes.php');
          //->show(Request::uri());
}

// $router = new Router;
// $router->define([
//   'login' => "Controller/ValidationController.php",
//   'register' => "Controller/RegisterController.php"
// ]);
// $uri = Request::uri();
// $router->show($uri);

// if($module == "authentication") {
//   echo "It's working";
//   $validationController = new ValidationController();
//   $validationController->template = new Template(MODULE_PATH . 'Page/View/PageLayout/DefaultPageLayout');
//   //$validationController = setEntityId($router->entity_id);
//   $validationController->runAction($action);
//
// }

// if($module == "genesis") {
//
//   //GENESIS Router
//   $dbh = Database::getInstance();
//   $dbc = $dbh->getConnection();
//
//   $router = new Router($dbc);
//
//
// }
