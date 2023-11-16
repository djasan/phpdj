<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher le registre des sorties stock depuis la base de données
$sql = "SELECT * FROM sorties_stock";
$result = $connexion->query($sql);

if ($result) {
    $registre_sorties_stock = $result->fetchAll();
} else {
    $registre_sorties_stock = [];
    echo "Erreur lors de la récupération du registre des sorties stock depuis la base de données.";
}

// Affichage du registre des sorties stock
require '../../views/admin/registre-sorties_stock.view.php';
?>
