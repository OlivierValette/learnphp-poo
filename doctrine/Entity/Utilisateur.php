<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(
 *     name="utilisateur",
 *     indexes={
 *          @ORM\Index(name="fk_utilisateur_ville1_idx", columns={"ville_id"}),
 *          @ORM\Index(name="fk_utilisateur_civilite1_idx", columns={"civilite_id"})
 *          },
 *     )
 * @ORM\Entity(repositoryClass="Entity\Repository\UtilisateurRepository")
 */
 
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255, nullable=false)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="civilite_id", referencedColumnName="id")
     * })
     */
    private $civilite;

    /**
     * @var Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     * })
     */
    private $ville;
    
    
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
        return $this->nom;
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
     * @return \DateTime|null
     */
    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }
    
    /**
     * @param \DateTime|null $dateNaissance
     */
    public function setDateNaissance(?\DateTime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }
    
    /**
     * @return null|string
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    
    /**
     * @param null|string $adresse
     */
    public function setAdresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }
    
    /**
     * @return Civilite
     */
    public function getCivilite(): Civilite
    {
        return $this->civilite;
    }
    
    /**
     * @param Civilite $civilite
     */
    public function setCivilite(Civilite $civilite): void
    {
        $this->civilite = $civilite;
    }
    
    /**
     * @return Ville
     */
    public function getVille(): Ville
    {
        return $this->ville;
    }
    
    /**
     * @param Ville $ville
     */
    public function setVille(Ville $ville): void
    {
        $this->ville = $ville;
    }

}
