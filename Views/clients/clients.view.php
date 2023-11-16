<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>

<h1>Liste des Clients</h1>

<?php if (!empty($clients)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?php echo $client['id_client']; ?></td>
                    <td><?php echo $client['nom']; ?></td>
                    <td><?php echo $client['adresse']; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $client['telephone']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun client disponible.</p>
<?php endif; ?>

</body>
</html>
