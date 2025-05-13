<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>E-Commerce</title>
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure les routes et la configuration de la base de données
require_once 'routes.php';
require_once 'config/database.php'; // Initialise $pdo

// Récupérer l'action depuis l'URL, ou définir une valeur par défaut
$action = $_GET['action'] ?? 'home';
$id = $_GET['id'] ?? null;

// Appeler la fonction correspondante si elle existe
if (function_exists($action)) {
    if (in_array($action, ['ajouterProduit', 'listeProduits', 'filtrerProduits', 'mesProduits','routeLogin', 'editUser', 'updateProduit', 'ajoutProduitPanier', 'panier', 'supprimerProduitPanier', 'modifierQteProduitPanier', 'commandesClient', 'deleteAllPanier'])) {

        $action($pdo); // Passe $pdo pour les fonctions qui en ont besoin
    } 
    else if ($id != null) {
        $action($pdo, $id);
    } 
    else {
        $action();
    }
} else {
    http_response_code(404);
    echo "<h1>404 - Page non trouvée</h1>";
}
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>E-Commerce</title>
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure les routes et la configuration de la base de données
require_once 'routes.php';
require_once 'config/database.php'; // Initialise $pdo

// Récupérer l'action depuis l'URL, ou définir une valeur par défaut
$action = $_GET['action'] ?? 'home';
$id = $_GET['id'] ?? null;

// Appeler la fonction correspondante si elle existe
if (function_exists($action)) {
    if (in_array($action, ['ajouterProduit', 'listeProduits', 'filtrerProduits', 'mesProduits','routeLogin', 'editUser', 'updateProduit', 'ajoutProduitPanier', 'panier', 'supprimerProduitPanier', 'modifierQteProduitPanier', 'commandesClient', 'deleteAllPanier'])) {

        $action($pdo); // Passe $pdo pour les fonctions qui en ont besoin
    } 
    else if ($id != null) {
        $action($pdo, $id);
    } 
    else {
        $action();
    }
} else {
    http_response_code(404);
    echo "<h1>404 - Page non trouvée</h1>";
}
?>