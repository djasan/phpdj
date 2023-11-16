<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à Jour de Sortie de Stock</title>
</head>
<body>

<h1>Mise à Jour de Sortie de Stock</h1>

<?php if (!empty($sortieStock)): ?>
    <form action="/update-sortie_stock" method="post">
        <!-- Ajoutez les champs nécessaires pour mettre à jour une sortie de stock -->
        <input type="hidden" name="id_sortie" value="<?php echo $sortieStock['id_sortie']; ?>">

        <label for="id_produit">Produit:</label>
        <select id="id_produit" name="id_produit" required>
            <!-- Options pour les produits, vous devez les récupérer depuis la base de données -->
            <?php foreach ($produits as $produit): ?>
                <option value="<?php echo $produit['id_produit']; ?>" <?php echo ($sortieStock['id_produit'] == $produit['id_produit']) ? 'selected' : ''; ?>><?php echo $produit['nom']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" value="<?php echo $sortieStock['quantite']; ?>" required>

        <label for="date_sortie">Date de Sortie:</label>
        <input type="date" id="date_sortie" name="date_sortie" value="<?php echo $sortieStock['date_sortie']; ?>" required>

        <label for="id_client">Client:</label>
        <select id="id_client" name="id_client" required>
            <!-- Options pour les clients, vous devez les récupérer depuis la base de données -->
            <?php foreach ($clients as $client): ?>
                <option value="<?php echo $client['id_client']; ?>" <?php echo ($sortieStock['id_client'] == $client['id_client']) ? 'selected' : ''; ?>><?php echo $client['nom']; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Enregistrer les Modifications</button>
    </form>
<?php else: ?>
    <p>Sortie de Stock non trouvée.</p>
<?php endif; ?>

</body>
</html>
