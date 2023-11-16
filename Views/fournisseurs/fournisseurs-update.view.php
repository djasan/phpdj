<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à Jour de Fournisseur</title>
</head>
<body>

<h1>Mise à Jour de Fournisseur</h1>

<?php if (!empty($fournisseur)): ?>
    <form action="/update-fournisseur" method="post">
        <!-- Ajoutez les champs nécessaires pour mettre à jour un fournisseur -->
        <input type="hidden" name="id_fournisseur" value="<?php echo $fournisseur['id_fournisseur']; ?>">

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $fournisseur['nom']; ?>" required>

        <label for="adresse">Adresse:</label>
        <textarea id="adresse" name="adresse" required><?php echo $fournisseur['adresse']; ?></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $fournisseur['email']; ?>" required>

        <label for="telephone">Téléphone:</label>
        <input type="tel" id="telephone" name="telephone" value="<?php echo $fournisseur['telephone']; ?>" required>

        <button type="submit">Enregistrer les Modifications</button>
    </form>
<?php else: ?>
    <p>Fournisseur non trouvé.</p>
<?php endif; ?>

</body>
</html>
