<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

<h1>Inscription</h1>

<?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form action="/register" method="post">
    <!-- Ajoutez les champs nécessaires pour l'inscription -->
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="adresse">Adresse:</label>
    <textarea id="adresse" name="adresse" required></textarea>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telephone">Téléphone:</label>
    <input type="tel" id="telephone" name="telephone" required>

    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">S'Inscrire</button>
</form>

</body>
</html>
