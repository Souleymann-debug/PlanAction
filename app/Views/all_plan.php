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
		<base href="<?=base_url()?>"/>
		<title>APPS - Plan d'action</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="fr_FR" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		
		
		<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		
		
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	
	
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
		
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		
		
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<?php
					include(APPPATH.'views/navbar.php');
				?>
				
				
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						
						<div class="d-flex flex-column flex-column-fluid">
							
							<div id="kt_app_toolbar" class="bg-danger app-toolbar w-100">
								
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-column">
									
									<div class="d-flex flex-stack my-10 my-lg-14">
										
										<div class="page-title d-flex flex-column justify-content-center me-3">
											
											<h1 class="text-white page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">Mes plans d'actions</h1>
											
										</div>
										
									</div>
									
									
									<div id="kt_app_content" class="mb-10 app-content pt-10">
										
										<div id="kt_app_content_container" class="app-container container-xxl">
											
											<div class="card card-flush">
												
												<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											
											<div class="card-title">
												
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
												</div>
												
											</div>
											
											
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<div class="w-100 mw-150px">
													
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="published">Published</option>
														<option value="scheduled">Scheduled</option>
														<option value="inactive">Inactive</option>
													</select>
													
												</div>
												
												<a href="<?=base_url()."AjouterPlanAction" ?>" class="btn btn-primary">Ajouter un plan d'actions</a>
												
											</div>
											
										</div>
												
												
												<div class="card-body pt-0">
													
													<table class="table align-middle table-row-dashed fs-6 gy-5" id="plan_list_table">
														<thead>
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">																
																<th class="min-w-200px">Intitulé du plan d'actions</th>
																<th class="min-w-100px">Date</th>
																<th class="min-w-100px">Nombre de jours</th>
																<th class="min-w-100px">Lieu</th>
																<th class="min-w-100px">Budget visé</th>
																<th class="min-w-100px">Status</th>
																<th class="min-w-100px">Actions</th>
															</tr>
														</thead>
														<tbody class="fw-semibold text-gray-600">

															<?php
																foreach ($plans as $row) : ?>
																	<tr>																																				
																		<td class="pe-0">
																			<span class="fw-bold"><?=$row->designation?></span>
																		</td>
																		<td class="pe-0"><?=$row->date ?></td>
																		<td class="pe-0"><?=$row->nbjour ?></td>
																		<td class="pe-0"><?=$row->lieu ?></td>
																		<td class="pe-0"><?=$row->budgetvise ?></td>
																		<td class="pe-0">
																			<?php
																				if ($row->statut == "Réalisé") {																																										
																					echo html_entity_decode('<div class="badge badge-light-success">Réalisé</div>');																					
																				}else {
																					if ($row->statut == "En attente") {																																												
																						echo html_entity_decode('<div class="badge badge-light-info">En attente</div>');																						
																					}else {																																											
																						echo html_entity_decode('<div class="badge badge-light-danger">Annulé</div>');																						
																					}
																				}
																			?>																			
																		</td>
																		<td class="">
																			<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				
																				<div class="menu-item px-3">
																					<a href="<?=base_url()."PlanDetail?id=".$row->id?>" class="menu-link px-3">Voir</a>
																				</div>
																				
																				
																				<div class="menu-item px-3">
																					<a href="<?=base_url()."ModifierPlanAction?id=".$row->id?>" class="menu-link px-3">Modifier</a>
																				</div>
																				
																				
																				<div class="menu-item px-3">
																					<a href="<?=base_url()."SupprimerPlanAction?id=".$row->id?>" class="menu-link px-3">Supprimer</a>
																				</div>
																				
																			</div>
																			
																		</td>
																		
																	</tr>
																	<?php
																endforeach;
															?>

														</tbody>
													</table>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
									
								</div>
								
							</div>
							

						</div>
						
						
						<div id="kt_app_footer" class="app-footer py-2 py-lg-4">
							
							<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack">
								
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								
								
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
		
		
		<script src="assets/js/pages/plan-list/planList.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		
		
	</body>
	
</html>