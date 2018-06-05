<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 05.06.2018
 * Time: 10:39
 */
use includes\consts;

require_once("consts.php");

$main_path =  consts\CO_CONF;

if (!file_exists($main_path . '/configuration.php')
    || (filesize($main_path . '/configuration.php') < 10) || file_exists($main_path . '/index.php'))
{
    if (file_exists($main_path . 'installation/index.php'))
    {
        header('Location: ../installation/index.php');

        exit();
    }
    else
    {
        // echo 'No configuration file found and no installation code available. Exiting...';

        //exit;
    }
}


ob_start();
    require_once $main_path . '/configuration.php';
ob_end_clean();

$co_conf = new CoConfig();
echo $co_conf->password;
