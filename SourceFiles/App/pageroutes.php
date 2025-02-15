<?php


$pgr = array();

$pgr['pages'] = array(
    array(
      "id" => 1,
      "headtitle" => "GenFrame Home",
      "pagecontent" => "home"
    ),
    array(
      "id" => 2,
      "headtitle" => "GenFrame Login",
      "pagecontent" => "login"
    ),
    array(
      "id" => 3,
      "headtitle" => "GenFrame Registration",
      "pagecontent" => "register"
    )
);

$pgr['routes'] = array(
    array(
      'id' => 1,
      "module" => "page",
      "action" => "",
      "entity_id" => 1,
      "page_url" => "home",
      "section" => "Main"
    ),
    array(
      "id" => 2,
      "module" => "page",
      "action" => "",
      "entity_id" => 2,
      "page_url" => "login",
      "section" => "Authentication"
    ),
    array(
      "id" => 3,
      "module" => "page",
      "action" => "",
      "entity_id" => 3,
      "page_url" => "register",
      "section" => "Authentication"
    )
);

//$arrayName = array('test' => , '2');
