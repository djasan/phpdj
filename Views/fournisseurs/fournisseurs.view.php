<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Fournisseurs</title>
</head>
<body>

<h1>Liste des Fournisseurs</h1>

<?php if (!empty($fournisseurs)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fournisseurs as $fournisseur): ?>
                <tr>
                    <td><?php echo $fournisseur['id_fournisseur']; ?></td>
                    <td><?php echo $fournisseur['nom']; ?></td>
                    <td><?php echo $fournisseur['adresse']; ?></td>
                    <td><?php echo $fournisseur['email']; ?></td>
                    <td><?php echo $fournisseur['telephone']; ?></td>
                    <td>
                        <a href="/fournisseur/<?php echo $fournisseur['id_fournisseur']; ?>/edit">Modifier</a>
                        <a href="/fournisseur/<?php echo $fournisseur['id_fournisseur']; ?>/delete">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun fournisseur disponible.</p>
<?php endif; ?>

</body>
</html>
