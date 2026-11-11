# Partager une méthode avec un trait

## Objectif

Réutiliser une petite méthode de journalisation dans deux classes sans copier sa définition. Le registre et le rapport sont des exemples pédagogiques fictifs autour des jeux ; ils ne font pas partie de l’application réelle.

## Fichier et déroulement

Dans `exemple.php` :

1. `trait WritesActivity` définit `writeActivity()`, qui affiche un message commun.
2. `use WritesActivity;` ajoute cette méthode à `GameRegistry`, puis à `GameReporter`.
3. Chaque classe appelle `$this->writeActivity(...)` avec un texte adapté à son action.
4. Les deux objets sont créés et exécutés à la fin du fichier, ce qui rend le partage visible.

## Lancer depuis `lab-php/traits`

```bash
php exemple.php
```

Résultat attendu :

```text
[Activité] Jeu ajouté : Rocket League
[Activité] Rapport généré pour : Rocket League
```

Un trait convient à un comportement concret partagé par plusieurs classes. Il ne faut pas créer un trait pour une méthode utilisée une seule fois ou pour remplacer une relation de conception plus adaptée.

**À essayer :** ajouter une méthode `writeActivity()` différente dans l’une des classes pour observer le conflit, puis choisir explicitement une adaptation ou conserver le comportement commun.
