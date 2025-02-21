<?php
declare(strict_types=1);

//namespace Root\Auth\Access\Validation;
class ValidateCaseLower implements ValidationRuleInterface

{

  private $rule;

  public function __construct($rule = "/(?=.*[a-z])/") {
      $this->rule = $rule;
  }

  function validateRule($value) {

    if(!preg_match($this->rule, $value)) {
      return false;
    }
    return true;
  }

  function getErrorMessage() {
    return "Must have at least one lowercase character.";
  }

}
