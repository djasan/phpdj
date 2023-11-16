<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Récupération des clients depuis la base de données
$sql = "SELECT * FROM clients";
$result = $connexion->query($sql);

if ($result) {
    $clients = $result->fetchAll();
} else {
    $clients = [];
    echo "Erreur lors de la récupération des clients depuis la base de données.";
}

// Affichage de la liste des clients
require '../../views/admin/clients.view.php';
?>
