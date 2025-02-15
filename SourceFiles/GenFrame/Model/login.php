<?php
declare(strict_types=1);

namespace CrudFrame\Model;
class Login extends \CrudFrame\src\core\Database

{

protected function getUser($email, $password){
  $stmt = $this->connect()->prepare("SELECT password FROM users WHERE email = ?");
  //check to see if the statement failed to execute
  if(!$stmt->execute(array($email))) {
    $stmt = null;
    header("location: login.php?error=stmtfailed");
    exit();
  }

  if($stmt->rowCount() == 0){
    $stmt = null;
    header("location: login.php?error=usernotfound1");
    exit();
  }

  $hashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $check_password = password_verify($password, $hashed[0]['password']);

  if($check_password == false){

    $stmt = null;
    header("location: login.php?error=wrongpassword");
    exit();

  } elseif($check_password == true) {

    $stmt = $this->connect()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    if(!$stmt->execute(array($email, $password))) {
      $stmt = null;
      header("location: login.php?error=stmtfailed");
      exit();
    }

    if($stmt->rowCount() == 0){
      $stmt = null;
      header("location: login.php?error=usernotfound2");
      exit();
    }

     $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

     session_start();
     $_SESSION['CRUD'] = $user["crud_id"];
     $stmt = null;

  }


}


//Redirects user of they are not logged in
public function login_error_redirect($url = 'login.php') {
  $_SESSION['error_flash'] = 'You must be logged in to access that page';
  header('Location:'.$url);
}



}
