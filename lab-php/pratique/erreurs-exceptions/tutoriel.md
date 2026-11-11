# Gérer une exception pendant la recherche d’un jeu

## Objectif

Voir comment un service peut signaler un cas d’échec et comment le code appelant peut répondre avec un message compréhensible. Le petit catalogue en mémoire est une démonstration autonome inspirée du thème jeux/plateformes ; il n’est pas intégré au projet.

## Fichier et déroulement

Dans `exemple.php` :

1. `GameCatalog` reçoit un tableau de jeux dans son constructeur. Les annotations PHPDoc indiquent la forme attendue des données.
2. `findByName()` parcourt le tableau. Si le nom correspond, la méthode renvoie le jeu.
3. Si aucun jeu ne correspond, `throw new RuntimeException(...)` signale l’échec en lançant une exception.
4. Le bloc `try` appelle la méthode d’abord avec un nom connu, puis avec un nom absent.
5. Le `catch (RuntimeException $exception)` intercepte l’exception et affiche son message. Le programme ne termine donc pas sur une erreur non traitée.

## Lancer depuis `lab-php/pratique/erreurs-exceptions`

```bash
php exemple.php
```

Résultat attendu :

```text
Jeu trouvé : Rocket League (PC)
Recherche impossible : Le jeu « Jeu inconnu » est introuvable.
```

Dans l’application réelle, la frontière `try`/`catch` doit être choisie selon son architecture (par exemple, le contrôleur qui transforme l’échec en réponse HTTP). Ici, le script joue simplement ce rôle.

**À essayer :** ajouter un jeu au tableau, puis rechercher son nom. Une exception est utile pour un cas exceptionnel prévu ; elle ne remplace pas la validation normale des champs d’un formulaire.
