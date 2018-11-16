<?php

namespace App\Entity;

use Core\Entity\Entity;

class Civilite extends Entity
{
    /** @var int $id */
    protected $id;
    /** @var string $libelle */
    protected $libelle;
    
    /* getters and setters */
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }
    
    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }
    
}