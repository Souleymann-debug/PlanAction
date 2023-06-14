<nav class="navbar navbar-expand-lg bg-danger text-light shadow ">
  <div class="container-fluid">

    <div class="row" style="width: 100%" >
      <div class="">
        <a class=" text-light " href="#">
          <img src="<?= base_url()."/logo.jpg"?>" alt="Bootstrap" class="rounded img-fluid" width="200px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
  
      
      <div class="d-flex justify-content-end" id="">
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light" href="<?=base_url()?>">Accueil</a>
          </li>

          <?php
            if ( !$session->get('apps')=="") {
              ?>
              <li class="nav-item">
                <a class="nav-link text-light" href="<?=base_url()."MesPlanAction"?>">Mes plans d'actions</a>
              </li>
              <?php
            }else {
              ?>
              <li class="nav-item">
                <a class="nav-link text-light" href="<?=base_url()."MesPlanAction"?>">Plans d'actions</a>
              </li>
              <?php
            }
          ?>
          


          <?php
            if ( !$session->get('apps')=="") {
                ?>
                <li class="nav-item">
                  <a class="nav-link text-light" href="<?=base_url()."AjouterPlanAction"?>">Ajouter un plan d'action</a>
                </li>
                <?php
              }
          ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mon compte
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="#">Mes informations</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?=base_url()."Disconnect"?>">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>


  </div>
</nav>
