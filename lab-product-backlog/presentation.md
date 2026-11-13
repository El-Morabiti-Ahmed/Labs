---
marp: true
theme: default
paginate: true
style: |
  section {
    font-family: Arial, sans-serif;
    color: #263445;
    background: #ffffff;
    padding: 55px;
    font-size: 25px;
  }
  h1 {
    color: #1e3a5f;
    border-bottom: 3px solid #55738f;
    padding-bottom: 12px;
  }
  h2 {
    color: #345574;
  }
  strong {
    color: #1e3a5f;
  }
  blockquote {
    border-left: 4px solid #55738f;
    color: #526477;
    font-size: 19px;
  }
  code {
    background: #edf1f5;
  }
---

<!-- _class: lead -->

# Product Backlog

<div class="logos" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:32px">
<img src="images/ofppt.png"><img src="images/solicode.png">
</div>

### Gestion et organisation d'un projet Agile

**Présenté par :** Ahmed El Morabiti

**Encadré par :** ES-SARRAJ FOUAD

---

# 1. Le problème rencontré

Dans un projet informatique, le développement peut rapidement devenir difficile à organiser.

Plusieurs problèmes peuvent apparaître :

- Les besoins du client ne sont pas clairement organisés.
- Les développeurs ne savent pas toujours quelle tâche réaliser en premier.
- Certaines fonctionnalités importantes peuvent être oubliées.
- Les changements du client peuvent désorganiser le travail.
- L'équipe peut perdre du temps sur des tâches peu prioritaires.

**Conséquence :** Le projet manque d'organisation et risque de ne pas répondre aux besoins du client.

**Note orale :** Sans une bonne organisation des besoins, l'équipe risque de perdre du temps et de développer des fonctionnalités qui ne répondent pas aux attentes du client.

---

# 2. Qu'est-ce que le Product Backlog ?

Le **Product Backlog** est une liste organisée de tous les éléments nécessaires à la réalisation et à l'amélioration d'un produit.

Il représente le travail à effectuer pendant le développement du projet.

Il peut contenir :

- **User Stories :** les fonctionnalités demandées par les utilisateurs.
- **Bugs :** les problèmes à corriger.
- **Améliorations :** les fonctionnalités existantes à améliorer.
- **Tâches techniques :** les travaux nécessaires au bon fonctionnement du système.

### Son objectif

Donner à toute l'équipe une vision claire du travail à réaliser et des priorités du projet.

**Note orale :** Le Product Backlog centralise tous les besoins du projet dans une seule liste accessible à l'équipe.

---

# 3. Comment fonctionne le Product Backlog ?

Le Product Backlog évolue pendant toute la durée du projet.

Son fonctionnement repose sur plusieurs étapes :

1. **Identifier les besoins :** recueillir les demandes du client et des utilisateurs.
2. **Créer les éléments :** ajouter les fonctionnalités, corrections et tâches dans le backlog.
3. **Décrire les éléments :** préciser leur objectif et leurs conditions de réalisation.
4. **Prioriser :** organiser les éléments selon leur importance.
5. **Mettre à jour :** ajouter, modifier ou supprimer des éléments selon l'évolution du projet.

### Qui est responsable ?

Le **Product Owner** est responsable de la gestion du Product Backlog, notamment de son contenu, de sa clarté et de son ordre de priorité.

**Note orale :** Le Product Backlog n'est pas une liste définitive, il est régulièrement mis à jour selon les besoins du projet.

---

# 4. Comment organiser les éléments ?

Chaque élément du Product Backlog doit être suffisamment clair pour que l'équipe comprenne le travail demandé.

Une User Story suit généralement cette structure :

> En tant que [utilisateur], je veux [fonctionnalité] afin de [objectif].

### Exemple

**En tant qu'administrateur, je veux ajouter un jeu afin de gérer la liste des jeux disponibles.**

Un élément peut également contenir :

