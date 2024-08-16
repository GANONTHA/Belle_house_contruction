<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Avatars - Kaiadmin Bootstrap 5 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Public Sans:300,400,500,600,700"]},
			custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/plugins.min.css">
	<link rel="stylesheet" href="../assets/css/kaiadmin.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
		@include('partials.admin.sidebar')
        <div class="main-panel">
			@include('partials.admin.mainheader')
			
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h3 class="fw-bold mb-3">Avatars</h3>
						<ul class="breadcrumbs mb-3">
							<li class="nav-home">
								<a href="#">
									<i class="icon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="icon-arrow-right"></i>
							</li>
							<li class="nav-item">
								<a href="#">Base</a>
							</li>
							<li class="separator">
								<i class="icon-arrow-right"></i>
							</li>
							<li class="nav-item">
								<a href="#">Avatars</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Sizing</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar avatar-xxl">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-xl">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-lg">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-sm">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-xs">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Status Indicator</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar avatar-online">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-offline">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-away">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Shape</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded">
										</div>

										<div class="avatar">
											<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Group</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar-group">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<span class="avatar-title rounded-circle border border-white">CF</span>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@include('partials.admin.footer')
	    </div>
</div>
    
    @yield('adminmain')
</body>
</html>