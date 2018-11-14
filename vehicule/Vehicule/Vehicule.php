<?php

namespace Vehicule;

abstract class Vehicule implements Deplacable
{
    /** @var string $couleur */
    private $couleur;
    /** @var bool $permis */
    private $permis;
    /** @var string $marque */
    private $marque;
    /** @var int $nbRoues */
    private $nbRoues;
    /** @var float $vitesse */
    private $vitesse;

    /**
     * Vehicule constructor.
     * @param string $marque
     * @param int $nbRoues - default: 4
     * @param bool $permis - default: true
     */
    public function __construct (string $marque, int $nbRoues = 4, bool $permis = true)
    {
        echo "Construction d'un véhicule<br>";
        $this->marque = $marque;
        $this->nbRoues = $nbRoues;
        $this->permis = $permis;
        $this->vitesse = 0;
    }

    public function avancer (float $vitesse): void
    {
        echo 'On avance...<br>';
        $this->vitesse = $vitesse;
    }

    /** getters and setters */
    /**
     * @return string
     */
    public function getCouleur (): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur (string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return bool
     */
    public function isPermis (): bool
    {
        return $this->permis;
    }

    /**
     * @param bool $permis
     */
    public function setPermis (bool $permis): void
    {
        $this->permis = $permis;
    }

    /**
     * @return string
     */
    public function getMarque (): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque (string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return int
     */
    public function getNbRoues (): int
    {
        return $this->nbRoues;
    }

    /**
     * @param int $nbRoues
     */
    public function setNbRoues (int $nbRoues): void
    {
        $this->nbRoues = $nbRoues;
    }

    /**
     * @return float
     */
    public function getVitesse (): float
    {
        return $this->vitesse;
    }

}

