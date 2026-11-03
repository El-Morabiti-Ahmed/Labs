---
marp: true
theme: default
paginate: true
header: "Blog Produits â€” PrÃ©sentation & Marp"
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
<!-- Note: Presenter le sujet et identifier les personnes ainsi que le centre. -->
<!-- Note: Annoncer que la presentation explique le schema des donnees et la methode Marp. -->
## PrÃ©sentation & MÃ©thode Marp

- **EncadrÃ© par** : ES-SARRAJ FOUAD
- **PrÃ©sentÃ© par** : Oumaima Mahfoud
- **Centre** : SoliCode Tanger (OFPPT)

<!-- Note: PrÃ©sentation du projet Blog Produits avec support Marp. -->

---

## Plan de la prÃ©sentation
<!-- Note: Donner les grandes parties pour aider le public a suivre la presentation. -->
<!-- Note: Preciser que le parcours va du contexte du blog jusqu a sa conclusion. -->

- **1. Introduction**
- **2. DonnÃ©es & SchÃ©ma**
- **3. Code SQL**
- **4. MÃ©thode Marp**
- **5. Conculsion**

---

## 1. Introduction
<!-- Note: Expliquer en une phrase le besoin auquel repond le blog e-commerce. -->
<!-- Note: Introduire les produits, les categories, les clients et les commandes. -->

- Ce projet est un blog de vente en ligne.
- Il affiche les produits par catÃ©gorie.
- Il enregistre les clients et les commandes.
- Il contient 3 tables : `customers`, `products`, `collections`.
- Cette prÃ©sentation est crÃ©Ã©e avec **Marp**.

---

## 2. DonnÃ©es : Les 3 Tables
<!-- Note: Presenter le role de chaque table et les principaux champs. -->
<!-- Note: Faire remarquer que collection_id relie chaque produit a sa categorie. -->

| Table | RÃ´le | Champs clÃ©s |
| :--- | :--- | :--- |
| **`customers`** | Acheteurs | `id`, `nom`, `email` |
| **`collections`** | CatÃ©gories | `id`, `titre` |
| **`products`** | Articles | `id`, `titre`, `prix`, `collection_id` |

- **Lien clÃ©** : `collection_id` relie le produit Ã  sa catÃ©gorie.

---

## Conception : SchÃ©ma Relationnel
<!-- Note: Lire le schema comme une representation des liens entre les donnees. -->
<!-- Note: Expliquer les relations un-a-plusieurs et rappeler la contrainte sur collection_id. -->

```
 [ collections ] 1 â”€â”€â”€â”€â”€â”€â”€ * [ products ] * â”€â”€â”€â”€â”€â”€â”€ 1 [ customers ]
 (CatÃ©gories)                 (Articles)               (Clients)
```

- 1 catÃ©gorie = plusieurs produits
- 1 client = plusieurs commandes
- <span class="badge">RÃ¨gle</span> : `collection_id` obligatoire

---

## 3. Code SQL
<!-- Note: Presenter les trois definitions de tables et leurs champs essentiels. -->
<!-- Note: Montrer comment la cle etrangere relie products a collections. -->
<!-- Note: Signaler que customers contient une adresse email unique. -->

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

## 4. MÃ©thode Marp : Directives & Styles
<!-- Note: Expliquer que les directives du debut configurent le rendu des diapositives. -->
<!-- Note: Montrer que les styles CSS et les directives Marp controlent l apparence. -->

- `---` : SÃ©parateur de slide
- `marp: true` : Activation de Marp
- `theme: default` : ThÃ¨me visuel
- `paginate: true` : NumÃ©rotation
- `style.css` : Fichier CSS sÃ©parÃ©
- `<!-- _class: invert -->` : Mode sombre

---

## MÃ©thode Marp : Images
<!-- Note: Presenter les syntaxes Marp pour fixer la taille ou placer une image. -->
<!-- Note: Preciser que les exemples illustrent aussi l usage d une image en arriere-plan. -->

- **Taille fixe** : `![w:250px](images/logo-ofppt.png)`
- **Image latÃ©rale** : `![bg right:35%](images/logo-solicode.png)`
- **ArriÃ¨re-plan** : `![bg](images/fond.jpg)`

---

## MÃ©thode Marp : Notes & Listes
<!-- Note: Expliquer que les notes sont destinees a l orateur et restent cachees au public. -->
<!-- Note: Presenter les listes progressives comme une facon de reveler les points un a un. -->

- **Notes cachÃ©es** :
  `<!-- Note: Parler ici des 3 tables -->`

- **Listes progressives (apparition par clic)** :
  * 1. Client (`customers`)
  * 2. CatÃ©gorie (`collections`)
  * 3. Article (`products`)

---

## MÃ©thode Marp : Exportation
<!-- Note: Montrer que Marp CLI peut produire plusieurs formats a partir du meme fichier. -->
<!-- Note: Comparer rapidement les commandes HTML, PDF et PowerPoint. -->

- **HTML (Web)** :
  `npx @marp-team/marp-cli presentation.md -o index.html`

- **PDF (Document)** :
  `npx @marp-team/marp-cli presentation.md --pdf`

- **PowerPoint (PPTX)** :
  `npx @marp-team/marp-cli presentation.md --pptx`

---

## Conclusion
<!-- Note: Resumer le sujet, la structure des diapositives et l outil utilise. -->
<!-- Note: Terminer en indiquant le fichier livre et remercier le public. -->

- Blog e-commerce : 3 tables
- Diapositives en Markdown
- PrÃ©sentation dynamique avec **Marp**
- **Livrable** : `labs/lab-marp/presentation.md`
