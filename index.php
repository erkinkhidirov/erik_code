<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 04.06.2018
 * Time: 13:30
 */

// use classes\yii;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


// require_once('framework/autoloader.php');

require_once('header.php');

require_once('body.php');

require_once('footer.php');


?>
<?php

if(isset($_GET['url'])) {
    $url = $_GET['url'];
    // echo $url;
    require_once 'classes/'. $url .'.php';
    $cc = $url;

    $controller = new $cc;
}



?>