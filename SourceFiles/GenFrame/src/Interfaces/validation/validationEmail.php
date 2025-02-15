<?php
declare(strict_types=1);

namespace GenFrame\src\Interfaces\validation;
class ValidateEmail implements ValidationRuleInterface

  {

    function validateRule($value) {

      if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
        return false;
      }
      return true;
    }

    function getErrorMessage() {
      return "You must enter a valid email.";
    }

  }
