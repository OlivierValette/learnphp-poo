<?php
// bootstrap.php ("programme d'amorçage")

// autoload for vendor classes
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("/Entity");
$isDevMode = false;

// database configuration parameters
$dbParams = array(
'driver'   => 'pdo_mysql',
'user'     => 'root',
'password' => '',
'dbname'   => 'vente_en_ligne',
);

// obtaining the entity manager
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);