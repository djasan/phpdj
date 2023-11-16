<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'models/Database.php';

try {
    // Vous pouvez inclure le fichier de connexion à la base de données ici (s'il n'est pas déjà inclus).

    // Requête pour récupérer des données de la base de données
    $sql = "SELECT clients.nom AS Client_Nom, produits.nom AS Produit_Nom, sorties_stock.quantite, sorties_stock.date_sortie
            FROM sorties_stock
            INNER JOIN clients ON sorties_stock.id_client = clients.id_client
            INNER JOIN produits ON sorties_stock.id_produit = produits.id_produit";

    $result = $connexion->query($sql);

    if ($result) {
        $sortiesStock = $result->fetchAll();
    } else {
        $sortiesStock = [];
        echo "Aucun résultat trouvé dans la table sorties_stock.";
    }

    // Charger la vue
    require 'views/admin/index.view.php';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
