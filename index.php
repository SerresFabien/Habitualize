<?php
/** Start the php session */
session_start();

require_once "lib/vendor/autoload.php";

require 'Autoloader.php';
Autoloader::autoload();

use Habitualize\application\DefaultComponentFactory;
use Habitualize\yasmf\Router;
use Habitualize\yasmf\NoControllerAvailableForNameException;


// Local dev
$PREFIX_TO_RELATIVE_PATH = "Habitualize";

//Aboard dev
// $PREFIX_TO_RELATIVE_PATH = dirname(explode("public_html/", $_SERVER["SCRIPT_FILENAME"])[1]);


$data_source = require_once 'db_config.php';
$data_source = $data_source['LOCAL_DEV'];

/**
 * If the controller action method isn't
 * defined or if the controller isn't defined, then we return a 404 error.
 * If an error occurs during the connection to the database, then we return
 * a 500 error.
 */
try {
    $router = new Router(new DefaultComponentFactory()) ;
    $router->route($PREFIX_TO_RELATIVE_PATH, $data_source);
} catch (\Error | \PDOException | NoControllerAvailableForNameException $e) {
    if (get_class($e) == \PDOException::class) {
        //Database error
        header('Location: index.php?action=error&code=500');
    } else {
        //controller or method invalid
        header('Location: index.php?action=error&code=404');
    }
    exit;
}