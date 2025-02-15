<?php
declare(strict_types=1);

namespace GenFrame\src\core;
class Validation

 {

   private $rules;
   private $errorMessages = [];

   public function addRule(ValidationRuleInterface $rule) {
       $this->rules[] = $rule;
       return $this;
   }

   public function validate($value) {
       foreach($this->rules as $rule) {
           $ruleValidation = $rule->validateRule($value);
           if(!$ruleValidation) {
               //var_dump($ruleValidation);
               $this->errorMessages[] = $rule->getErrorMessage();
               return false;
           }
       }
       return true;
   }

   public function getAllErrorMessages() {
      return $this->errorMessages;
   }

 }
