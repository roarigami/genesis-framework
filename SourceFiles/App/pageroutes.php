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
    ),
    array(
      "id" => 4,
      "headtitle" => "About GenFrame",
      "pagecontent" => "about"
    ),
    array(
      "id" => 5,
      "headtitle" => "GenFrame Services",
      "pagecontent" => "services"
    ),
    array(
      "id" => 6,
      "headtitle" => "GenFrame Contact Us",
      "pagecontent" => "contact"
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
    ),
    array(
      "id" => 4,
      "module" => "page",
      "action" => "",
      "entity_id" => 4,
      "page_url" => "about",
      "section" => "Main"
    ),
    array(
      "id" => 5,
      "module" => "page",
      "action" => "",
      "entity_id" => 5,
      "page_url" => "services",
      "section" => "Main"
    )
    ,
    array(
      "id" => 6,
      "module" => "page",
      "action" => "",
      "entity_id" => 6,
      "page_url" => "contact",
      "section" => "Main"
    )
);

//$arrayName = array('test' => , '2');
