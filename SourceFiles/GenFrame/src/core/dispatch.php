<?php
declare(strict_types=1);

namespace GenFrame\src\core;
class Dispatch extends Infrastructure

{

  public function __construct($pgr) {
    parent::__construct($pgr, 'routes');
  }

  protected function initFields() {
    $this->fields = [
      'id',
      'module',
      'action',
      'entity_id',
      'page_url',
      'section'
    ];
  }



}
