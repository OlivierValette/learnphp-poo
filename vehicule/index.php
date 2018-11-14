<?php

// auto-loader (pour remplacer les require_once de toutes les classes de MediaLib)
function autoloader($class_name)
{
    $class_name = str_replace('\\', '/', $class_name) . '.php';
    require_once $class_name;
}
spl_autoload_register('autoloader');

use Vehicule\Voiture\Voiture;

$voiture = new Voiture(Voiture::MOTOR_ELECTRIQUE, "Tesla");
$voiture->avancer(15);
$voiture->klaxoner();

echo '<hr>';

$bateau_voile = new Vehicule\Bateau\BateauAMoteur("Jeanneau", 0, false);
$bateau_voile->avancer();