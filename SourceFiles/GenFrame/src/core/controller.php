<?php
declare(strict_types=1);

//Main controller
namespace GenFrame\src\core;
class Controller

{

public $GenFrameRoot = '/ABSOLUTE/GenesisFramework/SourceFiles/public/index.php?section=';
public $GenFramePath = '/ABSOLUTE/GenesisFramework/SourceFiles/public';
protected $entityId;
public $template;
public $dbc;
public $pgr;

public function runAction($actionName) {

  if(method_exists($this, 'runBeforeAction')) {
    $result = $this->runBeforeAction();
    if($result == false) {
      return;
    }
  }

  $actionName .= 'Action';
  if(method_exists($this, $actionName)) {
    $this->$actionName();
  } else {
    include VIEW_PATH . 'StatusPages/error404.html';
  }

}

  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }

}
