# GestEtu – Application de gestion des étudiants

## Description

Ce projet est une application web développée en PHP et MySQL.
Elle permet de gérer les étudiants avec un système CRUD complet.

## Objectifs

* Ajouter, afficher, modifier et supprimer des étudiants
* Utiliser PDO pour sécuriser la base de données
* Créer une interface avec Bootstrap 5
* Ajouter une recherche par nom et classe
* Créer un tableau de bord avec statistiques

## Technologies utilisées

* PHP (PDO)
* MySQL
* Bootstrap 5
* HTML / CSS

## Structure du projet

gestion-etudiants/

* connexion.php
* index.php
* liste.php
* ajouter.php
* details.php
* modifier.php
* supprimer.php
* ecole.sql
* includes/

  * header.php
  * footer.php

## Installation

1. Télécharger ou cloner le projet
2. Importer le fichier ecole.sql dans phpMyAdmin
3. Configurer connexion.php (user, password)
4. Mettre le projet dans htdocs (XAMPP)
5. Ouvrir dans le navigateur : http://localhost/gestion-etudiants/index.php

## Fonctionnalités

* Ajouter un étudiant
* Afficher la liste
* Voir les détails
* Modifier
* Supprimer
* Recherche multicritère
* Tableau de bord

## Sécurité

* Requêtes préparées (PDO)
* Protection contre SQL Injection
* Utilisation de htmlspecialchars()
* Validation des données

## Realisé par:
Sara HAJJI
Hanane ELAASRAOUI
Classe : ILCS 1ère année
