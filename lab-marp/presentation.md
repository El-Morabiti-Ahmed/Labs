---
marp: true
theme: default
paginate: true
header: "Blog Produits — Présentation & Marp"
footer: "OFPPT | SoliCode"
---

<style>
@import "style.css";
</style>

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="images/logo-ofppt.png" height="110" alt="Logo OFPPT">
  <img src="images/logo-solicode.png" height="85" alt="Logo Solicode">
</div>

# Blog de Gestion des Produits
## Présentation & Méthode Marp

- **Encadré par** : ES-SARRAJ FOUAD
- **Présenté par** : Oumaima Mahfoud
- **Centre** : SoliCode Tanger (OFPPT)

<!-- Note: Présentation du projet Blog Produits avec support Marp. -->

---

## Plan de la présentation

- **1. Introduction**
- **2. Données & Schéma**
- **3. Code SQL**
- **4. Méthode Marp**
- **5. Conculsion**

---

## 1. Introduction

- Ce projet est un blog de vente en ligne.
- Il affiche les produits par catégorie.
- Il enregistre les clients et les commandes.
- Il contient 3 tables : `customers`, `products`, `collections`.
- Cette présentation est créée avec **Marp**.

---

## 2. Données : Les 3 Tables

| Table | Rôle | Champs clés |
| :--- | :--- | :--- |
| **`customers`** | Acheteurs | `id`, `nom`, `email` |
| **`collections`** | Catégories | `id`, `titre` |
| **`products`** | Articles | `id`, `titre`, `prix`, `collection_id` |

- **Lien clé** : `collection_id` relie le produit à sa catégorie.

---

## Conception : Schéma Relationnel

```
 [ collections ] 1 ─────── * [ products ] * ─────── 1 [ customers ]
 (Catégories)                 (Articles)               (Clients)
```

- 1 catégorie = plusieurs produits
- 1 client = plusieurs commandes
- <span class="badge">Règle</span> : `collection_id` obligatoire

---

## 3. Code SQL

```sql
CREATE TABLE collections (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL
);

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(150) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    collection_id INT,
    FOREIGN KEY (collection_id) REFERENCES collections(id)
);

CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL
);
```

---

## 4. Méthode Marp : Directives & Styles

- `---` : Séparateur de slide
- `marp: true` : Activation de Marp
- `theme: default` : Thème visuel
- `paginate: true` : Numérotation
- `style.css` : Fichier CSS séparé
- `<!-- _class: invert -->` : Mode sombre

---

## Méthode Marp : Images

- **Taille fixe** : `![w:250px](images/logo-ofppt.png)`
- **Image latérale** : `![bg right:35%](images/logo-solicode.png)`
- **Arrière-plan** : `![bg](images/fond.jpg)`

---

## Méthode Marp : Notes & Listes

- **Notes cachées** :
  `<!-- Note: Parler ici des 3 tables -->`

- **Listes progressives (apparition par clic)** :
  * 1. Client (`customers`)
  * 2. Catégorie (`collections`)
  * 3. Article (`products`)

---

## Méthode Marp : Exportation

- **HTML (Web)** :
  `npx @marp-team/marp-cli presentation.md -o index.html`

- **PDF (Document)** :
  `npx @marp-team/marp-cli presentation.md --pdf`

- **PowerPoint (PPTX)** :
  `npx @marp-team/marp-cli presentation.md --pptx`

---

## Conclusion

- Blog e-commerce : 3 tables
- Diapositives en Markdown
- Présentation dynamique avec **Marp**
- **Livrable** : `labs/lab-marp/presentation.md`