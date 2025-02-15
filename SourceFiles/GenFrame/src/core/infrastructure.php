<?php
declare(strict_types=1);

namespace GenFrame\src\core;
abstract class Infrastructure

{

  protected $pgr;
  protected $arrayName;
  protected $fields;
  protected $primaryKeys = ['id'];

  //force extended classes to define this method
  abstract protected function initFields();

  protected function __construct($pgr, $arrayName) {
      $this->pgr = $pgr;
      $this->arrayName = $arrayName;
      $this->initFields();
  }

  public function findPageBy($fieldName, $fieldValue) {
    //var_dump($fieldName);
      $result = $this->findPage($fieldName, $fieldValue);
      if($result){
          $this->setValues($result);
      }
      // //$stmt->debugDumpParams();
  }

  //get rows from the pgr array
  private function findPage($fieldName = '', $fieldValue = '') {
    $configArrayName = $this->arrayName;
    $configArray = $this->pgr[$configArrayName];

    foreach($configArray as $key => $row) {
      if($row[$fieldName] == $fieldValue) {
        return $row;
      }
    }

  }


  public function setValues($values, $object = null) {
    if($object === null ) {
        $object = $this;
    }
    //var_dump($object);
    foreach($object->primaryKeys as $keyName) {
        if(isset($values[$keyName])){
            $object->$keyName = $values[$keyName];
            //var_dump($this->$keyName);
        }
    }

    foreach($object->fields as $fieldName) {
        if(isset($values[$fieldName])){
            $object->$fieldName = $values[$fieldName];
            //var_dump($this->$fieldName);
        }
    }
    //var_dump($object);
    return $object;
  }





}
