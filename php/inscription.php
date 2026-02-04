<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="form-card">
            <h1>Créer un compte</h1>
            <form action="traitementInscription.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre Nom" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse mail</label>
                    <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
                </div>

                <div class="form-group">
                    <label for="email2">Valider l'adresse mail</label>
                    <input type="email" id="email2" name="email" placeholder="exemple@mail.com" required>
                </div>

                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp" placeholder="********" required>
                </div>

                <div class="form-group">
                    <label for="mdp2">Valider le mot de passe</label>
                    <input type="password" id="mdp2" name="mdp2" placeholder="********" required>
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" required>
                </div>

                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="tel" id="tel" name="tel"  required>
                </div>

                <div class="form-group">
                    <label for="dn">Date de Naissance</label>
                    <input type="date" id="dn" name="dn" required>
                </div>

                <button type="submit" class="btn-primary">S'inscrire</button>
                <div class="form-footer">
                    <p>Déjà un compte ? <a href="connexion.php">Se connecter</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
