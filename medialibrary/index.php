<?php

// auto-loader (pour remplacer les require_once de toutes les classes de MediaLib)
function medialib_autoloader($class_name)
{
    $class_name = str_replace('\\', '/', $class_name) . '.php';
    require_once $class_name;
}
spl_autoload_register('medialib_autoloader');

use MediaLib\Media;

$media = new Media();
$media->setUrl("https://www.google.fr/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png");

echo $media->getUrl();