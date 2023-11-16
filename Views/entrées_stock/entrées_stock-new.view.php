<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Entrée de Stock</title>
</head>
<body>

<h1>Nouvelle Entrée de Stock</h1>

<form action="/create-entree-stock" method="post">
    <!-- Ajoutez les champs nécessaires pour créer une nouvelle entrée de stock -->
    <label for="id_produit">ID Produit:</label>
    <input type="text" id="id_produit" name="id_produit" required>

    <label for="quantite">Quantité:</label>
    <input type="text" id="quantite" name="quantite" required>

    <label for="date_entree">Date d'Entrée:</label>
    <input type="date" id="date_entree" name="date_entree" required>

    <label for="id_fournisseur">ID Fournisseur:</label>
    <input type="text" id="id_fournisseur" name="id_fournisseur" required>

    <button type="submit">Enregistrer l'Entrée de Stock</button>
</form>

</body>
</html>
