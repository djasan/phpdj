<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
</head>
<body>

<h1>Page d'accueil de l'administration</h1>

<?php if (!empty($clients)): ?>
    <h2>Clients</h2>
    <ul>
        <?php foreach ($clients as $client): ?>
            <li>
                <strong>ID:</strong> <?php echo $client['id_client']; ?>,
                <strong>Nom:</strong> <?php echo $client['nom']; ?>,
                <strong>Email:</strong> <?php echo $client['email']; ?>,
                <strong>Téléphone:</strong> <?php echo $client['telephone']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun client disponible.</p>
<?php endif; ?>

<?php if (!empty($fournisseurs)): ?>
    <h2>Fournisseurs</h2>
    <ul>
        <?php foreach ($fournisseurs as $fournisseur): ?>
            <li>
                <strong>ID:</strong> <?php echo $fournisseur['id_fournisseur']; ?>,
                <strong>Nom:</strong> <?php echo $fournisseur['nom']; ?>,
                <strong>Email:</strong> <?php echo $fournisseur['email']; ?>,
                <strong>Téléphone:</strong> <?php echo $fournisseur['telephone']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun fournisseur disponible.</p>
<?php endif; ?>

<!-- Ajoutez d'autres sections en fonction de vos besoins -->

</body>
</html>

