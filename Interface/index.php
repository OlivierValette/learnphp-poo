<?php

/**
 * Dans cet exemple, le code intéressant se trouve plus particulièrement
 * dans la méthode getSize() de la classe Folder.
 */

require_once 'Sizable.php';
require_once 'File.php';
require_once 'Folder.php';

/**
 * - root_folder
 *   - file1
 *   - file2
 *   - sub_folder
 *     - file3
 */

// Création du répertoire root
$root_folder = new Folder();

// Création de 2 fichiers ajoutés dans le répertoire root
$file1 = new File();
$file1->setSize(10);
$root_folder->addContent($file1);

$file2 = new File();
$file2->setSize(15);
$root_folder->addContent($file2);

// Création d'un sous dossier
$sub_folder = new Folder();

// Création d'un nouveau fichier ajouté dans le sous dossier
$file3 = new File();
$file3->setSize(50);
$sub_folder->addContent($file3);

// Ajout du sous dossier au répertoire root
$root_folder->addContent($sub_folder);

echo $root_folder->getSize();