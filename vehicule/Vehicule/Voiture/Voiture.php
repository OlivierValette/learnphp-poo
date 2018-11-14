<?php

namespace Vehicule\Voiture;


use Vehicule\Vehicule;

class Voiture extends Vehicule
{
    const MOTOR_ESSENCE = "Essence";
    const MOTOR_DIESEL = "Diesel";
    const MOTOR_ELECTRIQUE = "Electrique";

    /** @var string $motorisation */
    private $motorisation;

    /**
     * Voiture constructor.
     * @param string $motorisation
     */
    public function __construct (string $motorisation, string $marque, int $nbRoues = 4, bool $permis = true)
    {
        echo "Construction d'une voiture<br>";
        $this->motorisation = $motorisation;
        parent::__construct($marque, $nbRoues, $permis);
    }

    /**
     * Klaxoner
     */
    public function klaxoner() : void
    {
        echo "Bip bip <br>";
    }

    /** getters (and no setters) */
    /**
     * @return string
     */
    public function getMotorisation (): string
    {
        return $this->motorisation;
    }



}