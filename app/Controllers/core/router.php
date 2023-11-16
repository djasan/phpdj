<?php

// Assurez-vous d'inclure votre fichier de configuration de la base de données (Database.php) ici
require '../models/Database.php';

// Exemple de connexion (à ajuster selon votre configuration)
$connexion = new Database();

// Définir vos routes
$routes = [
    '/' => '../controllers/index.php',
    '/contact' => '../controllers/contact.php',
    '/clients' => '../controllers/client/clients.php',
    '/create-client' => '../controllers/client/create-client.php',
    '/disconnect' => '../controllers/client/disconnect.php',
    '/edit-client' => '../controllers/client/edit-client.php',
    '/login' => '../controllers/client/login.php',
    '/register' => '../controllers/client/register.php',
    '/spirit' => '../controllers/client/spirit.php',
    '/admin' => '../controllers/admin/admin.php',
    '/create-entrees-stock' => '../controllers/entrees_stock/create-entrees_stock.php',
    '/entrees-stock' => '../controllers/entrees_stock/entrees_stock.php',
    '/register-entrees-stock' => '../controllers/entrees_stock/register-entrees_stock.php',
    '/create-fournisseurs' => '../controllers/fournisseurs/create-fournisseurs.php',
    '/fournisseurs' => '../controllers/fournisseurs/fournisseurs.php',
    '/register-fournisseurs' => '../controllers/fournisseurs/register-fournisseurs.php',
    '/produits-delete' => '../controllers/produits/produits-delete.php',
    '/produits-new' => '../controllers/produits/produits-new.php',
    '/produits-update' => '../controllers/produits/produits-update.php',
    '/produits' => '../controllers/produits/produits.php',
    '/spirit' => '../controllers/produits/spirit.php',
    '/sorties-stock' => '../controllers/sorties_stock/sorties_stock.php',
    '/create-sorties-stock' => '../controllers/sorties_stock/create-sorties_stock.php',
    '/register-sorties-stock' => '../controllers/sorties_stock/register-sorties_stock.php',
];

// Obtenir le chemin de l'URL
$path = $_SERVER['REQUEST_URI'];

// Vérifier si le chemin existe dans les routes
if (array_key_exists($path, $routes)) {
    // Inclure le fichier correspondant à la route
    require $routes[$path];
} else {
    // Gérer la page non trouvée (404)
    include 'views/404.php';
    exit;
}

?>