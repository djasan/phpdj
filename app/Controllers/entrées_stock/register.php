<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez ajouter ici la logique pour récupérer et afficher la liste des entrées stock depuis la base de données
$sql = "SELECT es.id_entree, p.nom AS nom_produit, es.quantite, es.date_entree, f.nom AS nom_fournisseur
        FROM `entrées stock` es
        INNER JOIN produits p ON es.id_produit = p.id_produit
        INNER JOIN fournisseurs f ON es.id_fournisseur = f.id_fournisseur";
$result = $connexion->query($sql);

if ($result) {
    $entrees_stock = $result->fetchAll();
} else {
    $entrees_stock = [];
    echo "Erreur lors de la récupération des entrées stock depuis la base de données.";
}

// Affichage du registre des entrées stock
require '../../views/admin/register-entrees_stock.view.php';
?>
