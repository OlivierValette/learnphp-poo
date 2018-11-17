<?php

require_once "Core/Autoloader.php";

use Core\Autoloader;

define("CONTROLLER_NAMESPACE", "\App\Controller\\");

Autoloader::register();

// Gestion des routes

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
// Default action (actions = méthodes)
$action = "indexAction";
if ($parts[0]) {
    $controller_name = CONTROLLER_NAMESPACE . ucfirst($parts[0]) . "Controller";
    if (isset($parts[1])) {
        $action = $parts[1] . 'Action';
    }
}
// Set database to use
/** @var \Core\Controller\Controller $controller */
$controller = new $controller_name();
$controller->setDatabase(new \Core\Database\Database("vente_en_ligne"));
$controller->$action();