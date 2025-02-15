<?php
/**
 *The default home controller, called when no contoller/method has been passed
 *to the capplication
 */
declare(strict_types=1);

namespace GenFrame\Controller;
class Home extends Controller

{


public function index($name = '', $sport = ''){

  $user = $this->model('user');
  $user->name = $name;

  $this->view('home/index', [
    'name' => $user->name,
    'sport' => $sport
  ]);

}



}
