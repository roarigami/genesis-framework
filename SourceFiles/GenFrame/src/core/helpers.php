<?php
declare(strict_types=1);

namespace \GenFrame\src\core;
class Helpers

{


  //Get the age of a user with given birthdate
  public static function getAge($original_date) {
    // Creating timestamp from given date
    $timestamp = strtotime($original_date);
    // Creating new date format from that timestamp
    $new_date = date("m-d-Y", $timestamp);
    //date in mm/dd/yyyy format; or it can be in other formats as well
      $birthDate = $new_date;
      //explode the date to get month, day and year
      $birthDate = explode("-", $birthDate);
      //get age from date or birthdate
      $age = (date("md", date("U", mktime(0, 0, 0, (int)$birthDate[0], (int)$birthDate[1], (int)$birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));

      return $age;
  }

  public function sanitize($dirty){
    return htmlentities($dirty, ENT_QUOTES, "UTF-8");
  }

  public function money($number){
    return '$'.number_format($number,2);
  }

  function pretty_date($date){
    return date("M d, Y h:i A", strtotime($date));
  }


}
