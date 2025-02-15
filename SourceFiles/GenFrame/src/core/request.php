<?php
declare(strict_types=1);
namespace GenFrame\src\core;

class Request

{

public static function uri() {
  return trim($_SERVER['REQUEST_URI'], '/');
}


}
