<?php

require_once "bootstrap.php";

use Entity\Utilisateur;

/** @var Utilisateur $utilisateurs */
$utilisateurs = $entityManager->getRepository(Utilisateur::class)->find(1);

?>

<h1><?= $utilisateurs->getPrenom() . " " . $utilisateurs->getNom(); ?></h1>

<p>Civilité : <?= $utilisateurs->getCivilite()->getLibelle(); ?></p>
