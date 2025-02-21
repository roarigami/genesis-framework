<?php
declare(strict_types=1);

//namespace Root\Auth\Access\Validation;
class ValidateNoDigit implements ValidationRuleInterface

{

  private $rule;

  public function __construct($rule = "/(?=.*\d)/") {
      $this->rule = $rule;
  }

  function validateRule($value) {

    if(preg_match($this->rule, $value)) {
      return false;
    }
    return true;
  }

  function getErrorMessage() {
    return "No digits (numberical characters).";
  }

}
