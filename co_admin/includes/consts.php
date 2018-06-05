<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 05.06.2018
 * Time: 10:41
 */
namespace includes\consts;

define('CO_BASE', __DIR__);

$parts = explode(DIRECTORY_SEPARATOR, CO_BASE);
array_pop($parts);

// Defines
define('CO_ROOT',          dirname(implode(DIRECTORY_SEPARATOR, $parts)));

const CO_CONF = CO_ROOT;

// define('CO_CONF', dirname(CO_ROOT));