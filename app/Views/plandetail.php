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
        $session = session();
        include(APPPATH.'views/navbar.php');
    ?>
    <br>

    <div class="container">
        <div class="row " >
            <div class="row ">
                <div class="col-8">
                    <h1>Fiche détail : <?=$plandetail['designation'] ?></h1>
                </div>
                <div class="col-4">
                    <?php   
                        if ($plandetail['statut']=="Réalisé") {
                            ?>
                            <div class="alert alert-primary" style="width: 150px;" role="alert">
                            Réalisé
                            </div>
                            <?php
                        } else {
                            if ($plandetail['statut']=="Annulé") {
                                ?>
                                <div class="alert alert-danger" style="width: 150px;" role="alert">
                                    Annulé
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-secondary" style="width: 150px;" role="alert">
                                    En attente
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <br>
            <div class="row justify-content-center mt-4" >
                <div class="col-4">
                    <p>Jour</p>
                    <h5><?=$plandetail['jour'] ?></h5>
                </div>
                <div class="col-4">
                    <p>Mois</p>
                    <h5><?=$plandetail['mois'] ?></h5>
                </div>
                <div class="col-4">
                    <p>Année</p>
                    <h5><?=$plandetail['annee'] ?></h5>
                </div>
            </div>        
            <div class="row justify-content-center mt-4" >
                <div class="col-4">
                    <p>Cible</p>
                    <h5><?=$plandetail['pourqui'] ?></h5>
                </div>
                <div class="col-4">
                    <p>Lieu</p>
                    <h5><?=$plandetail['lieu'] ?></h5>
                </div>
                <div class="col-4">
                    <p>Budget visé</p>
                    <h5><?=$plandetail['budgetvise'] ?></h5>
                </div>            
            </div>

            <div class="row justify-content-center mt-4" >
                <div class="col-4">
                    <p>Nombre de bénéficiare visé</p>
                    <h5><?=$plandetail['nbbeneficiaire'] ?></h5>
                </div>
                <div class="col-4">
                    <p>Nombre de bénéficiare atteint</p>
                    <h5><?=$plandetail['nbbeneficaireatteint'] ?></h5>
                </div>
                <div class="col-4">
                    <p>Budget atteint</p>
                    <h5><?=$plandetail['budgetrealise'] ?></h5>
                </div>            
            </div>

            <div class="row mt-4" >
                <div class="col-4">
                    <p>Crée le</p>
                    <h5><?=$plandetail['created_at'] ?></h5>
                </div>          
            </div>

        </div>
    </div>
</body>
</html>