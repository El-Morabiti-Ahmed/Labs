# Portail e-Sport - Spécifications Techniques

## Description du Projet
**Le Portail de Gestion e-Sport** est une application web légère conçue pour suivre et gérer des titres de jeux e-sport. L'interface propose un tableau de données dynamique ainsi qu'un formulaire interactif permettant d'ajouter de nouveaux jeux (en précisant le nom du jeu et la plateforme).

L'application suit une architecture modulaire séparant l'interface client (`frontend/`) de la logique serveur écrite en PHP orienté objet (`backend/`). Les échanges de données sont gérés de manière asynchrone via JavaScript (`main.js`) qui communique avec un point d'entrée API (`api.php`), assurant la persistance des données dans un fichier de stockage JSON local (`data/games.json`) sans rechargement de page.

---

## Stack Technique
* **Frontend :** HTML5, Tailwind CSS, JavaScript (`frontend/main.js`)
* **Backend :** PHP Orienté Objet (POO)
* **API & Routage :** `backend/api.php` (Traitement des requêtes entre le frontend et les classes backend)
* **Persistance des Données :** JSON (`backend/data/games.json`)

---

## Fonctions Principales (Features)

* **Affichage Dynamique du Tableau :** Chargement et rendu de la liste des jeux (nom et plateforme) stockés dans le fichier JSON via des requêtes asynchrones gérées par JavaScript.
* **Formulaire d'Ajout Interactif :** Bouton et formulaire dédiés à la saisie de nouveaux jeux pour enrichir dynamiquement le tableau.
* **Persistance des Données JSON :** Lecture et écriture automatisées dans `data/games.json` via les classes PHP.
* **Architecture Orientée Objet (PHP) :**
  * `Game.php` : Modèle représentant l'entité jeu (propriétés et accesseurs).
  * `GameManager.php` : Couche de gestion pour manipuler le fichier JSON (lecture, écriture, filtrage).
  * `GameController.php` : Contrôleur traitant les données et coordonnant les actions.
* **Gestion des États UI & Notifications :**
  * Bouton « Enregistrer » dynamique affichant l'état `Enregistrement...` pendant l'envoi des données.
  * Système de notification informant l'utilisateur du succès ou de l'échec de l'enregistrement en temps réel.

---

## Architecture & Structure des Fichiers

```text
├── frontend/
│   ├── index.html             # Interface utilisateur principale (Tailwind CSS)
│   └── main.js                # Logique frontend, requêtes AJAX/Fetch et manipulation du DOM
└── backend/
    ├── api.php                # Point d'entrée unique / routeur pour les requêtes backend
    ├── classes/
    │   ├── Game.php           # Modèle entité du jeu
    │   ├── GameManager.php    # Gestion de la persistance des données JSON
    │   └── GameController.php # Contrôleur de gestion des actions
    └── data/
        └── games.json         # Fichier de stockage des données
```