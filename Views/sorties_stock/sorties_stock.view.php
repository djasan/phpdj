<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Sorties de Stock</title>
</head>
<body>

<h1>Liste des Sorties de Stock</h1>

<?php if (!empty($sortiesStock)): ?>
    <table>
        <thead>
            <tr>
                <th>ID Sortie</th>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Date de Sortie</th>
                <th>Client</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sortiesStock as $sortie): ?>
                <tr>
                    <td><?php echo $sortie['id_sortie']; ?></td>
                    <td><?php echo $sortie['nom_produit']; ?></td>
                    <td><?php echo $sortie['quantite']; ?></td>
                    <td><?php echo $sortie['date_sortie']; ?></td>
                    <td><?php echo $sortie['nom_client']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune sortie de stock trouvée.</p>
<?php endif; ?>

</body>
</html>
