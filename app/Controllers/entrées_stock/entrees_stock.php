<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher la liste des entrées stock depuis la base de données
$sql = "SELECT * FROM `entrées stock`";
$result = $connexion->query($sql);

if ($result) {
    $entrees_stock = $result->fetchAll();
} else {
    $entrees_stock = [];
    echo "Erreur lors de la récupération des entrées stock depuis la base de données.";
}

// Affichage de la liste des entrées stock
require '../../views/admin/entrees_stock.view.php';
?>
