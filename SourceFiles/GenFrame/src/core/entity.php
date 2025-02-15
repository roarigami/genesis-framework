<?php
declare(strict_types=1);

namespace GenFrame\src\core;
abstract class Entity //extends Database

{
  protected $dbc;
  protected $tableName;
  protected $fields;
  protected $primaryKeys = ['id'];

  //force extended classes to define this method
  abstract protected function initFields();

  protected function __construct($dbc, $tableName) {
      $this->dbc = $dbc;
      $this->tableName = $tableName;
      $this->initFields();
  }

  public function findBy($fieldName, $fieldValue) {

      $result = $this->find($fieldName, $fieldValue);
      if($result && $result[0]){
          $this->setValues($result[0]);
          //$this->setValues($this, $result[0]); //<-- This caused fields array to be null
      }
      // //$stmt->debugDumpParams();
  }

  public function findAll() {
      $results = [];
      $dbData = $this->find();

      if($dbData) {
          $className = static::class;
          foreach($dbData as $objectData) {
              $object = new $className($this->dbc);
              $object = $this->setValues($object, $objectData);
              $results[] = $object;
          }
      }
      return $results;
  }



  //Select / Get rows -> Query for rows to display from db
  private function find($fieldName = '', $fieldValue = '') {

      $results = [];
      $preparedFields = [];

      $sql = "SELECT * FROM " . $this->tableName;
      if($fieldName) {
          $sql .= " WHERE " . $fieldName . " = :value";
          $preparedFields = ['value' => $fieldValue];
      }

      $stmt = $this->dbc->prepare($sql);
      $stmt->execute($preparedFields);

      $dbData = $stmt->fetchAll();
      return $dbData;
    }


    //insert function -> Insert items into db
    public function insert() {


    }


  //save / update function -> Update items in db
  public function save() {

      $fieldBindings = [];
      $keyBindings = [];
      $preparedFields = [];

      foreach($this->primaryKeys as $keyName) {
          $keyBindings[$keyName] = $keyName . '= :' . $keyName;
          $preparedFields[$keyName] = $this->$keyName;
      }

      foreach($this->field as $fieldName) {
          $fieldBindings[$fieldName] = $fieldName . '= :' . $fieldName;
          $preparedFields[$fieldName] = $this->$fieldName;
      }


      //$sql = "UPDATE pages SET title = :title, content = :content WHERE id = :id";
      $fieldBindingString = join(', ', $fieldBindings);
      $keyBindingString = join(', ', $keyBindings);
      $sql = "UPDATE " . $this->tableName . " SET " . $fieldBindingString
             . " WHERE " . $keyBindingString;


      $stmt = $this->dbc->prepare($sql);
      $stmt->execute($preparedFields);

  }


  //delete function -> Delete items from db
  public function delete() {



  }


  public function queryCount($query) {

      $queryCount = $query->rowCount();
      return $queryCount;
  }


  public function setValues($values, $object = null) {
    if($object === null ) {
        $object = $this;
    }


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
