<?php


class Helper

{


  public function display_errors($errors){
    $display = '<ul class="bg-danger">';
    foreach ($errors as $error){
      $display .='<li class="text-danger">'.$error.'</li>';
    }
    $display .='</ul>';
    return $display;
  }

  public function sanitize($dirty){
    return htmlentities($dirty, ENT_QUOTES, "UTF-8");
  }

  public function money($number){
  return '$'.number_format($number,2);
  }


  public function getAge($original_date) {
    $timestamp = strtotime($original_date);
    $new_date = date("m-d-Y", $timestamp);
      $birthDate = $new_date;
      $birthDate = explode("-", $birthDate);
      $age = (date("md", date("U", mktime(0, 0, 0, (int)$birthDate[0], (int)$birthDate[1], (int)$birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
      return $age;
  }


  public function has_permission($permission = 'Celsus'){
    global $adminUerData;
    $permissions = explode(',', $adminUerData['permissions']);
      if(in_array($permission,$permissions,true)){
        return true;
      }
    return false;
  }
  function pretty_date($date){
    return date("M d, Y h:i A", strtotime($date));
  }


}
