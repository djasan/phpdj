<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
</head>
<body>

<h1>Liste des Produits</h1>

<?php if (!empty($produits)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Quantité en Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit): ?>
                <tr>
                    <td><?php echo $produit['id_produit']; ?></td>
                    <td><?php echo $produit['nom']; ?></td>
                    <td><?php echo $produit['description']; ?></td>
                    <td><?php echo $produit['type']; ?></td>
                    <td><?php echo $produit['prix']; ?></td>
                    <td><?php echo $produit['quantite_stock']; ?></td>
                    <td><img src="<?php echo $produit['image_url']; ?>" alt="<?php echo $produit['nom']; ?>" style="width: 50px; height: 50px;"></td>
                    <td>
                        <a href="/produit/<?php echo $produit['id_produit']; ?>/edit">Modifier</a>
                        <a href="/produit/<?php echo $produit['id_produit']; ?>/delete">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun produit disponible.</p>
<?php endif; ?>

</body>
</html>
