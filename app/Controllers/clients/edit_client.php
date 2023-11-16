<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire lorsqu'il est soumis

    // Vérification des champs du formulaire (vous pouvez ajouter plus de validations)
    if (isset($_POST['id_client'], $_POST['nom'], $_POST['adresse'], $_POST['email'], $_POST['telephone'])) {
        // Nettoyer et récupérer les valeurs des champs du formulaire
        $id_client = intval($_POST['id_client']);
        $nom = htmlspecialchars($_POST['nom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);

        // Validation supplémentaire si nécessaire

        // Vous pouvez maintenant utiliser ces valeurs pour mettre à jour le client dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "clients"
        // et que vous avez une fonction dans votre modèle pour mettre à jour les clients.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "UPDATE clients SET nom = ?, adresse = ?, email = ?, telephone = ? WHERE id_client = ?";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssssi", $nom, $adresse, $email, $telephone, $id_client);
            $stmt->execute();

            echo "Le client a été mis à jour avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire d'édition de clients

    // Récupération de l'ID du client depuis la requête (à ajuster selon vos routes)
    $id_client = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Vérification de la validité de l'ID
    if ($id_client > 0) {
        // Requête pour récupérer les informations du client depuis la base de données
        $sql = "SELECT * FROM clients WHERE id_client = ?";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id_client);
            $stmt->execute();
            $result = $s
