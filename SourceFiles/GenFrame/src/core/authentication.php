<?php
declare(strict_types=1);

namespace GenFrame\src\core;
class Authentication

  {

    function checkLogin($email, $password) {

      $dbh = Database::getInstance();
      $dbc = $dbh->getConnection();

      $userObj = new User($dbc);
      $userObj->findBy('email', $email);

      if(property_exists($userObj, 'cls_id')) {
          if($userObj->password == md5($password . ENCRYPTION_SALT . $userObj->password_hash)) {
            //Everything is good
            return true;
          }
      }

    }

    function changeUserPassword($userObj, $newPassword) {
      $tmp = date('Ymdhis') . 'secret_string8334384';
      $hash = md5($tmp);
      $hashedPassword = md5($newPassword . ENCRYPTION_SALT . $hash);

      $userObj->password = $hashedPassword;
      $userObj->password_hash = $hash;
      return $userObj;
    }


    function passwordValidation() {

    }

  }
