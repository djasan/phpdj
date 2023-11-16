<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher les informations de contact depuis la base de données
$sql = "SELECT * FROM contacts";
$result = $connexion->query($sql);

if ($result) {
    $contacts = $result->fetchAll();
} else {
    $contacts = [];
    echo "Erreur lors de la récupération des informations de contact depuis la base de données.";
}

// Affichage des informations de contact
require '../../views/contact.view.php';
?>
