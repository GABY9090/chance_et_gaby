<?php

require_once 'config/database.php'; // Assurez-vous que $pdo est défini ici

function home() {
    include_once 'views/layout.php';
}

function connexion()
{
    include_once 'views/utilisateurs/login.php';
}

function inscription()
{
    include_once 'views/utilisateurs/register.php';
}

function logout()
{
    require_once 'controllers/UtilisateurController.php';
    logoutAction();
}

function register() {
    require_once 'controllers/UtilisateurController.php';
    registerAction();
} 

function editUser($pdo)
{
    require_once 'controllers/UtilisateurController.php';
    editUserInfo($pdo);
}

function routeLogin($pdo) {
    require_once 'controllers/UtilisateurController.php';
    loginAction($pdo);
}

function adminHome() {
    include 'views/acceuil/admin.php';
}

function vendeurHome() {
    include 'views/acceuil/vendeur.php'; 
}

function clientHome() {
    include 'views/acceuil/client.php';
}

function profil()
{
    include 'views/utilisateurs/profil.php';
}

function panier($pdo)
{
    require_once 'controllers/PanierController.php';
    getAllProduitPanier($pdo);
}

function ajouterProduit($pdo) {
    require_once 'controllers/ProduitController.php';
    ajouterProduitAction($pdo); // Passe $pdo en paramètre
}

function listeProduits($pdo) {
    require_once 'controllers/ProduitController.php';
    listeProduitsAction($pdo); // Passe $pdo en paramètre
}

function filtrerProduits($pdo) {
    require_once 'controllers/ProduitController.php';
    filtrerProduitsAction($pdo); // Passe $pdo en paramètre
}
function mesProduits($pdo) {
    require_once 'controllers/ProduitController.php';
    mesProduitsAction($pdo);
}

function updateProduit($pdo)
{
    require_once 'controllers/ProduitController.php';
    majProduitAction($pdo);
}

function showProduit($pdo, $id)
{
    require_once 'controllers/ProduitController.php';
    showProduitsAction($pdo, $id);
}

function supprimerProduit($pdo, $id)
{
    require_once 'controllers/ProduitController.php';
    supprimerProduitAction($pdo, $id);
}
// Fonctions pour les commandes
function afficherFormulaire($pdo) {
    require_once 'controllers/CommandeController.php';
    afficherFormulaireAction($pdo);
}

function traiterCommande($pdo) {
    require_once 'controllers/CommandeController.php';
    traiterCommandeAction($pdo);
}

function confirmationCommande($pdo) {
    require_once 'controllers/CommandeController.php';
    confirmationCommandeAction($pdo);
}

function mesCommandes($pdo) {
    require_once 'controllers/CommandeController.php';
    mesCommandesAction($pdo);
}

function commandesClient($pdo) {
    require_once 'controllers/CommandeController.php';
    mesCommandesAction($pdo); // Appelle l'action pour afficher les commandes du client
}

//fonction pour le panier
function ajoutProduitPanier($pdo)
{
    require_once 'controllers/PanierController.php';
    ajoutPanierAction($pdo);
}

function supprimerProduitPanier($pdo)
{
    require_once 'controllers/PanierController.php';
    supProduitPanierAction($pdo);
}

function modifierQteProduitPanier($pdo)
{
    require_once 'controllers/PanierController.php';
    modifierQuantiteAction($pdo);
}

function deleteAllPanier($pdo)
{
    require_once 'controllers/PanierController.php';
    supAllProduitPanierAction($pdo);
}