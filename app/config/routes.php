<?php

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/clients' => 'controllers/client/clients.php',
    '/clients/create' => 'controllers/client/create-client.php',
    '/clients/disconnect' => 'controllers/client/disconnect.php',
    '/clients/edit' => 'controllers/client/edit_client.php',
    '/clients/login' => 'controllers/client/login.php',
    '/clients/register' => 'controllers/client/register.php',
    '/clients/spirit' => 'controllers/client/spirit.php',
    '/admin' => 'controllers/admin/admin.php',
    '/entrees_stock/create' => 'controllers/entrees_stock/create-entrees_stock.php',
    '/entrees_stock' => 'controllers/entrees_stock/entrees_stock.php',
    '/entrees_stock/register' => 'controllers/entrees_stock/register.php',
    '/fournisseurs/create' => 'controllers/fournisseurs/create-fournisseurs.php',
    '/fournisseurs' => 'controllers/fournisseurs/fournisseurs.php',
    '/fournisseurs/register' => 'controllers/fournisseurs/register.php',
    '/produits/delete' => 'controllers/produits/produits-delete.php',
    '/produits/new' => 'controllers/produits/produits-new.php',
    '/produits/update' => 'controllers/produits/produits-update.php',
    '/produits' => 'controllers/produits/produits.php',
    '/produits/spirit' => 'controllers/produits/spirit.php',
    '/sorties_stock' => 'controllers/sorties_stock/sorties_stock.php',
    '/sorties_stock/create' => 'controllers/sorties_stock/create-sorties_stock.php',
    '/sorties_stock/register' => 'controllers/sorties_stock/register.php'
];

require '../config/fonction.php';
