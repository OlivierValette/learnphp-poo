<?php

// auto-loader (pour remplacer les require_once de toutes les classes de MediaLib)
function medialib_autoloader($class_name)
{
    $class_name = str_replace('\\', '/', $class_name) . '.php';
    require_once $class_name;
}
spl_autoload_register('medialib_autoloader');

use MediaLib\Picture;
use MediaLib\Video\Youtube;


$input = new \TagGenerator\Tag("input");
$input->addAttribute("name", "firstname");
$input->addAttribute("placeholder", "Prénom");
$input->render();
echo '<br>';
echo 'Number of attributes: ' . count($input);


echo "<hr>";
$audio = new \MediaLib\Audio("musique.mp3");
$audio->setAutoplay(true);
var_dump($audio);

echo "<hr>";
$media = new Picture("https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png");
$media->render();


echo "<hr>";
$video = new Youtube("https://www.youtube.com/watch?v=9vJ3-HNJU9U");
$video->render();