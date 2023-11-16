<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher la liste des sorties stock depuis la base de données
$sql = "SELECT * FROM sorties_stock";
$result = $connexion->query($sql);

if ($result) {
    $sorties_stock = $result->fetchAll();
} else {
    $sorties_stock = [];
    echo "Erreur lors de la récupération des sorties stock depuis la base de données.";
}

// Affichage de la liste des sorties stock
require '../../views/admin/sorties_stock.view.php';
?>
