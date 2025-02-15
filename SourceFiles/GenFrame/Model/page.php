<?php
declare(strict_types=1);

namespace CrudFrame\Model;
class Page extends \CrudFrame\src\core\Infrastructure

{

  public function __construct($pgr) {
    parent::__construct($pgr, 'pages');
  }

  protected function initFields() {
    $this->fields = [
      //'id',
      //Don't need 'id' because it is set as the
      //$primaryKey property in src/core/Entity
      'headtitle',
      'pagecontent',
    ];
  }

}
