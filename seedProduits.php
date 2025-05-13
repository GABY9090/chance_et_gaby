
<?php
require_once './config/database.php'; // Inclure la connexion à la base de données

// Récupérer les données de l'API
$json = file_get_contents('https://fakestoreapi.com/products');

$produits = json_decode($json, true);

foreach ($produits as $produit) {
    $nom = $produit['title'];
    $prix = $produit['price'];
    $image = $produit['image'];
    $description = $produit['description'];
    $categorie = $produit['category'];
    $id_vendeur = 8; // ID fictif d'un vendeur existant

    // Insérer dans la base de données
    $sql = "INSERT INTO produits (nom, prix, image, description, categorie, id_vendeur)
            VALUES (:nom, :prix, :image, :description, :categorie, :id_vendeur)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $nom,
        ':prix' => $prix,
        ':image' => $image,
        ':description' => $description,
        ':categorie' => $categorie,
        ':id_vendeur' => $id_vendeur
    ]);
}

echo "Produits fictifs insérés avec succès !";