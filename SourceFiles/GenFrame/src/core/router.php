<?php
declare(strict_types=1);

namespace GenFrame\src\core;
class Router //extends Entity

{

  protected $routes = [];
  // protected $dbc;
  //
  // public function __construct($dbc) {
  //   $this->dbc = $dbc;
  // }

  public function define($routes) {
    $this->routes = $routes;
  }

  public static function load($file) {
    $router = new static;
    require $file;
    return $router;
  }

  public function show($uri) {
    if(array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }

    //throw new Exception('Route not found');
  }



}
