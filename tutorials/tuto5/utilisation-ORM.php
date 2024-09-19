<?php
    // Configuration de Doctrine (simplifiée)
use Doctrine\ORM\EntityManager;

$entityManager = EntityManager::create(/* ... paramètres de connexion ... */);

// Création d'un nouvel auteur et de livres associés
$auteur = new Auteur();
$auteur->setNom('Dumas');

$livre1 = new Livre();
$livre1->setTitre('Les Trois Mousquetaires');
$livre1->setAuteur($auteur);

$entityManager->persist($auteur);
$entityManager->persist($livre1);
$entityManager->flush();
?>