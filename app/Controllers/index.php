<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher certains produits depuis la base de données
$sql = "SELECT * FROM produits LIMIT 3"; // Récupérer, par exemple, les 3 premiers produits
$result = $connexion->query($sql);

if ($result) {
    $produits_accueil = $result->fetchAll();
} else {
    $produits_accueil = [];
    echo "Erreur lors de la récupération des produits pour la page d'accueil.";
}

// Affichage de la page d'accueil
require '../../views/index.view.php';
?>
