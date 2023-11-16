<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrées de Stock</title>
</head>
<body>

<h1>Entrées de Stock</h1>

<?php if (!empty($entreesStock)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Produit</th>
                <th>Quantité</th>
                <th>Date d'Entrée</th>
                <th>ID Fournisseur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entreesStock as $entree): ?>
                <tr>
                    <td><?php echo $entree['id_entree']; ?></td>
                    <td><?php echo $entree['id_produit']; ?></td>
                    <td><?php echo $entree['quantite']; ?></td>
                    <td><?php echo $entree['date_entree']; ?></td>
                    <td><?php echo $entree['id_fournisseur']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune entrée de stock disponible.</p>
<?php endif; ?>

</body>
</html>
