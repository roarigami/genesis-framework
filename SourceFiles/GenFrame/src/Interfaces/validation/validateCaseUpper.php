<?php
declare(strict_types=1);

//namespace Root\Auth\Access\Validation;
class ValidateCaseUpper implements ValidationRuleInterface

{

  private $rule;

  public function __construct($rule = "/(?=.*[A-Z])/") {
      $this->rule = $rule;
  }

  function validateRule($value) {

    if(!preg_match($this->rule, $value)) {
      return false;
    }
    return true;
  }

  function getErrorMessage() {
    return "Must have at least one uppercase character.";
  }

}
