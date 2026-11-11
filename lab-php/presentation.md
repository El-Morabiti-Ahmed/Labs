---
marp: true
theme: default
paginate: true
lang: fr-FR
title: lab-php — notions PHP
style: |
  section {
    font-family: "Aptos", "Arial", sans-serif;
    color: #17233b;
    background: linear-gradient(135deg, #f7f9fc 0%, #edf3fb 100%);
    padding: 52px 64px;
  }
  h1, h2 { color: #123b68; }
  h1 { font-size: 1.75em; }
  h2 { border-bottom: 3px solid #21a6a1; padding-bottom: 8px; }
  strong { color: #087e79; }
  code { color: #087e79; }
  table { font-size: 0.8em; }
  th { background: #123b68; color: white; }
  td, th { padding: 8px 12px; }
  blockquote { border-left: 5px solid #21a6a1; color: #34445d; }
---

<!-- _paginate: false -->

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:28px">
<img src="images/ofppt.png" height="72" alt="Logo OFPPT"><img src="images/solicode.png" height="72" alt="Logo Solic ode">
</div>

# lab-php

### Erreurs, namespaces et traits

**Présenté par** : Ahmed El Morabiti  
**Encadré par** : ES-Saraj Fouad

---

## Parcours de la présentation

1. Introduction et stack technique
2. Définitions des notions PHP
3. Problème rencontré dans le projet
4. Solution et démonstrations pratiques

---

## 1. Introduction & Stack Technique

- Ce lab permet de découvrir trois notions PHP non encore étudiées en cours.
- **PHP 8.5.10 CLI** est disponible dans l’environnement vérifié.
- Les exemples utilisent PHP en ligne de commande, sans dépendance externe.
- Le cas concret sera relié au projet après précision du problème et de la solution par l’étudiant.

### Quick Start

```bash
php -v
php hello.php
```

---

## Hello World exécutable

Créer `hello.php` :

```php
<?php
echo "Bonjour, PHP !\n";
```

Lancer depuis le dossier du fichier :

```bash
php hello.php
```

**Résultat attendu :** `Bonjour, PHP !`

---

## 2. Définitions — erreurs et exceptions

- Une **erreur** signale un problème pendant l’exécution du programme.
- Une **exception** représente une situation anormale que le code peut intercepter et traiter.
- `try` contient le code à surveiller ; `catch` décrit la réponse si une exception survient.

```php
<?php
try {
    throw new RuntimeException("Donnée indisponible");
} catch (RuntimeException $exception) {
    echo "Impossible de continuer : {$exception->getMessage()}\n";
}
```

---

## 2. Définitions — namespace et trait

| Notion | Rôle | Exemple concret |
|---|---|---|
| **Namespace** | Organiser les classes et éviter les noms identiques | `App\Models\Game` et `App\Services\Game` |
| **Trait** | Réutiliser des méthodes dans plusieurs classes | Un trait `WritesLog` partagé par deux services |

Un trait complète une classe : il ne remplace ni une classe ni un objet.

---

## 3. Problème

### À compléter avec l’expérience de l’étudiant

- **Quel problème concret rencontrez-vous dans le projet technique ?**
- **Dans quelle partie du projet apparaît-il ?**
- **Quel est son impact observable ?**

> Ne pas présenter une hypothèse comme un problème réellement rencontré.

---

## 4. Solution proposée et démonstrations

### À compléter avec la proposition de l’étudiant

- **Quelle solution proposez-vous ?**
- **Comment les erreurs/exceptions, namespaces ou traits y contribuent-ils ?**
- **Quel résultat permettra de vérifier que la solution fonctionne ?**

---

## Démonstrations PHP à rattacher au projet

Préparer un exemple progressif à partir du problème réel :

1. Organiser les classes utiles dans un namespace clair.
2. Ajouter un trait uniquement si plusieurs classes partagent réellement une méthode.
3. Déclencher une exception sur un cas d’échec pertinent et la traiter proprement.
4. Lancer l’exemple avec PHP et montrer le résultat attendu, y compris le cas d’échec.

**Fil conducteur et code final :** à compléter une fois le problème et la solution fournis.
