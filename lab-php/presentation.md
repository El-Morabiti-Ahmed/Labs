---
marp: true
theme: default
paginate: true
lang: fr-FR
style: |
  section {
    background: #0b1020;
    color: #e5e7eb;
    font-family: Arial, sans-serif;
    padding: 48px 64px;
    font-size: 22px;
  }
  h1 { color: #fff; border-bottom: 3px solid #38bdf8; padding-bottom: 10px; }
  h2 { color: #7dd3fc; }
  strong { color: #7dd3fc; }
  code { background: #17243d; color: #bae6fd; }
  pre { background: #111a2e; border: 1px solid #263854; border-radius: 10px; }
  table { width: 100%; border-collapse: collapse; }
  th { background: #075985; color: white; }
  td, th { border: 1px solid #334155; padding: 9px; }
  blockquote { border-left: 5px solid #38bdf8; color: #cbd5e1; background: #111a2e; padding: 10px 18px; }
  .center { text-align: center; }
  .muted { color: #94a3b8; }
  .tag { color: #7dd3fc; letter-spacing: 2px; font-size: 15px; }
---

<!-- _class: center -->

<div style="display:flex; justify-content:center; align-items:center; gap:36px; margin: 12px 0 30px;">
  <img src="images/ofppt.png"><img src="images/solicode.png">
</div>

<div class="tag">LAB PHP · PROGRAMMATION ORIENTÉE OBJET</div>

# Rendre le portail e-sport plus fiable

## Exceptions · namespaces · traits

**Présenté par** : Ahmed El Morabiti  
**Encadré par** : ES-SARRAJ FOUAD

<!-- Note du présentateur : Cette présentation montre trois outils PHP qui rendent le portail e-sport plus clair et plus robuste. -->

---

# Notre parcours

<div class="tag">DU BESOIN AUX EXEMPLES</div>

1. Situer les défis du portail e-sport.
2. Détecter et traiter les erreurs avec les exceptions.
3. Organiser les classes avec les namespaces.
4. Partager des méthodes avec les traits.
5. Relier les trois notions dans un flux d'ajout.

<!-- Note du présentateur : Nous partirons du fonctionnement du portail avant d'appliquer chaque notion à son traitement PHP. -->

---

# Le contexte : ajouter un jeu

Le navigateur envoie un nom et une plateforme à l'API PHP, qui valide les données et les ajoute au fichier JSON.

<div style="display:flex; align-items:center; justify-content:space-between; gap:12px; margin-top:30px; text-align:center;">
  <div style="background:#111a2e; padding:18px; border-radius:10px; flex:1">Formulaire</div>
  <span style="color:#38bdf8">→</span>
  <div style="background:#111a2e; padding:18px; border-radius:10px; flex:1">API PHP</div>
  <span style="color:#38bdf8">→</span>
  <div style="background:#111a2e; padding:18px; border-radius:10px; flex:1">Classes métier</div>
  <span style="color:#38bdf8">→</span>
  <div style="background:#111a2e; padding:18px; border-radius:10px; flex:1">games.json</div>
</div>

**Défis :** données invalides, classes difficiles à distinguer et logique répétée.

<!-- Note du présentateur : Une requête d'ajout traverse l'API, les classes métier et le stockage JSON, ce qui crée plusieurs points à sécuriser. -->

---

# 1 — Gérer les erreurs

<div class="tag">EXCEPTIONS</div>

Une exception signale une situation anormale qu'une méthode ne peut pas traiter normalement.

| Mot-clé | Rôle |
|---|---|
| `throw` | Signaler un problème en lançant une exception |
| `try` | Encadrer le code susceptible d'échouer |
| `catch` | Intercepter et traiter une exception |
| `finally` | Exécuter un nettoyage, qu'il y ait eu une erreur ou non |

**À distinguer :** une exception est un mécanisme de contrôle ; une erreur PHP peut aussi être un problème de programmation ou d'exécution.

<!-- Note du présentateur : Les exceptions permettent de transmettre un échec jusqu'au niveau capable de répondre proprement à la requête. -->

---

# Exemple — valider les données du jeu

```php
function validateGame(string $name, string $platform): void
{
    if (trim($name) === '' || trim($platform) === '') {
        throw new InvalidArgumentException(
            'Le nom et la plateforme sont obligatoires.'
        );
    }
}

try {
    validateGame($name, $platform);
    $manager->add(new Game($name, $platform));
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}
```

**Résultat :** les champs manquants produisent une réponse HTTP 400 au lieu d'un enregistrement invalide.

<!-- Note du présentateur : La validation lance une exception en cas de champs vides et le contrôleur transforme ce cas en réponse HTTP compréhensible. -->

---

# 2 — Organiser les classes

<div class="tag">NAMESPACES</div>

Un namespace donne un espace de noms aux classes, interfaces, fonctions et constantes afin d'éviter les collisions et de rendre leur origine lisible.

```php
namespace App\Models;

class Game
{
    public function __construct(
        public string $name,
        public string $platform
    ) {}
}
```

On peut alors distinguer `App\Models\Game` d'une autre classe `Game` définie dans un autre espace.

<!-- Note du présentateur : Le namespace App Models indique clairement que cette classe Game appartient aux modèles du portail. -->

---

# Utiliser les namespaces dans le portail

```php
// backend/classes/GameManager.php
namespace App\Repositories;

use App\Models\Game;

class GameManager
{
    public function add(Game $game): void
    {
        // Ajouter le jeu au stockage JSON.
    }
}
```

```php
// backend/api.php
use App\Models\Game;
use App\Repositories\GameManager;
```

**Organisation possible :** `App\Models`, `App\Repositories` et `App\Controllers` reflètent les responsabilités du code.

<!-- Note du présentateur : Les instructions namespace et use rendent les dépendances de GameManager et de l'API explicites. -->

---

# 3 — Partager du code

<div class="tag">TRAITS</div>

Un trait regroupe des méthodes réutilisables qu'une classe peut intégrer avec `use` ; il ne remplace ni une classe parente ni une interface.

```php
trait JsonResponse
{
    private function sendJson(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
```

Le trait convient à un petit comportement commun, par exemple formater les réponses JSON de plusieurs contrôleurs.

<!-- Note du présentateur : Un trait permet à plusieurs contrôleurs de réutiliser la même méthode de réponse JSON sans copier son code. -->

---

# Exemple — réutiliser la réponse JSON

```php
namespace App\Controllers;

trait JsonResponse
{
    private function sendJson(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}

class GameController
{
    use JsonResponse;

    public function created(Game $game): void
    {
        $this->sendJson(['game' => $game], 201);
    }
}
```

<!-- Note du présentateur : GameController compose le trait pour répondre avec le même format JSON que les autres contrôleurs. -->

---

# Relier les trois notions

| Notion | Application dans le portail | Bénéfice |
|---|---|---|
| Exceptions | Rejeter les champs invalides ou signaler un échec de lecture JSON | Réponse contrôlée |
| Namespaces | Séparer `Models`, `Repositories` et `Controllers` | Classes faciles à repérer |
| Traits | Mutualiser la réponse JSON | Moins de duplication |

**Parcours d'une requête :** l'API crée `App\Controllers\GameController`, le contrôleur valide les données, le dépôt enregistre le jeu et une réponse JSON est renvoyée.

<!-- Note du présentateur : Les trois outils se complètent en organisant les responsabilités, en gérant les échecs et en partageant un comportement transversal. -->

---

# À retenir

<div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:16px; margin-top:28px;">
  <div style="background:#111a2e; padding:20px; border-top:4px solid #38bdf8; border-radius:8px"><strong>Exceptions</strong><br><span class="muted">Réagir aux situations anormales</span></div>
  <div style="background:#111a2e; padding:20px; border-top:4px solid #38bdf8; border-radius:8px"><strong>Namespaces</strong><br><span class="muted">Donner une organisation aux noms</span></div>
  <div style="background:#111a2e; padding:20px; border-top:4px solid #38bdf8; border-radius:8px"><strong>Traits</strong><br><span class="muted">Réutiliser un comportement ciblé</span></div>
</div>

## Prochaine étape

Appliquer ces conventions aux classes réelles de l'API, puis vérifier les réponses en cas de succès et d'échec.

<!-- Note du présentateur : Dans le portail, ces notions améliorent ensemble la fiabilité, la lisibilité et la réutilisation du code PHP. -->
