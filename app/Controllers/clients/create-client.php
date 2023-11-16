<?php
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

        // Vous pouvez maintenant utiliser ces valeurs pour insérer un nouveau client dans la base de données
        // Assurez-vous que votre modèle de base de données est correctement configuré avec la table "clients"
        // et que vous avez une fonction dans votre modèle pour insérer des clients.

        // Exemple d'utilisation fictive (vous devez ajuster cela selon votre modèle et votre base de données)
        require '../../models/Database.php';
        
        // Connexion à la base de données (vous devez ajuster cela selon votre configuration)
        $connexion = new Database();

        // Exemple d'utilisation fictive de la fonction d'insertion (ajustez selon vos besoins)
        $sql = "INSERT INTO clients (nom, adresse, email, telephone) VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("ssss", $nom, $adresse, $email, $telephone);
            $stmt->execute();
            
            echo "Le client a été ajouté avec succès.";
        } else {
            echo "Erreur lors de la préparation de la requête.";
        }
    } else {
        echo "Tous les champs du formulaire sont requis.";
    }
} else {
    // Affichage du formulaire de création de clients
    require '../../views/admin/create-clients.view.php';
}
?>
