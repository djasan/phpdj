<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher la liste des produits depuis la base de données
$sql = "SELECT * FROM spirit.produits";
$result = $connexion->query($sql);

if ($result) {
    $produits = $result->fetchAll();
} else {
    $produits = [];
    echo "Erreur lors de la récupération des produits depuis la base de données.";
}

// Affichage de la liste des produits
require '../../views/admin/produits.view.php';
?>
