<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 04.06.2018
 * Time: 14:54
 */
// namespace classes;



class yii{
    function __construct(){

        $this->main();
    }

    function main_path(){

        $main_path = $_SERVER['DOCUMENT_ROOT'] . "/erik_code";

        return $main_path;
    }

    function main(){
            $main_path = $this->main_path();
            require_once($main_path . "/view/yii.php");
    }
}