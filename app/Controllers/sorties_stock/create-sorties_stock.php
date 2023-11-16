<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire lorsqu'il est soumis

    // Vérification des champs du formulaire (vous pouvez ajouter plus de validations)
    if (isset($_POST['id_produit'], $_POST['quantite'], $_POST['date_sortie'], $_POST['id_client'])) {
        // Nettoyer et récupérer les valeurs des champs du formulaire
        $id_produit = intval($_POST['id_produit']);
        $quantite = intval($_POST['quantite']);
        $date_sortie = htmlspecialchars($_POST['date_sortie']);
        $id_client = intval($_POST['id_client']);

        // Validation supplémentaire si nécessaire

        // Vous pouvez maintenant utiliser ces valeurs pour insérer une nouvelle sortie stock dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "sorties_stock"
        // et que vous avez une fonction dans votre modèle pour insérer des sorties stock.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "INSERT INTO sorties_stock (id_produit, quantite, date_sortie, id_client) VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("iisi", $id_produit, $quantite, $date_sortie, $id_client);
            $stmt->execute();

            echo "La nouvelle sortie stock a été enregistrée avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire de création de sorties stock
    require '../../views/admin/create-sorties_stock.view.php';
}
?>
