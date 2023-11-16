<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à Jour de Produit</title>
</head>
<body>

<h1>Mise à Jour de Produit</h1>

<?php if (!empty($produit)): ?>
    <form action="/update-produit" method="post" enctype="multipart/form-data">
        <!-- Ajoutez les champs nécessaires pour mettre à jour un produit -->
        <input type="hidden" name="id_produit" value="<?php echo $produit['id_produit']; ?>">

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $produit['nom']; ?>" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $produit['description']; ?></textarea>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="<?php echo $produit['type']; ?>" required>

        <label for="prix">Prix:</label>
        <input type="number" id="prix" name="prix" step="0.01" value="<?php echo $produit['prix']; ?>" required>

        <label for="quantite_stock">Quantité en Stock:</label>
        <input type="number" id="quantite_stock" name="quantite_stock" value="<?php echo $produit['quantite_stock']; ?>" required>

        <label for="image_url">Image:</label>
        <input type="file" id="image_url" name="image_url" accept="image/*">

        <button type="submit">Enregistrer les Modifications</button>
    </form>
<?php else: ?>
    <p>Produit non trouvé.</p>
<?php endif; ?>

</body>
</html>
