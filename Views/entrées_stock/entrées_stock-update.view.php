<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à Jour d'Entrée de Stock</title>
</head>
<body>

<h1>Mise à Jour d'Entrée de Stock</h1>

<?php if (!empty($entreeStock)): ?>
    <form action="/update-entree-stock" method="post">
        <!-- Ajoutez les champs nécessaires pour mettre à jour une entrée de stock -->
        <input type="hidden" name="id_entree" value="<?php echo $entreeStock['id_entree']; ?>">

        <label for="id_produit">ID Produit:</label>
        <input type="text" id="id_produit" name="id_produit" value="<?php echo $entreeStock['id_produit']; ?>" required>

        <label for="quantite">Quantité:</label>
        <input type="text" id="quantite" name="quantite" value="<?php echo $entreeStock['quantite']; ?>" required>

        <label for="date_entree">Date d'Entrée:</label>
        <input type="date" id="date_entree" name="date_entree" value="<?php echo $entreeStock['date_entree']; ?>" required>

        <label for="id_fournisseur">ID Fournisseur:</label>
        <input type="text" id="id_fournisseur" name="id_fournisseur" value="<?php echo $entreeStock['id_fournisseur']; ?>" required>

        <button type="submit">Enregistrer les Modifications</button>
    </form>
<?php else: ?>
    <p>Entrée de stock non trouvée.</p>
<?php endif; ?>

</body>
</html>
