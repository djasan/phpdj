<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher la liste des fournisseurs depuis la base de données
$sql = "SELECT * FROM fournisseurs";
$result = $connexion->query($sql);

if ($result) {
    $fournisseurs = $result->fetchAll();
} else {
    $fournisseurs = [];
    echo "Erreur lors de la récupération des fournisseurs depuis la base de données.";
}

// Affichage de la liste des fournisseurs
require '../../views/admin/fournisseurs.view.php';
?>
