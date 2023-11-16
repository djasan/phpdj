<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire lorsqu'il est soumis

    // Vérification des champs du formulaire (vous pouvez ajouter plus de validations)
    if (isset($_POST['nom'], $_POST['adresse'], $_POST['email'], $_POST['telephone'], $_POST['mot_de_passe'])) {
        // Nettoyer et récupérer les valeurs des champs du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);

        // Validation supplémentaire si nécessaire

        // Vous pouvez maintenant utiliser ces valeurs pour insérer un nouveau client dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "clients"
        // et que vous avez une fonction dans votre modèle pour insérer des clients.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        $sql = "INSERT INTO clients (nom, adresse, email, telephone, mot_de_passe) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        if ($stmt) {
            // Assurez-vous de sécuriser correctement le mot de passe avant de l'insérer dans la base de données
            // (par exemple, en utilisant une fonction de hachage comme password_hash)

            $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

            $stmt->bind_param("sssss", $nom, $adresse, $email, $telephone, $mot_de_passe_hash);
            $stmt->execute();

            echo "Le client a été enregistré avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire d'enregistrement de clients
    require '../../views/admin/register.view.php';
}
?>
