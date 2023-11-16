<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire lorsqu'il est soumis

    // Vérification des champs du formulaire (vous pouvez ajouter plus de validations)
    if (isset($_POST['nom'], $_POST['description'], $_POST['type'], $_POST['prix'], $_POST['quantite_stock'], $_POST['image_url'])) {
        // Nettoyer et récupérer les valeurs des champs du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $description = htmlspecialchars($_POST['description']);
        $type = htmlspecialchars($_POST['type']);
        $prix = floatval($_POST['prix']);
        $quantite_stock = intval($_POST['quantite_stock']);
        $image_url = htmlspecialchars($_POST['image_url']);

        // Validation supplémentaire si nécessaire

        // Vous pouvez maintenant utiliser ces valeurs pour insérer un nouveau produit dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "produits"
        // et que vous avez une fonction dans votre modèle pour insérer des produits.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "INSERT INTO produits (nom, description, type, prix, quantite_stock, image_url) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sssdss", $nom, $description, $type, $prix, $quantite_stock, $image_url);
            $stmt->execute();

            echo "Le nouveau produit a été enregistré avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire de création de nouveaux produits
    require '../../views/admin/produits-new.view.php';
}
?>
