<?php

require_once "Core/Autoloader.php";

use Core\Autoloader;

// put the controllers namespace in a constant
define("CONTROLLER_NAMESPACE", "\App\Controller\\");

// autoloader
Autoloader::register();

// Routing

// First get different parts of current URL
// full URL
$siteRoot = rtrim($_SERVER["PHP_SELF"], "index.php");
// alternative method:
// $dir = str_replace("\\", "/", __DIR__);
// $siteRoot = substr($dir, strlen($_SERVER["DOCUMENT_ROOT"]), strlen($dir)) . "/";

// usefull URL (where is index file)
$currentUrl = str_replace($siteRoot, "", $_SERVER["REQUEST_URI"]);
// extract difference
$parts = explode("/", $currentUrl);

// Default controller
$controller_name = CONTROLLER_NAMESPACE . "DefaultController";
// Default action (actions = methods)
$action = "indexAction";
// get controller name and action name
if ($parts[0]) {
    $controller_name = CONTROLLER_NAMESPACE . ucfirst($parts[0]) . "Controller";
    if (isset($parts[1])) {
        $action = $parts[1] . 'Action';
    }
}

// Dispatching

$controller = new $controller_name();

// Set database to use
/** @var \Core\Controller\Controller $controller */
$controller->setDatabase(new \Core\Database\Database("vente_en_ligne"));

// dispatch the request to the proper Controller::Action() method
$controller->$action();