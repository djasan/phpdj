<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Édition de Client</title>
</head>
<body>

<h1>Édition de Client</h1>

<?php if (!empty($client)): ?>
    <form action="/edit-client" method="post">
        <!-- Ajoutez les champs nécessaires pour éditer un client -->
        <input type="hidden" name="id_client" value="<?php echo $client['id_client']; ?>">

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $client['nom']; ?>" required>

        <label for="adresse">Adresse:</label>
        <textarea id="adresse" name="adresse" required><?php echo $client['adresse']; ?></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $client['email']; ?>" required>

        <label for="telephone">Téléphone:</label>
        <input type="tel" id="telephone" name="telephone" value="<?php echo $client['telephone']; ?>" required>

        <button type="submit">Enregistrer les Modifications</button>
    </form>
<?php else: ?>
    <p>Client non trouvé.</p>
<?php endif; ?>

</body>
</html>
