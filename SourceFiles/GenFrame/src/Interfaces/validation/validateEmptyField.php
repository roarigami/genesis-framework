<?php
declare(strict_types=1);

namespace GenFrame\src\Interfaces\validation;
class ValidateEmptyField implements ValidationRuleInterface

  {
    private $field;

    public function __construct($field) {
      $this->field = $field;
    }

    function validateRule($value) {

      if($value == ''){
        return false;
      }
      return true;
    }

    function getErrorMessage() {
      return $this->field . " cannot be empty.";
    }

  }
