<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers le JavaScript de Bootstrap et ses dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="sytelesheet" type="text/css" href="{{ asset('css/syle.css') }}">

    <!-- Styles personnalisés -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .registration-form {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <a href="{{ url('/liens') }}">Texte du lien</a>
    

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="registration-form">
                    <h2 class="text-center mb-4">Inscription</h2>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="motdepasse">Mot de passe</label>
                        <input type="password" class="form-control" id="motdepasse" placeholder="Entrez votre mot de passe" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmationMotdepasse">Confirmez le mot de passe</label>
                        <input type="password" class="form-control" id="confirmationMotdepasse" placeholder="Confirmez votre mot de passe" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.registration-form').addEventListener('submit', function(event) {
            var motdepasse = document.getElementById('motdepasse').value;
            var confirmationMotdepasse = document.getElementById('confirmationMotdepasse').value;
            if (motdepasse !== confirmationMotdepasse) {
                event.preventDefault();
                alert('Les mots de passe ne correspondent pas.');
            }
        });
    </script>

</body>
</html>



