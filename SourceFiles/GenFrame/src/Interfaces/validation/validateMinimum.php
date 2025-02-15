<?php
declare(strict_types=1);

namespace GenFrame\src\Interfaces\validation;
class ValidateMinimum implements ValidationRuleInterface

{


  private $minimum;

  public function __construct($minimum) {
      $this->minimum = $minimum;
  }

  function validateRule($value) {

    if(strlen($value) < $this->minimum) {
      return false;
    }
    return true;
  }

  function getErrorMessage() {
    return "Must be more than " . $this->minimum ." characters.";
  }

}
