---
marp: true
theme: default
paginate: true
lang: fr-FR
title: Gestion du temps — organiser un projet e-sport
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
  table { font-size: 0.78em; }
  th { background: #123b68; color: white; }
  td, th { padding: 8px 12px; }
  blockquote { border-left: 5px solid #21a6a1; color: #34445d; }
  .logos img { height: 78px; }
---

<!-- _paginate: false -->
<!-- Note: Présenter le thème du Lab et saluer le formateur ainsi que les participants. -->

<div class="logos" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:32px">
<img src="images/ofppt.png"><img src="images/solicode.png">
</div>

# Gérer son temps pour réussir un projet

### Organiser, prioriser et suivre le travail

**Présenté par** : Ahmed El Morabiti  
**Encadré par** : ES-SARRAJ FOUAD

*Lab de gestion du temps · Projet portail e-sport*

---

<!-- Note: Annoncer le parcours, du besoin initial au bilan du planning. -->
## Parcours de la présentation

1. Comprendre la gestion du temps et ses notions clés
2. Découper le projet en tâches et fixer les priorités
3. Estimer les durées et construire un planning
4. Suivre le travail, comparer les temps et réagir aux imprévus
5. Retenir les pratiques utiles pour respecter les délais

---

<!-- Note: Relier la gestion du temps à la livraison organisée du portail de gestion e-sport. -->
## Pourquoi gérer son temps ?

Le portail e-sport doit permettre d’**afficher** les jeux et d’en **ajouter** avec leur plateforme.

- Le travail comprend une interface, des échanges avec une API et un stockage JSON.
- Sans organisation, une tâche oubliée ou mal estimée peut retarder l’ensemble.
- Un planning rend visibles les étapes, les responsables, les durées et les échéances.

> **But :** livrer les fonctions demandées dans le délai prévu, avec un suivi clair.

---

<!-- Note: Définir les notions en les reliant aux décisions concrètes du projet. -->
## Les notions essentielles

| Notion | Sens pratique | Exemple pour le portail |
|---|---|---|
| **Priorité** | Importance relative d’une tâche | Faire fonctionner l’ajout avant les finitions visuelles |
| **Estimation** | Durée prévue avant de commencer | Prévoir 2 h pour le formulaire et sa validation |
| **Planning** | Tâches ordonnées dans le temps | Répartir le travail sur cinq séances |
| **Délai** | Date ou heure limite | Remettre la version finale à la date convenue |
| **Suivi** | Comparaison du prévu et du réalisé | Noter l’état et le temps utilisé après chaque tâche |
| **Imprévu** | Événement qui modifie le plan | Corriger un format de données inattendu |

---

<!-- Note: Expliquer que le découpage transforme un objectif général en étapes vérifiables. -->
## Découper le travail

| Étape | Livrable vérifiable | Priorité |
|---|---|---|
| 1. Lire le besoin et lister les fonctions | Liste des exigences | Haute |
| 2. Préparer l’interface et le formulaire | Écran avec champs nom et plateforme | Haute |
| 3. Créer le modèle et le stockage JSON | Lecture et écriture des jeux | Haute |
| 4. Relier l’interface à l’API | Ajout et affichage sans rechargement | Haute |
| 5. Vérifier les cas usuels et corriger | Parcours d’ajout vérifié | Haute |
| 6. Finaliser et remettre les livrables | Version documentée et déposée | Moyenne |

---

<!-- Note: Présenter ce calendrier comme un exemple de plan de travail ajustable à la date réelle de remise. -->
## Exemple de planning sur cinq séances

| Séance | Travail prévu | Durée estimée | Jalon |
|---|---|---:|---|
| 1 | Lire le besoin, découper et préparer l’interface | 2 h | Formulaire prêt |
| 2 | Créer le modèle et la gestion du fichier JSON | 3 h | Données enregistrées |
| 3 | Développer l’API et relier le formulaire | 3 h | Ajout fonctionnel |
| 4 | Afficher les jeux et traiter les erreurs | 2 h | Parcours complet vérifié |
| 5 | Corriger, documenter et déposer les livrables | 2 h | Remise finale |

**Total estimé : 12 heures** · Les dates exactes sont fixées à partir de l’échéance réelle.

---

<!-- Note: Montrer comment une estimation et une priorité aident à ordonner les tâches sans sacrifier la qualité. -->
## Prioriser et estimer

- **Priorité haute :** les fonctions indispensables à la démonstration — enregistrer et afficher un jeu.
- **Priorité moyenne :** améliorer la présentation après validation du parcours principal.
- **Estimation :** découper une tâche trop large en petites étapes, puis prévoir une marge pour la vérification.
- **Ordre conseillé :** besoin → données/API → interface connectée → vérification → finitions.

> Une tâche est terminée quand son résultat peut être vérifié, pas seulement quand le temps prévu est écoulé.

---

<!-- Note: Décrire un suivi régulier qui rend visibles l’avancement et les retards dès qu’ils apparaissent. -->
## Suivre l’avancement

Après chaque séance, mettre à jour un tableau simple :

| Tâche | État | Temps prévu | Temps utilisé | Prochaine action |
|---|---|---:|---:|---|
| Formulaire d’ajout | Terminé | 2 h | 2 h | Relier à l’API |
| Écriture JSON | En cours | 3 h | 2 h | Vérifier la réponse de l’API |
| Affichage et vérification | À faire | 4 h | — | Tester ajout et affichage |

**États possibles :** à faire · en cours · terminé · bloqué

---

<!-- Note: Comparer les temps de cet exemple pédagogique et inviter à ajuster le plan selon les mesures réelles. -->
## Temps prévus et temps utilisés

*Exemple de suivi pédagogique : les temps utilisés ci-dessous illustrent un écart possible et ne sont pas des mesures réelles du projet.*

| Étape | Prévu | Utilisé | Écart | Décision |
|---|---:|---:|---:|---|
| Préparer l’interface | 2 h | 2 h | 0 h | Garder le plan |
| Écrire et lire le JSON | 3 h | 4 h | +1 h | Ajouter une vérification des données |
| Relier l’API au formulaire | 3 h | 3 h | 0 h | Garder le plan |
| Vérifier et corriger | 2 h | 2 h | 0 h | Conserver la marge restante |

**Écart total : +1 h** · L’écart est signalé tôt et compensé en réordonnant les finitions non essentielles.

---

<!-- Note: Illustrer une réponse constructive à un retard en identifiant sa cause et en protégeant les fonctions essentielles. -->
## Réagir à un imprévu

**Situation d’exemple :** l’API reçoit des données dans un format différent de celui attendu par le stockage JSON.

1. **Signaler** le blocage et décrire le symptôme observé.
2. **Évaluer** l’impact sur l’ajout et l’affichage des jeux.
3. **Corriger** le format, puis vérifier la lecture et l’écriture.
4. **Ajuster** le planning en réservant la priorité aux fonctions requises.

**À éviter :** cacher le retard, multiplier les tâches commencées ou supprimer la vérification finale.

---

<!-- Note: Résumer les habitudes qui aident à respecter les délais tout en gardant un travail vérifiable. -->
## Les habitudes qui font gagner du temps

- Lire la tâche et clarifier le résultat attendu avant de commencer.
- Découper le travail, estimer chaque étape et garder une marge.
- Commencer par les tâches prioritaires et limiter les distractions.
- Mettre à jour l’état et les temps utilisés à chaque séance.
- Signaler rapidement les problèmes et convenir d’une solution.
- Vérifier les livrables avant de les déposer à l’échéance.

---

<!-- Note: Conclure en rappelant que planifier, suivre et ajuster permet de livrer le projet dans les délais. -->
## Conclusion

La gestion du temps aide à transformer un objectif en **étapes réalisables**, à suivre les écarts et à agir avant qu’un retard ne compromette la remise.

### Planifier · Prioriser · Suivre · Ajuster · Livrer

**Merci pour votre attention.**
