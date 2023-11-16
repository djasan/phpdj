<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Client</title>
</head>
<body>

<h1>Création de Client</h1>

<form action="/create-client" method="post">
    <!-- Ajoutez les champs nécessaires pour créer un client -->
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="adresse">Adresse:</label>
    <textarea id="adresse" name="adresse" required></textarea>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telephone">Téléphone:</label>
    <input type="tel" id="telephone" name="telephone" required>

    <button type="submit">Créer Client</button>
</form>

</body>
</html>
