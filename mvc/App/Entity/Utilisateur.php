<?php

namespace App\Entity;

use Core\Entity\Entity;

class Utilisateur extends Entity
{
    /** @var int $id */
    protected $id;
    /** @var string $nom */
    protected $nom;
    /** @var string $prenom */
    protected $prenom;
    /** @var  string $login*/
    protected $login;
    /** @var string $motDePasse */
    protected $mot_de_passe;
    /** @var string $email */
    protected $email;
    /** @var \DateTime $dateNaissance */
    protected $date_naissance;
    /** @var string $adresse */
    protected $adresse;
    /** @var int $villeId */
    protected $ville_id;
    /** @var int $civiliteId */
    protected $civilite_id;

    
    /** get full name
     * @return string
     */
    public function getFullname()
    {
        return $this->getCivilite()->getLibelle() . ' ' . $this->getPrenom() . ' ' . $this->getNom();
    }
    
    /** ASSOCIATION: get civilite of current utilisateur
     * @return Civilite
     */
    public function getCivilite() : Civilite
    {
        return $this->database->query(
            "SELECT * FROM civilite WHERE id = " . $this->civilite_id,
            Civilite::class,
            true
        );
    }
    
    public function __toString()
    {
        return $this->getFullname();
    }
    
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
    public function getNom(): string
    {
        return strtoupper($this->nom);
    }
    
    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    
    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    
    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    
    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }
    
    /**
     * @return string
     */
    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }
    
    /**
     * @param string $motDePasse
     */
    public function setMotDePasse(string $motDePasse): void
    {
        $this->motDePasse = $motDePasse;
    }
    
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    /**
     * @return \DateTime
     */
    public function getDateNaissance(): \DateTime
    {
        return $this->dateNaissance;
    }
    
    /**
     * @param \DateTime $dateNaissance
     */
    public function setDateNaissance(\DateTime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }
    
    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }
    
    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }
    
    /**
     * @return int
     */
    public function getVilleId(): int
    {
        return $this->villeId;
    }
    
    /**
     * @param int $villeId
     */
    public function setVilleId(int $villeId): void
    {
        $this->villeId = $villeId;
    }
    
    /**
     * @return int
     */
    public function getCiviliteId(): int
    {
        return $this->civiliteId;
    }
    
    /**
     * @param int $civiliteId
     */
    public function setCiviliteId(int $civiliteId): void
    {
        $this->civiliteId = $civiliteId;
    }
    
}