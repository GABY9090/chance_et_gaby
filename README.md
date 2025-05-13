# E-Commerce Project

## 📋 Table des matières
1. [Authentification & Sessions](#authentification--sessions)
2. [Navigation & Accueil par Rôle](#navigation--accueil-par-rôle)
3. [Produits](#produits)
4. [Panier & Commande](#panier--commande)
5. [Gestion des Commandes](#gestion-des-commandes)
6. [Utilisateurs (Admin uniquement)](#utilisateurs-admin-uniquement)
7. [Interactions JavaScript](#interactions-javascript)
8. [Sécurité & Sessions](#sécurité--sessions)
9. [Bonus (Facultatif)](#bonus-facultatif)

---

## 🔐 Authentification & Sessions

- [x] **Créer la page `register.php`** : 
    - Champs : `nom`, `email`, `mot de passe`, `rôle` (select)
    - Validation JS (CM1)
    - Enregistrement dans JSON + MySQL (CM6, CM7)


- [x] **Créer la page `login.php`** :
  - Vérification des champs `email` et `mot de passe` (CM7)
  - Gestion de session avec `$_SESSION['utilisateur']` et `$_SESSION['role']`

-  [ ] **Ajouter la page `logout.php`** :
  - Utilisation de `session_destroy()` et redirection (CM7)

---

## 🎨 Navigation & Accueil par Rôle
-  [X] **Créer la fonction `home()` dans `UtilisateurController.php`** (CM8)
-  [X] **Créer 3 vues d’accueil** :
  - `views/accueil/admin.php` : Gérer utilisateurs, produits, etc.
  - `views/accueil/vendeur.php` : Mes produits, commandes
  - `views/accueil/client.php` : Produits, panier, mon compte
-  [X] **Ajouter une redirection automatique** selon `$_SESSION['role']`

---

## 🛍️ Produits
-  [X] **Créer le modèle `Produit.php`** :
  - Attributs : `id`, `nom`, `prix`, `image`, `description`, `catégorie`
  - Méthodes : `ajouter()`, `supprimer()`, `modifier()`, `getAll()`

-  [X] **Créer les vues** :
  - `ajouterProduit.php` : Formulaire (vendeur/admin – POST + CM5)
  - `listeProduits.php` : Affichage HTML des produits (client)

-  [X] **Créer le contrôleur `ProduitController.php`** :
  - Méthodes : `ajouterProduitAction()`, `listeProduitsAction()`, `filtrerProduitsAction()` 

-  [ ] **Fonctionnalités supplémentaires** :
  - Filtrer les produits côté client avec `JS filter()` (CM3)
  - Charger les produits depuis un fichier JSON avec `fetch()` ou `jQuery.getJSON()` (CM2 / CM4)

---

## 🛒 Panier & Commande
-  [ ] **Créer la page `panier.php`** :
  - Ajouter un produit au panier (`$_SESSION['panier']`)
  - Calcul du total avec `reduce()` (CM3)
  - Supprimer un article ou vider le panier

-  [ ] **Créer la page `commande.php`** :
  - Formulaire : `nom`, `adresse`, paiement simulé
  - Enregistrement dans MySQL ou JSON (CM6, CM7)

---

## 📦 Gestion des Commandes
-  [ ] **Créer le modèle `Commande.php`** :
  - Méthodes : `ajouter()`, `getParClient()`, `getAll()`

-  [ ] **Créer les vues** :
  - `commandesClient.php` : Vue pour les clients
  - `commandesAdmin.php` : Vue pour les administrateurs

-  [ ] **Créer le contrôleur `CommandeController.php`**

---

## 👤 Utilisateurs (Admin uniquement)
-  [ ] **Créer une vue** : Liste des utilisateurs avec leurs rôles
-  [ ] **Ajouter une méthode dans `Utilisateur.php`** :
  - Récupérer tous les utilisateurs
  - Possibilité de changer ou supprimer un utilisateur (optionnel)

---

## [ ]  🧠 Interactions JavaScript
- Ajout de produit en JS dynamique (DOM – CM1)
- Affichage dynamique avec `jQuery` et `filter()` (CM2)
- Utilisation de `fetch()` pour charger des données JSON (CM4)
- Validation avancée des formulaires (CM3)

---

##  [ ] 🔐 Sécurité & Sessions
- Vérification de `isset($_SESSION['utilisateur'])` sur toutes les pages protégées
- Gestion des erreurs de session
- Utilisation de cookies si nécessaire (CM7)

---

## [ ]  🌟 Bonus (Facultatif)
- Ajouter une API externe (ex : taux de change, météo)
- Responsive CSS simple
- Compte invité (achat sans inscription)
- Export JSON de la liste des produits

