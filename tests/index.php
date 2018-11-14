<?php

// auto-loader (pour remplacer les require_once de toutes les classes de MyApp)
function myapp_autoloader($class_name)
{
    $class_name = str_replace('\\', '/', $class_name) . '.php';
    require_once $class_name;
}
spl_autoload_register('myapp_autoloader');

// utilisation du namespace
use MyApp\Person;
use MyApp\Student;
use MyApp\Teacher;
use MyApp\Subject;

$pierre = new Person('Pierre','Jehan');
$pierre->setBirthdate(new DateTime('1989-06-29'));
echo $pierre->getFullname() . ' : ' . $pierre->getAge() . ' ans';
echo "<br>";
$john = new Person("John", "Doe");
$john->setBirthdate(new DateTime('2000-06-29'));
echo $john->getFullname() . ' : ' . $john->getAge() . ' ans';
echo "<br>";
echo $john->getBirthdate()->format(Person::DATE_FR);
echo "<br>";
echo $john->getFormatedBirthdate(Person::DATE_FR);
echo "<br>";
echo $pierre::say();

echo "<hr>";

$elodie = new Student("Elodie", "Dupont");
$elodie->addGrade(12.5);
print_r($elodie->getGrades());
echo "<br>";
$elodie->addGrade(15.0);
print_r($elodie->getGrades());
echo "<br>";
echo "<br>";
echo $elodie->getFullname();
echo "<br>";
echo "Average grade: " . $elodie->getAverage();
echo "<br>";

echo "<hr>";
$jean = new Teacher("Jean", "Jehan", new DateTime("2000-01-01"));
$jean->addSubject(new Subject("PHP"));
$jean->addSubject(new Subject("SQL"));
echo $jean->getFullname();
?>
<ul>
    <?php /** @var Subject $subject */; ?>
    <?php foreach($jean->getSubjects() as $subject) : ?>
    <li><?= $subject->getLabel(); ?></li>
    <?php endforeach; ?>
</ul>

