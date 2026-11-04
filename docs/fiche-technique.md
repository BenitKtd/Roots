# Fiche Technique - Roots
- Projet : Éco-Challenge
- CMS : WordPress Thème Enfant

## 1. Cadre Technique & Objectif du Projet
Création d'une plateforme web éco-responsable et ludique ("éco-challenge") destinée à la Génération Z (18-25 ans). L'expérience repose sur une aventure mensuelle avec 6 quiz par mois permettant de faire évoluer un arbre visuel à travers différents biomes.

---

## 2. Éléments du Projet (QUOI → COMMENT → POURQUOI)

### A. Pages à produire
* **QUOI ?**
  * Page d'Accueil
  * Pages "Quiz" et ses différentes section (6 quiz)
  * Page "Compte" ("Connexion" et "Inscription")
  * Page "Profil" (visualisation de la progression et de la pousse de l'arbre)
  * Pages "Informations" ("À propos de nous" et "Contact")
* **COMMENT ?**
  * Back-end développé en PHP avec base de données MySQL sous WordPress (Local WP en développement, hébergement Hostinger).
  * Gestion des accès restreints (Page Profil accessible uniquement en mode connecté).
* **POURQUOI ?**
  * Proposer une arborescence courte (5) pour s'adapter à des sessions très courtes (5 min pendant les temps morts).
  * Faciliter l'accès et le suivi sans bloquer l'expérience globale.

---

### B. Sections & Composants
* **QUOI ?**
  * Navigation principale (menu court de 5 éléments).
  * Interface des 6 quiz.
  * Visualiseur dynamique d'arbre et d'évolution des biomes.
  * Formulaires interactifs (Connexion, Inscription, Contact).
  * Boutons de partage pour les réseaux sociaux.
* **COMMENT ?**
  * Développement via un thème enfant WordPress personnalisé et des blocs Gutenberg.
  * Approche mobile-first optimisée pour navigateurs mobiles (Safari et Chrome), jouable à une main au pouce.
* **POURQUOI ?**
  * Éviter le téléchargement d'une application lourde et permettre un accès instantané par simple lien web.

---

### C. Contenus & Médias
* **QUOI ?**
  * Visualisation des 3 biomes et graphismes d'évolution de l'arbre.
  * Typographies officielles : **Poppins Semi Bold** (Titres) et **Poppins Regular** (Textes courants).
  * Palette de couleurs de la charte : Vert foncé (`#254335`), Vert clair (`#449C47`), Lime (`#C8D74F`), Jaune (`#F4E70B`), Rouge/Bordeaux (`#8E1C38`) et Rouge vifs (`#C8D74F` / Orange-Rouge).
  * Textes courts, concis et micro-animations d'interaction.
* **COMMENT ?**
  * Configuration centralisée des polices (Poppins) et de la palette dans le fichier `theme.json` et des feuilles de style CSS.
* **POURQUOI ?**
  * Assurer la cohérence visuelle sur tous les supports (mobile, tablette, pc) tout en évitant les pavés de texte pour la Gen Z.

---

### D. Gestion d'états (JavaScript)
* **QUOI ?**
  * Quiz dynamique (affichage des questions, sélection et validation).
  * Animation visuelle en direct de la pousse de l'arbre et mise à jour dynamique du score sur le profil.
  * Gestion des retours visuels dans les formulaires (messages de confirmation / erreur).
* **COMMENT ?**
  * Code en JavaScript côté front-end.
* **POURQUOI ?**
  * Un retour visuel immédiat avec la poussée de l'arbre instantané en fin de quiz.

---

### E. Données dynamiques & API (`Contrat.json`)
* **QUOI ?**
  * Stockage de la progression des quiz, des scores et des étapes de l'arbre.
  * Envoi et enregistrement des formulaires et données utilisateur.
* **COMMENT ?**
  * Requêtes API REST reliant le JS du front-end aux tables MySQL via PHP.
* **POURQUOI ?**
  * Assurer la persistance des streaks/badges et permettre la génération d'un récapitulatif visuel prêt au partage.

---

### F. Fonctionnalité Intelligente (IA & Extensions)
* **QUOI ?**
  * Génération automatique de visuels/stories au format vertical personnalisés.
* **COMMENT ?**
  * Intégration d'API d'IA ou scripts/extensions spécialisés documentés.
* **POURQUOI ?**
  * Permettre le partage en 1 clic vers TikTok, Instagram et X, transformant chaque utilisateur en ambassadeur viral sans publicité intrusive.

---

## 3. Contraintes Techniques
* **Hébergement & Domaine :** Hostinger (domaine `.com` ciblant la francophonie : Belgique, France, Suisse).
* **Mobile-First & Performance :** Conçu pour des sessions de 3 à 5 min, jouables à une main sur Safari/Chrome mobile.
* **Sécurité & Maintenance :** Protocole HTTPS, Captcha anti-robot sur les formulaires, sauvegardes/mises à jour mensuelles et suivi sous GitHub.
* **Modèle UX :** Expérience 100% gratuite, sans publicité ni monétisation dégradante.