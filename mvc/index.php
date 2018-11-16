<?php

require_once "Core/Autoloader.php";

use Core\Autoloader;

define("CONTROLLER_NAMESPACE", "\App\Controller\\");

Autoloader::register();


/** récupère l'URL appelée avant redirection par .htaccess
 *
 */
echo '$_SERVER["REQUEST_URI"] : ';
echo $_SERVER["REQUEST_URI"];
echo '<hr>';

// TODO gérer les paramètres ex. ?id=toto
// utiliser PATH_INFO

echo '$_SERVER["PHP_SELF"] : ';
echo $_SERVER["PHP_SELF"];
echo '<hr>';

$siteRoot = rtrim($_SERVER["PHP_SELF"], "index.php");
var_dump($siteRoot);

/**
 *  Gestion des routes
 */

// URL à partir de la racine

// $dir = str_replace("\\", "/", __DIR__);
// $siteRoot = substr($dir, strlen($_SERVER["DOCUMENT_ROOT"]), strlen($dir)) . "/";

// URL utile (dossier de l'index)
$currentUrl = str_replace($siteRoot, "", $_SERVER["REQUEST_URI"]);
// différence des deux
$parts = explode("/", $currentUrl);

echo "__DIR__";
var_dump(__DIR__);
echo '$_SERVER["DOCUMENT_ROOT"])';
var_dump($_SERVER["DOCUMENT_ROOT"]);
var_dump($siteRoot);
var_dump($currentUrl);
var_dump($parts);


/**
 *  $controller est une variable qui contient le nom de la classe
 *  $action est une variable qui contient le nom de la méthode
 *  associées au répertoire
 */
// Default controller
$controller = CONTROLLER_NAMESPACE . "DefaultController";
// Default action (actions = méthodes)
$action = "indexAction";
if ($parts[0]) {
    $controller = CONTROLLER_NAMESPACE . ucfirst($parts[0]) . "Controller";
    if (isset($parts[1])) {
        $action = $parts[1] . 'Action';
    }
}

$controller = new $controller();
$controller->$action();