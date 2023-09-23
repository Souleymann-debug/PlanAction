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


<head>
	<base href="" />
	<title>APPS - Plan d'action</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	
	
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	
	
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>



<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
	
	<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
	
	
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			
			<?php
				include(APPPATH.'views/navbar.php');
			?>
			
			
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					
					<div class="d-flex flex-column flex-column-fluid">
						
						<div id="kt_app_toolbar" class="bg-danger  app-toolbar w-100">
							
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-column">
								
								<div class="d-flex flex-stack my-10 my-lg-14">
									
									<div class="page-title d-flex flex-column justify-content-center me-3">
										
										<h1 class="text-white page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">
											Ajouter un plan d'action</h1>
										
									</div>
									
								</div>
								
								<div id="kt_app_content" class="app-content">
									
									<div id="kt_app_content_container" class="app-container container-xxl pl-1">
										
										<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
											data-kt-redirect="../../demo26/dist/apps/ecommerce/catalog/products.html"
											action="<?php echo base_url(); ?>/AjouterPlanAction" method="POST">
											
											<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
												
												<div class="tab-content">
													
													<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
														role="tab-panel">
														<div class="d-flex flex-column gap-7 gap-lg-10">
															
															<div class="card card-flush py-4">
																
																<div class="card-header">
																	<div class="card-title">
																		<h2>Informations générales</h2>
																	</div>
																</div>
																
																<div class="card-body pt-0">
																	
																	<div class="mb-10 fv-row">
																		
																		<label class="form-label">Intitulé du plan d'actions</label>
																		
																		<input type="text" name="designation" class="form-control mb-2"/>
																		
																	</div>
											
																	<div class="row">
																		<div class="col-md-6 fv-row ">
																			<label class="fs-6 fw-semibold mb-2">Date</label>
																			
																			<div class="position-relative d-flex align-items-center">
																				
																				<i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																					<span class="path6"></span>
																				</i>
																				
																				
																				<input type="date" class="form-control form-control-solid ps-12" placeholder="Selectionnez une date" name="date" />
																				
																			</div>
																			
																		</div>
																		<div class="col-md-6 fv-row">
																			
																			<label class="form-label">Nombre(s) de jour(s)</label>
																			
																			
																			<input type="number" name="nbjour" class="form-control" min="1" />
																			
																		</div>
																	</div>

																	
																	<div class="row mt-10">
																		<div class="col">
																			
																			<label class="form-label">Nombre de bénéficiaires visés</label>
																			
																			
																			<input type="number" name="nbbeneficiaire" class="form-control mb-2"/>
																			
																		</div>
																		<div class="col">
																			
																			<label class="form-label">Budget visé (€)</label>
																			
																			
																			<input type="number" name="budgetvise" class="form-control mb-2"/>
																			
																		</div>
																	</div>


																	
																	<div class="row mt-10">
																		
																		<label class="form-label">Description</label>
																		
																		
																		<input id="kt_ecommerce_add_product_description"
																			name="description"
																			class="min-h-200px mb-2"></input>
																		
																		
																		<div class="text-muted fs-7">Set a description to the
																			product for better visibility.</div>
																		
																	</div>
																	
																	<div class="row mt-10">
																		<div class="col">
																			
																			<label class="form-label">Pour qui ? (Adultes, enfants...)</label>
																			
																			
																			<input type="text" name="pourqui" class="form-control mb-2"/>
																			
																		</div>
																		<div class="col">
																			
																			<label class="form-label">Lieu (Ville, village, quartier...)</label>
																			
																			
																			<input type="text" name="lieu" class="form-control mb-2"/>
																			
																		</div>
																		<div class="col">
																			<div class="fv-row w-100 flex-md-root">
																			
																			<label class="required form-label">Statut</label>
																			
																			
																			<select class="form-select mb-2" name="statut"
																				data-control="select2" data-hide-search="true"
																				data-placeholder="Sélectionnez un statut" id="options">
																				<option></option>
																				<option value="En attente">En attente</option>
																				<option value="Réalisé">Réalisé</option>
																				<option value="Annulé">Annulé</option>
																			</select>
																			
																		</div>
																	</div>
																	</div>
																	
																</div>
																
															</div>
															
															
															<div class="card card-flush py-4" id="targetElement" style="display: none;">
																
																<div class="card-header">
																	<div class="card-title">
																		<h2>REX du plan d'actions</h2>
																	</div>
																</div>
																
																
																<div class="card-body pt-0">
																	
																	<div class="fv-row mb-10">
																		
																		<label class="form-label">Images du plan d'actions</label>
																		
																		
																		
																		<input type="file" class="form-control" name="image[]" multiple="">
																		
																	</div>
																	


																	<div class="row mt-10">
																		
																		<div class="col fv-row">
																			
																			<label class="form-label">Nombre de bénéficiaires atteints</label>
																			
																			
																			<input type="number" name="nbbeneficiaireatteint" class="form-control mb-2"/>
																			
																		</div>
																		
																		
																		<div class="col fv-row">
																			
																			<label class="form-label">Budget réalisé (€)</label>
																			
																			
																			<input type="number" name="budgetrealise" class="form-control mb-2"/>
																			
																		</div>
																		
																	</div>

																	<div class="row mt-10">
																		
																		<div class="col fv-row">
																			<label class="fs-6 fw-semibold mb-2">Date de la prise des photos</label>
																			
																			<div class="position-relative d-flex align-items-center">
																				
																				<i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																					<span class="path6"></span>
																				</i>
																				
																				
																				<input type="date" class="form-control form-control-solid ps-12" placeholder="Selectionnez une date" name="due_date" />
																				
																			</div>
																			
																		</div>
																		
																		
																		<div class="col fv-row">
																			
																			<label class="form-label">Personne ayant faite les photos</label>
																			
																			
																			<input type="text" name="price" class="form-control mb-2"/>
																			
																		</div>
																		
																	</div>			
																	
																</div>
																
															</div>
															
														</div>
													</div>
													
												</div>
												
												<div class="d-flex justify-content-center mb-10">
													
													<a href="../../demo26/dist/apps/ecommerce/catalog/products.html"
														id="kt_ecommerce_add_product_cancel"
														class="btn btn-light me-5">Annuler</a>
													
													
													<button type="submit" id="kt_ecommerce_add_product_submit"
														class="btn btn-primary">
														<span class="indicator-label">Enregistrer</span>
														<span class="indicator-progress">Veuillez attendre svp...
															<span
																class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													
												</div>
											</div>
											
										</form>
										
									</div>
									
								</div>
								

								
							</div>
							
						</div>
						

					</div>
					
					
					<div id="kt_app_footer" class="app-footer py-2 py-lg-4">
						
						<div
							class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack">
							
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023&copy;</span>
								<a href="https://keenthemes.com" target="_blank"
									class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							
							
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank"
										class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank"
										class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	

	
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-duotone ki-arrow-up">
			<span class="path1"></span>
			<span class="path2"></span>
		</i>
	</div>
	

	
	<script>var hostUrl = "assets/";</script>
	
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	
	
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
	
	
	<script src="assets/js/pages/add-plan/addPlan.js1"></script>
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	
	


	<script>
	$(document).ready(function() {
		$("#options").on("change", function() {
			var selectedValue = $(this).val();
			if (selectedValue === "Réalisé") {
				$("#targetElement").slideToggle();
			} else {
				$("#targetElement").slideUp();
			}
		});
	});
	</script>


	
		<script>var hostUrl = "assets/";</script>
		
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		
		
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		
		
		<script src="assets/js/custom/apps/projects/project/project.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="assets/js/custom/utilities/modals/new-target.js"></script>
		
		
</body>


</html>