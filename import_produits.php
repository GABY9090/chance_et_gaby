<?php
require_once 'config/database.php';
require_once 'models/Produit.php';

$json = file_get_contents('produits_fictifs.json');
$produits = json_decode($json, true);

// ID vendeur par défaut (ex. : 1)
$id_vendeur = 1;

foreach ($produits as $p) {
    $produit = new Produit(
        $p['nom'],
        $p['prix'],
        $p['image'],
        $p['description'],
        $p['categorie'],
        $id_vendeur
    );

    $produit->ajouter($pdo);
}

echo "✅ Importation terminée !";
?>
<?php
require_once 'config/database.php';
require_once 'models/Produit.php';

$json = file_get_contents('produits_fictifs.json');
$produits = json_decode($json, true);

// ID vendeur par défaut (ex. : 1)
$id_vendeur = 1;

foreach ($produits as $p) {
    $produit = new Produit(
        $p['nom'],
        $p['prix'],
        $p['image'],
        $p['description'],
        $p['categorie'],
        $id_vendeur
    );

    $produit->ajouter($pdo);
}

echo "✅ Importation terminée !";
?>
