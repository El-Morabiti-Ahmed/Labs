# Organiser deux classes avec des namespaces

## Objectif

Comprendre comment deux classes portant le même nom peuvent coexister lorsqu’elles appartiennent à des espaces de noms différents. Les classes `Game` illustrent deux rôles possibles autour d’un catalogue ; elles sont fictives et ne sont pas intégrées au projet.

## Fichier et déroulement

Dans `exemple.php` :

1. `namespace App\Models { ... }` place la première classe `Game` dans le namespace `App\Models`.
2. `namespace App\Reports { ... }` déclare une autre classe `Game`, dans `App\Reports`.
3. Le bloc global `namespace { ... }` instancie les classes avec leur nom complet, préfixé par `\`.
4. Chaque objet renvoie son propre libellé ; les deux noms courts identiques ne créent aucun conflit.

## Lancer depuis `lab-php/pratique/namespaces`

```bash
php exemple.php
```

Résultat attendu :

```text
Jeu du catalogue
Rapport des jeux
```

Dans ce script autonome, les namespaces sont écrits directement dans le même fichier. Dans un projet Composer, on sépare généralement les classes en fichiers et on configure l’autoload PSR-4 ; aucun `composer.json` n’étant fourni pour `lab-php`, cet exercice n’en suppose pas.

**À essayer :** ajouter une troisième classe `Game` sous `App\Admin` et l’instancier avec son nom complet.
