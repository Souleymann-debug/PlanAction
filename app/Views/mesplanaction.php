<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Plan d'action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <?php
        include(APPPATH.'views/navbar.php');
    ?>
    <div class="container">
        <br>
        <div class="d-flex justify-content-between align-items-center">
            
            <?php
                if ( !$session->get('apps')=="") {
                    ?>
                    <h2>Mes plans d'action</h2>
                    <a href="<?=base_url()."AjouterPlanAction"?>" class="btn btn-primary">Ajouter un plan d'actions</a>
                    <?php
                }else {
                    ?>
                    <h2>Tout les plans d'actions</h2>
                    <?php
                }
            ?>
        </div>

        <br>
        <div class="container border pt-3 pb-3 rounded bg-light shadow-lg">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>APPS</th>
                        <th>Jour/Mois/Année</th>
                        <th>Statut</th>
                        <th>Lieu</th>
                        <th>Budget visé</th>
                        <?php
                            if ( !$session->get('apps')=="") {
                                ?>
                                <th>Actions</th>
                                <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($plans as $row) {
                    ?>
                        <tr>
                            <td> <a href="<?=base_url()."PlanDetail?id=".$row->id ?>" ><?=$row->designation?></a></td>
                            <td><?=$row->apps ?></td>
                            <td><?=$row->jour."/".$row->mois."/".$row->annee ?></td>
                            <td><?=$row->statut ?></td>
                            <td><?=$row->lieu ?></td>
                            <td><?=$row->budgetvise ?></td>

                            <?php
                                if ( !$session->get('apps')=="") {
                                    ?>
                                    <td class="d-flex justify-content-around">
                                        <a href="<?=base_url()."SupprimerPlanAction?id=".$row->id?>">
                                            <i class="bi bi-trash-fill text-danger"></i>
                                        </a>
                                        <a href="<?=base_url()."ModifierPlanAction?id=".$row->id?>">
                                            <i class="bi bi-pencil-fill text-success"></i>
                                        </a>
                                    </td>
                                    <?php
                                }
                            ?>
                        </tr>   
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>