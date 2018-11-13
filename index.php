<?php
class Person {

    /** @var string $firstname  (permet de type les variables sous PHPStorm) */
    private $firstname;
    /** @var string $lastname */
    private $lastname;
    /** @var DateTime $birthdate */
    private $birthdate;

    // getters and setters
    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = ucfirst($firstname);
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = ucfirst($lastname);
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime
    {
        return $this->ucfirst(birthdate);
    }

    /**
     * @param DateTime $birthdate
     */
    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getFullname() : string {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    public function getAge() {
        $today = new DateTime();
        $diff = $today->diff($this->getBirthdate());
        return $diff->y;
    }

}

$pierre = new Person();
$pierre->setFirstname('Pierre');
$pierre->setLastname('Jehan');
$pierre->setBirthdate(new DateTime('1989-06-29'));
echo $pierre->getFullname() . ' : ' . $pierre->getAge() . ' ans';

