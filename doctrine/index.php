<?php

require_once "bootstrap.php";

use Entity\Utilisateur;
use Entity\Civilite;

/* Insert example */

/** @var Civilite $monsieur */
$monsieur = $entityManager->getRepository(Civilite::class)->find(1);

$user = new Utilisateur();
$user->setPrenom("Pierre");
$user->setNom("Jehan");
$user->setCivilite($monsieur);
$user->setEmail("pierre.jehan@gmail.com");
$user->setDateNaissance(new DateTime("1989-06-29"));
$user->setLogin("pjehan");
$user->setMotDePasse(sha1("pjehan"));

$entityManager->persist($user);
$entityManager->flush();

/* Query examples */

/* with a standard query */
/** @var Utilisateur $utilisateurs */
$utilisateurs = $entityManager->getRepository(Utilisateur::class)->findBy(['nom'=> 'Brandon'], ['prenom' => 'DESC']);
// findBy(['nom'=> 'Brandon']) similar to findByNom('Brandon')

/* with a custom query */
$utilisateurs2 = $entityManager->getRepository(Utilisateur::class)->findCustom('Pierre');
?>

<?php foreach($utilisateurs as $utilisateur) : ?>
    <h1><?= $utilisateur->getPrenom() . " " . $utilisateur->getNom(); ?></h1>
    <p>Civilité : <?= $utilisateur->getCivilite()->getLibelle(); ?></p>
<?php endforeach; ?>

<?php foreach($utilisateurs2 as $utilisateur2) : ?>
    <h1><?= $utilisateur2->getPrenom() . " " . $utilisateur2->getNom(); ?></h1>
    <p>Civilité : <?= $utilisateur2->getCivilite()->getLibelle(); ?></p>
<?php endforeach; ?>
