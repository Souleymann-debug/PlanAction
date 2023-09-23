<!-- <nav class="navbar navbar-expand-lg bg-danger text-light shadow ">
  <div class="container-fluid">
    <div class="row" style="width: 100%" >
      <div class="">
        <a class=" text-light " href="#">
          <img src="" alt="Bootstrap" class="rounded img-fluid" width="200px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="d-flex justify-content-end" id="">
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light" href="">Accueil</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mon compte
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="#">Mes informations</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> -->

<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
  <!--begin::Header container-->
  <div class="app-container container-xxl d-flex align-items-center justify-content-between" id="kt_app_header_container">
    <!--begin::Header mobile toggle-->
    <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
      <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
        <i class="ki-duotone ki-abstract-14 fs-2">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
      </div>
    </div>
    <!--end::Header mobile toggle-->
    <!--begin::Logo-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
      <a href="<?=base_url()?>">
        <img alt="Logo" src="assets/media/logos/custom-2.jpg" class="h-50px h-lg-80px" />
      </a>
    </div>
    <!--end::Logo-->
    <!--begin::Header wrapper-->
    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
      <!--begin::Menu wrapper-->
      <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
        <!--begin::Menu-->
        <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
          <!--begin:Menu item-->
          <!--end:Menu item-->
          <!--begin:Menu item-->
            <!--begin:Pages-->
          <!--end:Menu item-->
          <!--begin:Menu item-->
          <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
              <span class="menu-title">Plan d'actions</span>
              <span class="menu-arrow d-lg-none"></span>
              
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?=base_url()."AjouterPlanAction"?>">
                  <span class="menu-icon">
                    <i class="ki-solid ki-abstract-10 fs-2"></i>
                  </span>
                  <span class="menu-title">Ajouter un plan d'actions</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--end:Menu link-->
              </div>
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?=base_url()."MesPlanAction"?>">
                  <span class="menu-icon">
                    <i class="ki-solid ki-kanban fs-2"></i>
                  </span>
                  <span class="menu-title">Voir mes plans d'actions</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--end:Menu link-->
              </div>              
            </div>
            <!--end:Menu sub-->
          </div>
          <?php
            if ($session->get('role') == "Admin") {
              ?>
              <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
              <span class="menu-title">Utilisateurs</span>
              <span class="menu-arrow d-lg-none"></span>        
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?=base_url()."AjouterUtilisateur"?>">
                  <span class="menu-icon">
                    <i class="ki-solid ki-abstract-10 fs-2"></i>
                  </span>
                  <span class="menu-title">Ajouter un utilisateur</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--end:Menu link-->
              </div>
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="<?=base_url()."Utilisateur"?>">
                  <span class="menu-icon">
                    <i class="ki-solid ki-kanban fs-2"></i>
                  </span>
                  <span class="menu-title">Voir les utilisateurs</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--end:Menu link-->
              </div>              
            </div>
            <!--end:Menu sub-->
          </div>
              <?php
            }
          ?>
          <!--end:Menu item-->
          <!--begin:Menu item-->
          <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
              <span class="menu-title">Aide</span>
              <span class="menu-arrow d-lg-none"></span>
            </span>
          </div>
          <!--end:Menu item-->
        </div>
        <!--end::Menu-->
      </div>
      <!--end::Menu wrapper-->
      <!--begin::Navbar-->
      <div class="app-navbar flex-shrink-0">
        <!--begin::Quick links-->

        <!--end::Quick links-->
        <!--begin::Notifications-->

        <!--end::Notifications-->
        <!--begin::New campaign-->
        <!--end::New campaign-->
        <!--begin::User menu-->
        <div class="app-navbar-item" id="kt_header_user_menu_toggle">
          <!--begin::Menu wrapper-->
          <div class="cursor-pointer symbol symbol-35px symbol-lg-50px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="assets/media/avatars/blank.png" alt="user" />
          </div>
          <!--begin::User account menu-->
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
              <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                  <img alt="Logo" src="assets/media/avatars/blank.png" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                  <div class="fw-bold d-flex align-items-center fs-5"> <?=$session->get('prenom')." ".$session->get('nom') ?>
                  <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"><?=$session->get('role')?></span></div>
                  <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?=$session->get('email')?></a>
                </div>
                <!--end::Username-->
              </div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
              <a href="../../demo26/dist/account/overview.html" class="menu-link px-5">Mes infos</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
              <a href="<?=base_url()."Disconnect"?>" class="menu-link px-5">
                <span class="menu-text">Déconnexion</span>
              </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->

          </div>
          <!--end::User account menu-->
          <!--end::Menu wrapper-->
        </div>
        <!--end::User menu-->
        <!--begin::Header menu toggle-->
        <!--end::Header menu toggle-->
      </div>
      <!--end::Navbar-->
    </div>
    <!--end::Header wrapper-->
  </div>
  <!--end::Header container-->
</div>
