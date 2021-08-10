<?php
declare(strict_types = 1);

namespace Core;

spl_autoload_register(function($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/conf/connection.php';
$routes = require $_SERVER['DOCUMENT_ROOT'] . '/conf/routes.php';

$track = ( new Router )-> getTrack($routes, $_SERVER['REQUEST_URI']);
$page  = ( new Dispatcher )  -> getPage($track);


echo (new View) -> render($page);

