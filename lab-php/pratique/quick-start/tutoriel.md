# Quick Start et Hello World

## Objectif

Vérifier que PHP en ligne de commande fonctionne avant les exercices. L’environnement de préparation dispose de PHP 8.5.10 ; le code est compatible avec PHP 8.x.

## Fichier

`hello.php` affiche une ligne de texte.

1. `declare(strict_types=1)` active le contrôle strict des types pour le fichier.
2. `echo` écrit le texte dans la sortie standard.
3. `PHP_EOL` ajoute le caractère de fin de ligne adapté au système.

## Lancer depuis `lab-php/pratique/quick-start`

```bash
php -v
php hello.php
```

Résultat attendu :

```text
Bonjour, PHP !
```

Cet exemple est autonome et ne fait pas encore partie de l’application du projet technique.
