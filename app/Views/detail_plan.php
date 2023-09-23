<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="fr">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>APPS - Plan d'action</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>



		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<?php
					include(APPPATH.'views/navbar.php');
				?>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="bg-danger app-toolbar w-100">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-column">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack my-10 my-lg-14">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center me-3">
											<!--begin::Title-->
											<h1 class="text-white page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">Détail de mon plan d'actions</h1>
											<!--end::Title-->
										</div>
										<!--end::Page title-->
									</div>
									<!--end::Wrapper-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content pt-10">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<?php
										if ($plandetail["statut"]=="Réalisé") {
									?>
										<div class="row justify-content-center">
											<div id="carouselExample" class="carousel slide m-5 row justify-content-center" style="height:500px">
												<div class="carousel-inner justify-content-center">
													<?php
														foreach ($images as $key => $image) {
															// var_dump($image->chemin);										
															?>
															<div class="carousel-item row justify-content-center
															<?php
																if ($key === 0) {
																	echo " active";
																}
															?>
															">
															<img src="<?=base_url()."/uploads/".$image['chemin']?>" class="" style="height:500px;width:auto" alt="...">
															</div>
															<?php
														}
													?> 
												</div>
												<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Précédent</span>
												</button>
												<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Suivant</span>
												</button>
											</div>
										</div>
									<?php
										} 
									?>										
									<!--begin::Navbar-->
									<div class="card mb-6 mb-xl-9">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
												<!--begin::Wrapper-->
												<div class="flex-grow-1">
													<!--begin::Head-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::Details-->
														<div class="d-flex flex-column">
															<!--begin::Status-->
															<div class="d-flex align-items-center mb-1">
																<h3 class="fs-2 fw-bold me-3"><?=$plandetail["designation"]?></h3>
																<?php
																if ($plandetail["statut"] == "Réalisé") {
																	?>
																	<span class="badge badge-success me-auto">Réalisé</span>
																	<?php
																} else {
																	if ($plandetail["statut"] == "En attente") {
																		?>
																		<span class="badge badge-info me-auto">En attente</span>
																		<?php
																	} else {
																		?>
																		<span class="badge badge-danger me-auto">Annulé</span>
																		<?php
																	}
																}
																?>
																</div>
															<!--end::Status-->
															<!--begin::Description-->
															<div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400"><?=$plandetail["description"]?></div>
															<!--end::Description-->
														</div>
														<!--end::Details-->
														<!--begin::Actions-->
														<div class="d-flex mb-4">
															<a href="<?=base_url()."SupprimerPlanAction?id=".$plandetail["id"]?>" class="btn btn-sm btn-bg-light btn-active-color-primary me-3">Supprimer</a>
															<a href="<?=base_url()."ModifierPlanAction?id=".$plandetail["id"]?>" class="btn btn-sm btn-primary me-3">Modifier</a>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Head-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap justify-content-start">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<div class="fs-4 fw-bold"><?=$plandetail["date"]?></div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Pendant <?=$plandetail["nbjour"]?> jour(s)</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone fs-3 text-danger me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="<?=$plandetail["budgetvise"]?>" data-kt-countup-prefix="€">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Budget visé</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone fs-3 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="<?=$plandetail["budgetrealise"]?>" data-kt-countup-prefix="€">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Budget réalisé</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone fs-3 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="<?=$plandetail["nbbeneficiaire"]?>">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Bénéficiaire visé</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone fs-3 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="<?=$plandetail["nbbeneficaireatteint"]?>">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-400">Bénéficiaires atteints</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Details-->
										</div>
									</div>
									<!--end::Navbar-->

									<div class="row">
										<div class="col">
										<!--begin::Navbar-->
										<div class="card mb-6 mb-xl-9">
											<div class="card-body pt-9 pb-0">
												<!--begin::Details-->
												<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
													<!--begin::Wrapper-->
													<div class="flex-grow-1">
														<!--begin::Head-->
														<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
															<!--begin::Details-->
															<div class="d-flex flex-column">														
																<!--begin::Title-->
																<div class="">
																	<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Lieu</a>
																</div>
																<!--end::Title-->
																<!--begin::Content-->
																<div class="fs-6 fw-semibold text-gray-600 mb-5"><?=$plandetail["lieu"]?></div>
																<!--end::Content-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Head-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Details-->
											</div>
										</div>
										<!--end::Navbar-->
										</div>
										
										<div class="col">
										<!--begin::Navbar-->
										<div class="card mb-6 mb-xl-9">
											<div class="card-body pt-9 pb-0">
												<!--begin::Details-->
												<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
													<!--begin::Wrapper-->
													<div class="flex-grow-1">
														<!--begin::Head-->
														<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
															<!--begin::Details-->
															<div class="d-flex flex-column">														
																<!--begin::Title-->
																<div class="">
																	<a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Pour qui ?</a>
																</div>
																<!--end::Title-->
																<!--begin::Content-->
																<div class="fs-6 fw-semibold text-gray-600 mb-5"><?=$plandetail["pourqui"]?></div>
																<!--end::Content-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Head-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Details-->
											</div>
										</div>
										<!--end::Navbar-->
										</div>
									</div>




								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
									</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->

							
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer py-2 py-lg-4">
							<!--begin::Footer container-->
							<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/projects/project/project.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="assets/js/custom/utilities/modals/new-target.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>