<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="form-card">
            <h1>Connexion</h1>
            <form action="traitementConnexion.php" method="post">
                <div class="form-group">
                    <label for="email">Adresse mail</label>
                    <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
                </div>

                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp" placeholder="********" required>
                </div>

                <button type="submit" class="btn-primary">Se connecter</button>
                <div class="form-footer">
                    <p>Nouveau ici ? <a href="inscription.php">Créer un compte</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
