<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Produit</title>
</head>
<body>

<h1>Nouveau Produit</h1>

<form action="/create-produit" method="post" enctype="multipart/form-data">
    <!-- Ajoutez les champs nécessaires pour créer un nouveau produit -->
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required>

    <label for="prix">Prix:</label>
    <input type="number" id="prix" name="prix" step="0.01" required>

    <label for="quantite_stock">Quantité en Stock:</label>
    <input type="number" id="quantite_stock" name="quantite_stock" required>

    <label for="image_url">Image:</label>
    <input type="file" id="image_url" name="image_url" accept="image/*" required>

    <button type="submit">Enregistrer le Nouveau Produit</button>
</form>

</body>
</html>