- **Description :** expliquer le besoin.
- **Priorité :** indiquer son importance.
- **Estimation :** évaluer l'effort nécessaire.
- **Critères d'acceptation :** définir les conditions pour considérer le travail comme terminé.

**Note orale :** Une bonne description permet aux développeurs de comprendre précisément ce qu'ils doivent réaliser et comment vérifier le résultat.

---

# 5. La priorisation du Product Backlog

Tous les éléments du backlog n'ont pas la même importance.

La priorisation permet de déterminer quelles fonctionnalités doivent être développées en premier.

Elle peut prendre en compte :

- **La valeur utilisateur :** l'utilité de la fonctionnalité pour le client.
- **L'urgence :** le délai dans lequel le besoin doit être satisfait.
- **La complexité :** le temps et les ressources nécessaires.
- **Les dépendances :** les fonctionnalités qui doivent être réalisées avant d'autres.

### Exemple de priorisation

| Élément | Priorité |
|---|---|
| Ajouter un jeu | Haute |
| Afficher la liste des jeux | Haute |
| Modifier un jeu | Moyenne |
| Ajouter une animation | Basse |

**Note orale :** La priorisation permet à l'équipe de commencer par les fonctionnalités qui apportent le plus de valeur au produit.

---

# 6. Du Product Backlog au Sprint Backlog

Dans Scrum, le Product Backlog sert de base à la planification des Sprints.

Un **Sprint** est une période de travail limitée pendant laquelle l'équipe développe une partie du produit.

### Le processus

1. Le Product Owner organise et priorise le Product Backlog.
2. Pendant le Sprint Planning, l'équipe sélectionne les éléments qu'elle prévoit de réaliser.
3. Ces éléments sont organisés dans le **Sprint Backlog**.
4. L'équipe travaille sur les tâches sélectionnées pendant le Sprint.
5. À la fin du Sprint, le résultat est présenté et évalué.

### Différence importante

- **Product Backlog :** contient l'ensemble du travail prévu pour le produit.
- **Sprint Backlog :** contient le travail sélectionné pour le Sprint en cours et le plan pour le réaliser.

**Note orale :** Le Sprint Backlog permet de transformer les priorités générales du projet en un objectif de travail concret pour l'équipe.

---

# 7. Exemple pratique : Application de gestion de jeux

Imaginons un projet dans lequel nous développons une application permettant à un administrateur de gérer des jeux.

Voici un exemple de Product Backlog :

| ID | User Story | Priorité |
|---|---|---|
| US01 | Ajouter un jeu | Haute |
| US02 | Afficher les jeux | Haute |
| US03 | Modifier un jeu | Moyenne |
| US04 | Supprimer un jeu | Moyenne |
| US05 | Rechercher un jeu | Basse |

### Organisation du travail

**Sprint 1 :**
- Ajouter un jeu.
- Afficher la liste des jeux.

**Sprint 2 :**
- Modifier un jeu.
- Supprimer un jeu.

**Sprint 3 :**
- Ajouter une fonction de recherche.
- Améliorer l'interface.

**Résultat :** Le développement est organisé progressivement, avec des objectifs clairs pour chaque Sprint.

**Note orale :** Cet exemple montre comment le Product Backlog permet de diviser un projet en fonctionnalités organisées selon leur priorité.

---

# 8. Conclusion

Le Product Backlog apporte une solution aux problèmes d'organisation et de gestion des besoins dans un projet informatique.

### Les principaux avantages

- Centraliser tous les besoins du projet.
- Améliorer la communication entre les membres de l'équipe.
- Identifier les tâches les plus importantes.
- Faciliter la planification des Sprints.
- S'adapter aux changements et aux nouvelles demandes.

### À retenir

**Le Product Backlog permet de savoir quoi développer, pourquoi le développer et dans quel ordre le faire.**

Merci pour votre attention !

**Note orale :** En conclusion, le Product Backlog est un outil essentiel de la méthode Agile qui aide l'équipe à travailler de manière organisée, progressive et efficace.