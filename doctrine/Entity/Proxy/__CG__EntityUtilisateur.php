<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'login', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'motDePasse', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'dateNaissance', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'civilite', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'ville'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'id', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'nom', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'prenom', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'login', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'motDePasse', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'email', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'dateNaissance', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'adresse', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'civilite', '' . "\0" . 'Entity\\Utilisateur' . "\0" . 'ville'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Utilisateur $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin(string $login): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotDePasse(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotDePasse', []);

        return parent::getMotDePasse();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotDePasse(string $motDePasse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotDePasse', [$motDePasse]);

        parent::setMotDePasse($motDePasse);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance(?\DateTime $dateNaissance): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$dateNaissance]);

        parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $adresse): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite(): \Entity\Civilite
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite', []);

        return parent::getCivilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite(\Entity\Civilite $civilite): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite', [$civilite]);

        parent::setCivilite($civilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): \Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(\Entity\Ville $ville): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        parent::setVille($ville);
    }

}
