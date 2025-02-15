<?php
declare(strict_types=1);

namespace GenFrame\Controller;
use GenFrame\Model\Page;

class PageController extends \GenFrame\src\core\Controller

{

  public $pgr = [];

  function __construct($pgr) {
    $this->pgr = $pgr;
  }

  function defaultAction() {

    $pageObj = new Page($this->pgr);
    $pageObj->findPageBy('id', $this->entityId);


    $variables['pageObj'] = $pageObj;
    $variables['GenFramePath'] = $this->GenFramePath;
    var_dump($variables);

    $this->template->view('PageLayout/DefaultPageLayout', $variables);

  }

}
