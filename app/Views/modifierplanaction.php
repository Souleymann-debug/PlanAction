<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier - Plan d'action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include(APPPATH.'views/navbar.php');
    ?>
    <div class="container">
        <br>
        <?php
            if (  isset($success) ) {
                ?>
                <div class="alert alert-success" role="alert">
                    Vos modifications ont été enregistrés ;) Vous pouvez aller sur la page d'accueil.
                </div>
                <?php
            } else {
                ?>
                <h2>Modifier le plan d'actions</h2>
                <br>
                <form action="<?php echo base_url(); ?>/ModifierPlanAction?id=<?=$planaction['id']?>" method="POST" enctype="multipart/form-data">
                    <div class="d-flex border justify-content-around pt-3 pb-3 rounded bg-light shadow-lg">
                        <div class="col-3 ">
                            <label for="jour" class="form-label">Jour</label>
                            <input type="text" class="form-control" name="jour" value="<?=$planaction['jour']?>">
                        </div>
                        <div class="col-3 ">
                            <label for="mois" class="form-label">Mois</label>
                            <input type="text" class="form-control" value="<?=$planaction['mois']?>" name="mois">
                        </div>
                        <div class="col-3 ">
                            <label for="annee" class="form-label">Année</label>
                            <input type="text" class="form-control" value="<?=$planaction['annee']?>" name="annee">
                        </div>
                    </div>
                    <br>
                    <div class=" border pt-3 pb-3 rounded bg-light shadow-lg">
                        <br>
                        <div class="row justify-content-center row justify-content-center">
                            <div class="col-8">
                                <label for="designation" class="form-label">Désignation de l'action</label>
                                <textarea name="designation" class="form-control"><?=$planaction['designation']?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center row justify-content-center">
                            <div class="col-8">
                                <label for="pourqui" class="form-label">Pour qui ? (Adultes, enfants...)</label>
                                <textarea name="pourqui" id="pourqui" class="form-control"><?=$planaction['pourqui']?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center row justify-content-center">
                            <div class="col-8">
                                <label for="lieu" class="form-label">Lieu (Ville, village, quartier...)</label>
                                <textarea name="lieu" id="lieu" class="form-control"><?=$planaction['lieu']?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center row justify-content-center">
                            <div class="col-4">
                                <label for="nbbeneficiaire" class="form-label">Nombre de bénéficiaires visés</label>
                                <input type="number" class="form-control" value="<?=$planaction['nbbeneficiaire']?>" name="nbbeneficiaire">
                            </div>
                            <div class="col-4">
                                <label for="budgetvise" class="form-label">Budget visé (€)</label>
                                <input type="number" class="form-control" value="<?=$planaction['budgetvise']?>" name="budgetvise">
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="d-flex border justify-content-around pt-4 pb-4 rounded bg-light shadow-lg flex-column">
                        <div class="row justify-content-center row justify-content-center">
                            <div class="col-3 ">
                                <label for="budgetrealise" class="form-label">Budget réalisé</label>
                                <input type="number" class="form-control" name="budgetrealise" value="<?=$planaction['budgetrealise']?>">
                            </div>
                            <div class="col-3 ">
                                <label for="nbbeneficaireatteint" class="form-label">Nombre de bénéficiaires atteints</label>
                                <input type="text" class="form-control" value="<?=$planaction['nbbeneficaireatteint']?>" name="nbbeneficaireatteint">
                            </div>
                            <div class="col-3 ">
                                <label for="statut" class="form-label">Statut</label>
                                <select name="statut" id="statut" class="form-select" aria-label="Default select example" >
                                    <option value="">Choisissez une option</option>
                                    <option value="Réalisé">Réalisé</option>
                                    <option value="En attente">En attente</option>
                                    <option value="Annulé">Annulé</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center row justify-content-center">
                            <div class="col-3 ">
                                <label for="image" class="form-label">Photos/Vidéos</label>
                                <input type="file" class="form-control" name="image" value="<?=$planaction['jour']?>">
                                <button type="button" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Voir les photos
                                </button>
                            </div>
                            <div class="col-3 ">
                                <label for="datephoto" class="form-label">Date des photos/vidéos</label>
                                <input type="date" class="form-control" value="<?=$planaction['datephoto']?>" name="datephoto">
                            </div>
                            <div class="col-3 ">
                                <label for="personnephoto" class="form-label">Personne ayant fait les photos</label>
                                <input type="text" class="form-control" value="<?=$planaction['personnephoto']?>" name="personnephoto">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-success col-4  ">Modifier</button>
                    </div>
                </form>
                    <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Photos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <?php
                                        foreach ($images as $image) { 
                                            ?> 
                                                <div class="border mb-3">
                                                    <img src="<?=base_url()."/uploads/".$image['chemin']?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="row justify-content-center">
                                                    <a href="<?=base_url()."delete_image?id=".$image['id']?>" class="col-3 btn btn-sm btn-danger mb-4">Supprimer</a>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }            
        ?>
    </div>
    <br>
    <br>
    <br>

</body>
</html>