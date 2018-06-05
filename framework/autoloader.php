<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 04.06.2018
 * Time: 14:57
 */

spl_autoload_register(function($class){

    $main_directory = $_SERVER["DOCUMENT_ROOT"];

    $prefix = "classes\\";
    $length = strlen($prefix);
    $base_directory = $main_directory . "/erik_code/classes/";



    if(strncmp($prefix, $class, $length)){
        return;
    }

    $relative_class = substr($class, $length);
    $file = $base_directory . str_replace('\\', '/', $relative_class) . '.php';

    if(file_exists($file)){
        require $file;
    }
});
