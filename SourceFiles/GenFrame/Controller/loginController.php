<?php
declare(strict_types=1);

namespace GenFrame\Controller;
use GenFrame\Model\Login;

class LoginController extends \GenFrame\src\core\Controller

{

//private $username;
private $email;
private $password;


public function __construct($email, $password) {
$this->email = $email;
$this->password = $password;
}

public function login() {
  if($this->empty_input() == false) {
    //echo "Empty input!";
    header("location: login.php?error=emptyinput");
    exit();
  }
  //login user
  $this->getUser($this->email, $this->password);
}

//Checks if form login inputs are empty
private function empty_input() {
    $result;
    if(empty($this->email) || empty($this->password)){
      $result = false;
    } else {
      $result = true;
    }
    return $result;
}


}
