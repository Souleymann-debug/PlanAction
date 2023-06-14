<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Plan d'action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include(APPPATH.'views/navbar.php');
    ?>
    <div class="container">
        <br>
        <h2>Ajouter un plan d'actions</h2>
        <br>
        <form class="" action="<?php echo base_url(); ?>/AjouterPlanAction" method="POST">
            <div class="d-flex border justify-content-around pt-3 pb-3 rounded bg-light shadow-lg">
                <div class="col-3 ">
                    <label for="jour" class="form-label">Jour</label>
                    <input type="text" class="form-control" name="jour">
                </div>
                <div class="col-3 ">
                    <label for="mois" class="form-label">Mois</label>
                    <input type="text" class="form-control" name="mois">
                </div>
                <div class="col-3 ">
                    <label for="annee" class="form-label">Année</label>
                    <input type="text" class="form-control" name="annee">
                </div>
            </div>
            <br>
            <div class=" border pt-3 pb-3 rounded bg-light shadow-lg">
                <br>
                <div class="row justify-content-center row justify-content-center">
                    <div class="col-8">
                        <label for="designation" class="form-label">Désignation de l'action</label>
                        <textarea name="designation" class="form-control"></textarea>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center row justify-content-center">
                    <div class="col-8">
                        <label for="pourqui" class="form-label">Pour qui ? (Adultes, enfants...)</label>
                        <textarea name="pourqui" id="pourqui" class="form-control"></textarea>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center row justify-content-center">
                    <div class="col-8">
                        <label for="lieu" class="form-label">Lieu (Ville, village, quartier...)</label>
                        <textarea name="lieu" id="lieu" class="form-control"></textarea>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center row justify-content-center">
                    <div class="col-4">
                        <label for="nbbeneficiaire" class="form-label">Nombre de bénéficiaires visés</label>
                        <input type="number" class="form-control" name="nbbeneficiaire">
                    </div>
                    <div class="col-4">
                        <label for="budgetvise" class="form-label">Budget visé (€)</label>
                        <input type="number" class="form-control" name="budgetvise">
                    </div>
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary col-4  ">Enregistrer</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
</body>
</html>