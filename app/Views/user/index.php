<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter4 Training</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="<?= base_url('assets/css/vendor.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/app.min.css') ?>" rel="stylesheet">
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="<?= base_url('assets/plugins/jvectormap-next/jquery-jvectormap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
	<!-- ================== END page-css ================== -->

</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		<div id="header" class="app-header" >
			<!-- BEGIN desktop-toggler -->
			<div class="desktop-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END desktop-toggler -->
			
			<!-- BEGIN mobile-toggler -->
			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END mobile-toggler -->
				
			<!-- BEGIN brand -->
			<div class="brand">
				<a href="#" class="brand-logo">
					CI4 Training
				</a>
			</div>
			<!-- END brand -->
			
			<!-- BEGIN menu -->
			<div class="menu">
				<div class="menu-item dropdown">
					<a href="index.html" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
						<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
					</a>
				</div>
				
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
						<div class="menu-badge bg-theme"></div>
					</a>
					<div class="dropdown-menu dropdown-menu-end mt-1 w-350px pt-1">
						<h6 class="dropdown-header mb-1">Notifications (5)</h6>
						<div class="dropdown-divider mt-1"></div>
						<a href="#" class="d-flex align-items-center dropdown-item text-wrap">
							<div class="fs-20px bg-primary bg-opacity-15 w-40px h-40px rounded-pill d-flex align-items-center justify-content-center">
								<i class="fa fa-box fa-lg text-primary"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div>New order received ($1,299)</div>
								<div class="small text-body text-opacity-50">just now</div>
							</div>
							<div class="ps-2 text-body text-opacity-25">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center dropdown-item text-wrap">
							<div class="fs-20px bg-body w-40px h-40px rounded-pill d-flex align-items-center justify-content-center">
								<i class="fa fa-user text-body text-opacity-50"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div>3 new account created</div>
								<div class="small text-body text-opacity-50">2 minutes ago</div>
							</div>
							<div class="ps-2 text-body text-opacity-25">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center dropdown-item text-wrap">
							<div class="fs-20px bg-primary bg-opacity-15 w-40px h-40px rounded-pill d-flex align-items-center justify-content-center">
								<i class="fa fa-server text-primary"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div>Setup completed</div>
								<div class="small text-body text-opacity-50">3 minutes ago</div>
							</div>
							<div class="ps-2 text-body text-opacity-25">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center dropdown-item text-wrap">
							<div class="fs-20px bg-primary bg-opacity-15 w-40px h-40px rounded-pill d-flex align-items-center justify-content-center">
								<i class="fa fa-screwdriver-wrench text-primary"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div>Widget installation done</div>
								<div class="small text-body text-opacity-50">5 minutes ago</div>
							</div>
							<div class="ps-2 text-body text-opacity-25">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center dropdown-item text-wrap">
							<div class="fs-20px bg-primary bg-opacity-15 w-40px h-40px rounded-pill d-flex align-items-center justify-content-center">
								<i class="fa fa-file-invoice text-primary"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div>Payment method enabled</div>
								<div class="small text-body text-opacity-50">10 minutes ago</div>
							</div>
							<div class="ps-2 text-body text-opacity-25">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<div class="text-center">
							<a href="#" class="text-decoration-none fw-bold">see all</a>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-img online">
							<span class="menu-img-bg" style="background-image: url(<?= base_url('assets/img/user/user.jpg') ?>)"></span>
						</div>
						<div class="menu-text d d-none">username@account.com</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-lg-3 mt-1 w-200px">
						<a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="far fa-user fa-fw fa-lg me-3"></i> Profile</a>
						<a class="dropdown-item d-flex align-items-center" href="email_inbox.html"><i class="far fa-envelope fa-fw fa-lg me-3"></i> Inbox</a>
						<a class="dropdown-item d-flex align-items-center" href="calendar.html"><i class="far fa-calendar fa-fw fa-lg me-3"></i> Calendar</a>
						<a class="dropdown-item d-flex align-items-center" href="settings.html"><i class="fa fa-sliders fa-fw fa-lg me-3"></i> Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="page_login.html"><i class="fa fa-arrow-right-from-bracket fa-fw fa-lg me-3"></i> Logout</a>
					</div>
				</div>
			</div>
			<!-- END menu -->
			
			<!-- BEGIN menu-search -->
			<form class="menu-search" method="POST" name="header_search_form">
				<div class="menu-search-container">
					<div class="menu-search-icon"><i class="bi bi-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control form-control-lg" placeholder="Search menu...">
					</div>
					<div class="menu-search-icon">
						<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</form>
			<!-- END menu-search -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-bs-toggle="dropdown">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<div class="menu-profile-img" style="background-image: url(<?= base_url('assets/img/user/user.jpg') ?>)"></div>
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1 fw-bold">
										Administrator
									</div>
									<div class="ms-auto"><i class="fa fa-chevron-down"></i></div>
								</div>
								<small>username@account.com</small>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end me-lg-3 mt-1 w-200px">
							<a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="far fa-user fa-fw fa-lg me-3"></i> Profile</a>
							<a class="dropdown-item d-flex align-items-center" href="email_inbox.html"><i class="far fa-envelope fa-fw fa-lg me-3"></i> Inbox</a>
							<a class="dropdown-item d-flex align-items-center" href="calendar.html"><i class="far fa-calendar fa-fw fa-lg me-3"></i> Calendar</a>
							<a class="dropdown-item d-flex align-items-center" href="settings.html"><i class="fa fa-sliders fa-fw fa-lg me-3"></i> Settings</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item d-flex align-items-center" href="page_login.html"><i class="fa fa-arrow-right-from-bracket fa-fw fa-lg me-3"></i> Logout</a>
						</div>
					</div>
					<div class="menu-header">Navigation</div>
		
					<div class="menu-item active">
						<a href="#" class="menu-link">
							<span class="menu-icon"><i class="fas fa-lg fa-fw me-2 fa-users"></i></span>
							<span class="menu-text">Users</span>
						</a>
					</div>	
					
				</div>
				<!-- END menu -->
				<div class="p-3 mt-auto">
					<a href="https://seantheme.com/droplet/documentation/index.html" target="_blank" class="btn d-block btn-theme fs-13px fw-semibold rounded-pill">
						<i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Documentation
					</a>
				</div>
			</div>
			<!-- END scrollbar -->
		</div>
		<!-- END #sidebar -->
			
		<!-- BEGIN mobile-sidebar-backdrop -->
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		<!-- END mobile-sidebar-backdrop -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="d-lg-flex align-items-end mb-4">
				<h3 class="page-header mb-lg-0">
					User Management Dashboard
					<small class="d-block fs-12px mt-1">View all registered users, edit user details, and delete user accounts as needed.</small>
				</h3>
				
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table table-hover mb-0">
						<thead>
							<tr>
								<th scope="col">User ID</th>
								<th scope="col">Last Name</th>
								<th scope="col">First Name</th>
								<th scope="col">Username</th>
								<th scope="col">Date Registered</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">Cell 1</th>
								<td>Cell 2</td>
								<td>Cell 3</td>
								<td>Cell 4</td>
								<td>Cell 5</td>
								<td>
									<a href="#" class="btn btn-outline-warning mb-1">Edit</a>
									<a href="#" class="btn btn-outline-danger mb-1">Delete</a>
								</td>
							</tr>
				
							
						</tbody>
					</table>
					<br>
					<a href="#" class="btn btn-outline-primary mb-1">Add User</a>
				</div>
				<div class="hljs-container rounded-bottom">
					<pre><code class="xml hljs language-xml" data-url="<?= base_url('assets/data/table-elements/code-6.json') ?>" data-highlighted="yes"></code></pre>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		<!-- BEGIN theme-panel -->
		<div class="app-theme-panel">
			<div class="app-theme-panel-container">
				<a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
				<div class="app-theme-panel-content">
					<div class="fw-bold text-body mb-2">
						Theme Color
					</div>
					<div class="app-theme-list">
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="theme-teal" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info"  data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan"></a></div>
						<div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class=""  data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo"></a></div>
						<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-200" data-theme-class="theme-gray-500" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray"></a></div>
					</div>
					<hr class="opacity-1">
					<div class="row mt-10px">
						<div class="col-8">
							<div class="fw-bold text-body d-flex mb-1 align-items-center">
								Dark Mode 
								<i class="bi bi-moon-fill ms-2 my-n1 fs-5 text-body text-opacity-25"></i>
							</div>
							<div class="lh-sm">
								<small class="text-body opacity-50">Adjust the appearance to reduce glare and give your eyes a break.</small>
							</div>
						</div>
						<div class="col-4 d-flex">
							<div class="form-check form-switch ms-auto mb-0">
								<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" data-toggle="theme-dark-mode" id="appThemeDarkMode" value="1">
								<label class="form-check-label" for="appThemeDarkMode"></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="<?= base_url('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/jvectormap-content/world-mill.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/apexcharts/dist/apexcharts.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/moment/min/moment.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
	<script src="<?= base_url('assets/js/demo/dashboard.demo.js') ?>"></script>
	<!-- ================== END page-js ================== -->
	
</body>
</html>
