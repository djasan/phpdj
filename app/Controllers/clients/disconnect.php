<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici

// Exemple de connexion (à ajuster selon votre configuration)
require '../../models/Database.php';
$connexion = new Database();

// Vous pouvez inclure ici la logique de déconnexion de l'utilisateur, par exemple, en détruisant la session

// Exemple de destruction de la session (à ajuster selon vos besoins)
session_start();
session_destroy();

// Redirection vers la page de connexion (à ajuster selon vos routes)
header("Location: /login");
exit();
?>
