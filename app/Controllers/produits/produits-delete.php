<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si un ID de produit est fourni dans la requête
    if (isset($_POST['id_produit'])) {
        // Nettoyer et récupérer l'ID du produit
        $id_produit = intval($_POST['id_produit']);

        // Vous pouvez maintenant utiliser cette valeur pour supprimer le produit de la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "produits"
        // et que vous avez une fonction dans votre modèle pour supprimer des produits.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "DELETE FROM produits WHERE id_produit = ?";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id_produit);
            $stmt->execute();

            echo "Le produit a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "L'ID du produit est requis pour la suppression.";
    }
} else {
    echo "La suppression ne peut être effectuée que par une requête POST.";
}
?>
