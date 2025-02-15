<?php
declare(strict_types=1);

namespace GenFrame\src\Interfaces\validation;
class ValidateMaximum implements ValidationRuleInterface

{


  private $maximum;

  public function __construct($maximum) {
      $this->maximum = $maximum;
  }

  function validateRule($value) {

    if(strlen($value) > $this->maximum) {
      return false;
    }
    return true;
  }

  function getErrorMessage() {
    return "Must be less than " . $this->maximum ." characters.";
  }

}
