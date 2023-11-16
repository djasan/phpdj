<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Fournisseur</title>
</head>
<body>

<h1>Nouveau Fournisseur</h1>

<form action="/create-fournisseur" method="post">
    <!-- Ajoutez les champs nécessaires pour créer un nouveau fournisseur -->
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="adresse">Adresse:</label>
    <textarea id="adresse" name="adresse" required></textarea>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telephone">Téléphone:</label>
    <input type="tel" id="telephone" name="telephone" required>

    <button type="submit">Enregistrer le Nouveau Fournisseur</button>
</form>

</body>
</html>
