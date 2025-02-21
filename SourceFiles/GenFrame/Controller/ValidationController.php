<?php
declare(strict_types=1);

namespace GenFrame\Controller;
use GenFrame\src\core\Validation;

class ValidationController extends \GenFrame\src\core\Controller

  {

    function runBeforeAction() {

<<<<<<< HEAD
      if($_SESSION['GENESIS'] ?? false == true) {
=======
      if($_SESSION['GEN'] ?? false == true) {
>>>>>>> 982a9d266db9879df0a84dd7e5020686652f9295
        return true;
      }
      $action = $_GET['action'] ?? $_POST['action'] ?? 'default';
        if($action != 'login') {
          header('Location: . ROOT_PATH . public/index?module=authentication&action=login');
      } else {
        return true;
      }
    }

    function defaultAction() {
      $variables = [];
      $this->template->view('home', $variables);
      //echo 'Welcome to administration';
      //header('Location: ../admin/index.php?module=page');
      //exit();
    }

    function loginAction() {

      if($_POST['postAction'] ?? 0 == 1) {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';



        $validation = new Validation();
        //var_dump($password);

        if(!$validation
                ->addRule(new ValidateEmptyField('Password'))
                ->addRule(new ValidateMinimum(6))
                ->addRule(new ValidateMaximum(20))
                //->addRule(new ValidateNoEmptySpaces())
                //->addRule(new ValidateSpecialCharacter())
                ->validate($password)
              ) {

                $_SESSION['validationRules']['errors'] = $validation->getAllErrorMessages();
              }

        if(!$validation
                ->addRule(new ValidateEmptyField('Email'))
                ->addRule(new ValidateEmail())
                ->validate($email)
              ) {

                $_SESSION['validationRules']['errors'] = $validation->getAllErrorMessages();
              }

        if(($_SESSION['validationRules']['errors'] ?? '') == '') {

            $auth = new Authentication();
            if($auth->checkLogin($email, $password)) {
                  //everyting is good
<<<<<<< HEAD
                  $_SESSION['GENESIS'] = 1;
=======
                  $_SESSION['GEN'] = 1;
>>>>>>> 982a9d266db9879df0a84dd7e5020686652f9295
                  header('Location: index.php');
                  exit();
            }

            $_SESSION['validationRules']['errors'] = $validation->getAllErrorMessages();
        }

        //var_dump('bad login');
      }

      include MODULE_PATH . 'Authentication/Page/View/PageContent/login.php';
      unset($_SESSION['validationRules']['errors']);
    }


<<<<<<< HEAD
    function hasPermission($user, $permission = 'GENESIS'){
=======
    function hasPermission($user, $permission = 'GEN'){
>>>>>>> 982a9d266db9879df0a84dd7e5020686652f9295

      $permissions = explode(',', $user['permissions']);
        if(in_array($permission,$permissions,true)){
          return true;
        }
      return false;
    }



  }
