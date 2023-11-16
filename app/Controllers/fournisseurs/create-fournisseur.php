<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire lorsqu'il est soumis

    // Vérification des champs du formulaire (vous pouvez ajouter plus de validations)
    if (isset($_POST['nom'], $_POST['adresse'], $_POST['email'], $_POST['telephone'])) {
        // Nettoyer et récupérer les valeurs des champs du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);

        // Validation supplémentaire si nécessaire

        // Vous pouvez maintenant utiliser ces valeurs pour insérer un nouveau fournisseur dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "fournisseurs"
        // et que vous avez une fonction dans votre modèle pour insérer des fournisseurs.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "INSERT INTO fournisseurs (nom, adresse, email, telephone) VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $nom, $adresse, $email, $telephone);
            $stmt->execute();

            echo "Le fournisseur a été enregistré avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire de création de fournisseurs
    require '../../views/admin/create-fournisseurs.view.php';
}
?>
