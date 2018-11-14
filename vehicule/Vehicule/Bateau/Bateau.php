<?php

namespace Vehicule\Bateau;


use Vehicule\Vehicule;

abstract class Bateau extends Vehicule
{

    /** @var string $nbCoques */
    private $nbCoques;

    public abstract function demarrer() : void;

}