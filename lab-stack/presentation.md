---
marp: true
theme: default
paginate: true
style: |
  section {
    background: #0b1020;
    color: #e5e7eb;
    font-family: "Arial", sans-serif;
    padding: 55px 70px;
    font-size: 23px;
  }
  h1 {
    color: #ffffff;
    font-size: 2.1em;
    font-weight: 800;
    border-bottom: 4px solid #2673e8;
    padding-bottom: 12px;
  }
  h2 {
    color: #60a5fa;
    font-size: 1.35em;
  }
  h3 {
    color: #93c5fd;
    font-size: 1em;
  }
  strong {
    color: #60a5fa;
  }
  code {
    background: #17243d;
    color: #93c5fd;
    padding: 3px 7px;
    border-radius: 5px;
  }
  table {
    background: #111a2e;
    border-collapse: collapse;
    width: 100%;
    font-size: 19px;
  }
  th {
    background: #1d4ed8;
    color: white;
  }
  td, th {
    border: 1px solid #293957;
    padding: 10px;
  }
  li {
    margin: 12px 0;
  }
  section::after {
    color: #60a5fa;
    font-size: 14px;
  }
  .accent {
    color: #60a5fa;
  }
  .muted {
    color: #94a3b8;
  }
  .center {
    text-align: center;
  }
  .columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
  }
  .panel {
    background: #111a2e;
    border: 1px solid #293957;
    border-left: 4px solid #2673e8;
    border-radius: 10px;
    padding: 18px;
  }
  .tag {
    display: inline-block;
    background: #172d50;
    color: #93c5fd;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 16px;
  }
---

<!-- _class: center -->

<div style="margin-top: 25px; color: #60a5fa; letter-spacing: 5px; font-size: 16px;">
  TECHNICAL PROJECT
</div>



<div style="display:flex; justify-content:center; align-items:center; gap:45px; margin-bottom:35px;">
  <img src="images/ofppt.png" width="115" alt="OFPPT Logo">
  <img src="images/solicode.png" width="115" alt="Solicode Logo">
</div>

# PORTAIL E-SPORT

**Ahmed El Morabiti**

<span class="muted">Encadrant : ES-Saraj Fouad</span>

---

# 01 — Le projet technique

<div class="tag">PRÉSENTATION GÉNÉRALE</div>

## Un portail de gestion de jeux vidéo

L'objectif est de développer une interface permettant d'ajouter et de consulter des jeux vidéo avec leurs plateformes.

<div class="columns">
<div class="panel">

### AJOUT

- Formulaire dynamique
- Saisie du nom du jeu
- Sélection de la plateforme
- Envoi des données au serveur

</div>
<div class="panel">

### AFFICHAGE

- Lecture des données JSON
- Récupération avec JavaScript
- Remplissage automatique du tableau
- Actualisation de l'interface

</div>
</div>

---

# 02 — Stack technique

<div class="tag">ENVIRONNEMENT DE DÉVELOPPEMENT</div>

## Les technologies utilisées

| Technologie | Rôle |
|---|---|
| **HTML** | Structure de la page |
| **Tailwind CSS** | Mise en forme de l'interface |
| **JavaScript** | Interactions et affichage dynamique |
| **Fetch API** | Communication asynchrone |
| **PHP OOP** | Logique côté serveur |
| **JSON** | Stockage des données |

---

## Architecture PHP

<div class="columns">
<div class="panel">

### `games.php`

Représente un jeu et ses propriétés.

</div>
<div class="panel">

### `gameManager.php`

Gère les opérations sur la collection de jeux.

</div>
</div>

<div class="panel" style="margin-top: 15px;">

### `gameController.php`

Traite les requêtes et coordonne les opérations de l'API.

</div>

---

# 03 — Fonctionnalités

<div class="tag">FONCTIONNEMENT DE L'APPLICATION</div>

## Cycle d'ajout d'un jeu

<div style="display: flex; justify-content: space-between; align-items: center; gap: 8px; margin: 35px 0; text-align: center;">
  <div class="panel" style="flex:1">Formulaire</div>
  <span class="accent">→</span>
  <div class="panel" style="flex:1">JavaScript</div>
  <span class="accent">→</span>
  <div class="panel" style="flex:1">API PHP</div>
  <span class="accent">→</span>
  <div class="panel" style="flex:1">JSON</div>
</div>

- Le formulaire apparaît après un clic sur un bouton.
- L'utilisateur renseigne le nom et la plateforme.
- `fetch()` transmet les données à l'API PHP.
- PHP enregistre les données dans le fichier JSON.
- JavaScript récupère les jeux pour remplir le tableau.

---

## Retour visuel pendant l'enregistrement

<div class="columns">
<div class="panel center">

### ÉTAT INITIAL

<div style="background: #2673e8; color: white; padding: 12px; border-radius: 8px; margin-top: 20px;">
  SAVE
</div>

</div>
<div class="panel center">

### ENREGISTREMENT

<div style="background: #1c5bba; color: white; padding: 12px; border-radius: 8px; margin-top: 20px;">
  SAVING...
</div>

</div>
</div>

Un toast informe l'utilisateur de l'état de l'enregistrement et lui fournit un retour sur l'opération.

---

# 04 — Comprendre les Labs

<div class="tag">APPRENTISSAGE PRATIQUE</div>

## Qu'est-ce qu'un Lab ?

Un Lab est un exercice pratique permettant de découvrir et d'expérimenter une technologie, un outil ou une méthode.

<div class="panel" style="margin-top: 25px;">

**L'idée principale :**

Apprendre en expérimentant plutôt qu'en se limitant à la théorie.

</div>

---

## Pourquoi réaliser des Labs ?

<div class="columns">
<div class="panel">

### DÉCOUVRIR

Explorer de nouveaux outils et technologies.

</div>
<div class="panel">

### EXPÉRIMENTER

Tester différentes solutions en pratique.

</div>
<div class="panel">

### COMPRENDRE

Assimiler le fonctionnement des outils.

</div>
<div class="panel">

### APPLIQUER

Réutiliser les connaissances dans un projet réel.

</div>
</div>

---

## Quel est le lien avec le projet technique ?

Les Labs permettent de découvrir et de tester séparément les technologies utilisées dans le portail E-sport.

<div style="display: flex; align-items: center; justify-content: center; gap: 20px; margin-top: 35px;">
  <div class="panel center" style="flex: 1;">

    **LABS**

    <span class="muted">Découverte et expérimentation</span>

  </div>
  <span class="accent" style="font-size: 35px;">→</span>
  <div class="panel center" style="flex: 1;">

    **PROJET**

    <span class="muted">Application des connaissances</span>

  </div>
</div>

---

# 05 — Liste des Labs

<div class="tag">PARCOURS D'APPRENTISSAGE</div>

## Les thèmes à explorer

| Lab | Compétence |
|---|---|
| PHP orienté objet | Classes, objets et méthodes |
| JSON | Lecture et écriture de données |
| API PHP | Réception et traitement des requêtes |
| Fetch API | Communication asynchrone |
| Manipulation du DOM | Affichage dynamique |
| Interface utilisateur | États de chargement et notifications |

<div class="panel" style="margin-top: 25px;">

<span class="accent">OBJECTIF FINAL</span>

Maîtriser les outils et les concepts nécessaires pour développer et améliorer le projet technique.

</div>

---

<!-- _class: center -->

<div style="margin-top: 100px;">

# MERCI !

<span class="accent">PORTAIL E-SPORT</span>

<span class="muted">Ahmed El Morabiti · Encadrant : ES-Saraj Fouad</span>

</div>