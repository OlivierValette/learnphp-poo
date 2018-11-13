<?php

namespace MyApp;

use DateTime;

class Person {

    const DATE_FR = "d/m/Y";
    const DATE_US = "m-d-Y";


    /** @var string $firstname  (permet de type les variables sous PHPStorm) */
    private $firstname;
    /** @var string $lastname */
    private $lastname;
    /** @var DateTime $birthdate */
    private $birthdate;

    // overrides

    // personalized constructor
    public function __construct(string $firstname, string $lastname, DateTime $birthdate=null)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        if ($birthdate != null) {
            $this->setBirthdate($birthdate);
        }
    }


    // getters and setters
    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return trim($this->firstname);
    }

    /**
     * @param string $firstname
     * @return Person
     */
    public function setFirstname(string $firstname): Person
    {
        $this->firstname = ucfirst($firstname);
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return trim($this->lastname);
    }

    /**
     * @param string $lastname
     * @return Person
     */
    public function setLastname(string $lastname): Person
    {
        $this->lastname = ucfirst($lastname);
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    /**
     * @param DateTime $birthdate
     */
    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }


    public function getFormatedBirthdate(string $format = self::DATE_US) : string {
        return $this->getBirthdate()->format($format);
    }

    public function getFullname() : string {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    public function getAge() {
        $today = new DateTime();
        $diff = $today->diff($this->getBirthdate());
        return $diff->y;
    }

    // Exemple (inutile) de méthode statique
    public static function say() {
        return 'Bonjour ' . self::DATE_FR;
    }

}
