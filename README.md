🚗 Projet : Système de Gestion de Location de Voitures – MaBagnole
📌 Contexte du projet

L’agence MaBagnole souhaite enrichir son site web en intégrant un système complet de gestion de location de voitures.
Cette plateforme permettra aux clients de consulter, rechercher et réserver des véhicules en ligne, tout en offrant aux administrateurs des outils avancés de gestion et de suivi.

Le projet a pour objectif de concevoir une application web dynamique, sécurisée et évolutive, en s’appuyant sur :

PHP orienté objet (POO)

Base de données SQL

Conception UML (diagrammes de classes, cas d’utilisation, etc.)

🎯 Objectifs principaux

Offrir une expérience utilisateur fluide pour la réservation de véhicules

Permettre une gestion centralisée des véhicules, réservations et avis

Mettre en place une architecture robuste et maintenable

Exploiter les fonctionnalités avancées de SQL (vues, procédures stockées)

👤 Fonctionnalités – Côté Client (User Stories)
🔐 Authentification

🚗 En tant que client, je dois me connecter afin d’accéder à la plateforme de location.

🚘 Consultation des véhicules

🏍️ En tant que client, je peux explorer les différentes catégories de véhicules disponibles.

🚗 En tant que client, je peux cliquer sur un véhicule pour afficher ses détails :

modèle

prix

disponibilité

catégorie

évaluations

🔎 Recherche et filtres

🔎 En tant que client, je peux rechercher un véhicule par son modèle ou ses caractéristiques.

🏍️ En tant que client, je peux filtrer les véhicules par catégorie sans rafraîchir la page (AJAX).

📅 Réservation

🛣️ En tant que client, je peux réserver un véhicule en précisant :

les dates de location

le lieu de prise en charge

📝 Avis et évaluations

📝 En tant que client, je peux ajouter un avis ou une évaluation sur un véhicule que j’ai loué.

🚙 En tant que client, je peux modifier ou supprimer mes propres avis (Soft Delete).

📄 Pagination

🏦 En tant que client, je peux consulter les véhicules avec pagination.

Deux versions possibles :

🚙 Version 1 (recommandée) : Pagination réalisée en PHP

🚙🚙 Version 2 : Pagination dynamique avec DataTables

🛠️ Fonctionnalités – Côté Administrateur

🏦 En tant qu’administrateur, je peux :

ajouter plusieurs véhicules ou catégories en une seule opération (insertion en masse)

gérer les véhicules, réservations, avis et catégories

consulter des statistiques globales via un dashboard administrateur :

nombre de réservations

véhicules disponibles

avis clients

catégories les plus utilisées

🧠 Conception & Base de données (SQL – Extra)
📊 Vue SQL

➕ Création d’une vue SQL ListeVehicules permettant de regrouper :

informations des véhicules

catégories associées

moyenne des évaluations

disponibilité

⚙️ Procédure stockée

➕ Création d’une procédure stockée AjouterReservation permettant :

d’ajouter une réservation

de vérifier la disponibilité du véhicule

de sécuriser l’insertion des données
