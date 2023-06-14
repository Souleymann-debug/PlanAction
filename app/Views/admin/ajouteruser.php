<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include(APPPATH.'views/admin/navbar.php');
    ?>
    <div class="container">
        <br>
        <h2>Ajouter un utilisateur</h2>
        <br>
        <form class="" action="<?php echo base_url(); ?>AjouterUtilisateur" method="POST">
            <div class="d-flex border justify-content-around pt-3 pb-3 rounded bg-light shadow-lg">
                <div class="col-3 ">
                    <label for="apps" class="form-label">APPS</label>
                    <input type="text" class="form-control" name="apps">
                </div>
            </div>
            <br>
            <div class="d-flex border justify-content-around pt-3 pb-3 rounded bg-light shadow-lg">
                <div class="col-3 ">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="col-3 ">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
            </div>
            <br>
            <div class="d-flex border justify-content-around pt-3 pb-3 rounded bg-light shadow-lg">
                <div class="col-3 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-3 ">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control" name="mdp">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary col-4">Enregistrer</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
</body>
</html>