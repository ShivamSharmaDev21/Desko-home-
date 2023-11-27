<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <!-- Favicon -->
		<!--<link rel="icon" href="<?php echo e(asset('public/assets/img/favicon.png')); ?>" type="image/x-icon"/>-->
        <!-- Title -->
		<title>Home Desk</title>
        <!-- Bootstrap css-->
		<link href="<?php echo e(asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"/>
        <!-- Icons css-->
		<link href="<?php echo e(asset('public/assets/plugins/web-fonts/icons.css')); ?>" rel="stylesheet"/>
		<link href="<?php echo e(asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('public/assets/plugins/web-fonts/plugin.css')); ?>" rel="stylesheet"/>
        <!-- Style css-->

		<link href="<?php echo e(asset('public/assets/css/style.css')); ?>" rel="stylesheet">

		<link href="<?php echo e(asset('public/assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet">

		<link href="<?php echo e(asset('public/assets/css/bootstrap-select.css')); ?>" rel="stylesheet">
		<!----------------bootstrap 5 newest verison ---------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        
        <style>

 .error {
            color: red;
        }


</style> 

</head>

	<body class="main-body leftmenu">

	<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="<?php echo e(asset('assets/img/loader.svg')); ?>" class="loader-img" alt="Loader">
		</div> -->
        <!-- End Loader -->

		<!-- Page -->
		<!-- <div class="page"> -->

        <!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<!--<div class="sidemenu-logo">-->
				<!--	<a class="main-logo" href="3">-->
				<!--		<img src="<?php echo e(asset('public/assets/img/logo-light.png')); ?>" class="header-brand-img desktop-logo" alt="logo">-->
				<!--		 <img src="<?php echo e(asset('public/assets/img/logohaff.png')); ?>" class="header-brand-img icon-logo"-->
				<!--		 alt="logo" style="width: 48px;">-->
				<!--	</a>-->
				<!--</div>-->
				
			
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(url('/dashboard')); ?>"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="si si-people sidemenu-icon"></i><span class="sidemenu-label">Users</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								 <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('view_users')); ?>">View Users</a>
								   </li>
								  <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('add_user')); ?>">Add User</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="pe-7s-cash sidemenu-icon"></i><span class="sidemenu-label">Smart Features</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								 <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('view_banners')); ?>">View Smart Feature</a>
								   </li>
								  <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('add_smart_feature')); ?>">Add Smart Feature</a>
								</li>
							</ul>
						</li>
							<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="pe-7s-cash sidemenu-icon"></i><span class="sidemenu-label">Manage Colours</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								 <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('view_colours')); ?>">View Colours</a>
								   </li>
								  <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('add_colour')); ?>">Add Colour</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="si si-earphones-alt sidemenu-icon"></i><span class="sidemenu-label">Videos</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								 <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('view_videos')); ?>">View Videos</a>
								   </li>
								  <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('add_video')); ?>">Add Video</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="pe-7s-wallet sidemenu-icon"></i><span class="sidemenu-label">Subjects</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								 <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('view_subjects')); ?>">View Subjects</a>
								   </li>
								  <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('add_subject')); ?>">Add Subject</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-email sidemenu-icon" style="font-size: 16px;"></i><span class="sidemenu-label">Comments</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								 <li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo e(url('view_comments')); ?>">View Comments</a>
								   </li>
								 
							</ul>
						</li>
					
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->
			<!-- Main Header-->
			<div class="main-header side-header sticky">
				<div class="container-fluid">
					<div class="main-header-left">
						<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
					</div>
				    <div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search header-icons"></i>
							</a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									<div class="input-group">
										<div class="input-group-btn search-panel">
											<select class="form-control select2-no-search">
												<option label="All categories">
												</option>
												<option value="IT Projects">
													IT Projects
												</option>
												<option value="Business Case">
													Business Case
												</option>
												<option value="Microsoft Project">
													Microsoft Project
												</option>
												<option value="Risk Management">
													Risk Management
												</option>
												<option value="Team Building">
													Team Building
												</option>
											</select>
										</div>
										<input type="search" class="form-control" placeholder="Search for anything...">
										<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="#">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
					
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="<?php echo e(asset('public/assets/img/profile.jpg')); ?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title"></h6>
									<p class="main-notification-text">Administrator</p>
								</div>
								<a class="dropdown-item border-top" href="<?php echo e(url('/admin_profile')); ?>">
									<i class="fe fe-user"></i> My Profile
								</a>
									<a class="dropdown-item" href="<?php echo e(url('change_password')); ?>">
									<i class="fe fe-unlock"></i> Change Password
								</a>
								<!--<a class="dropdown-item" href="#activity_log.php">
									<i class="fe fe-compass"></i> Activity Logs
								</a>-->
								<a class="dropdown-item" href="<?php echo e(url('/logout_admin')); ?>">
									<i class="fe fe-power"></i> Log Out
								</a>
							</div>
						</div>
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->		<!-- Mobile-header -->
			<div class="mobile-main-header"> 
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto" style="justify-content: flex-end; margin-right: 18px !important;">
							<div class="dropdown header-search">
							<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<div class="input-group">
											<div class="input-group-btn search-panel">
												<select class="form-control select2-no-search">
													<option label="All categories">
													</option>
													<option value="IT Projects">
														IT Projects
													</option>
													<option value="Business Case">
														Business Case
													</option>
													<option value="Microsoft Project">
														Microsoft Project
													</option>
													<option value="Risk Management">
														Risk Management
													</option>
													<option value="Team Building">
														Team Building
													</option>
												</select>
											</div>
											<input type="search" class="form-control" placeholder="Search for anything...">
											<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
										</div>
									</div>
								</div>
							</div>
						<div class="dropdown ">
							<a class="nav-link icon full-screen-link">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="#">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="<?php echo e(asset('public/assets/img/profile.jpg')); ?>"></div>
										<div class="media-body">
											<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="<?php echo e(asset('public/assets/img/profile.jpg')); ?>"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="<?php echo e(asset('public/assets/img/profile.jpg')); ?>"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div>
					<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="<?php echo e(asset('public/assets/img/profile.jpg')); ?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>

								<a class="dropdown-item border-top" href="#">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fe fe-settings"></i> Support
								</a>
								<a class="dropdown-item" href="#">
									<i class="fe fe-compass"></i> Activity
								</a>
								<a class="dropdown-item" href="#">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>

						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header closed -->
	</body>
</html><?php /**PATH /home/cws/public_html/assemble_desk/admin/resources/views/include/header.blade.php ENDPATH**/ ?>