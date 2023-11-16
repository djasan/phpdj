<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire lorsqu'il est soumis

    // Vérification des champs du formulaire (vous pouvez ajouter plus de validations)
    if (isset($_POST['id_produit'], $_POST['quantite'], $_POST['date_entree'], $_POST['id_fournisseur'])) {
        // Nettoyer et récupérer les valeurs des champs du formulaire
        $id_produit = intval($_POST['id_produit']);
        $quantite = intval($_POST['quantite']);
        $date_entree = htmlspecialchars($_POST['date_entree']);
        $id_fournisseur = intval($_POST['id_fournisseur']);

        // Validation supplémentaire si nécessaire

        // Vous pouvez maintenant utiliser ces valeurs pour insérer une nouvelle entrée stock dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "entrées stock"
        // et que vous avez une fonction dans votre modèle pour insérer des entrées stock.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "INSERT INTO `entrées stock` (id_produit, quantite, date_entree, id_fournisseur) VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("iisi", $id_produit, $quantite, $date_entree, $id_fournisseur);
            $stmt->execute();

            echo "L'entrée stock a été enregistrée avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire de création d'entrées stock
    require '../../views/admin/create-entrees_stock.view.php';
}
?>
