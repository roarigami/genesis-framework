<?php
spl_autoload_register('valCore');

function valCore($class_name) {

    $path = ROOT_PATH . 'GenFrame/src/Interfaces/validation/';
    $extension = '.php';
    $file_path = $path . $class_name . $extension;

    if(file_exists($file_path)) {
      echo "File Exists";
        require $file_path;
    }
    // if(!file_exists($file_path)) {
    //   return false;
    // }
    // require_once $file_path;
}
