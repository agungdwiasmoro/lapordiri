<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
	<title>Lapor Diri PPG | Universitas Muhammadiyah Purworejo</title>
	<link href="../static/css/app.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Lapor Diri PPG</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						MENU
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="main.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="lapor_diri.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Lapor Diri Peserta</span>
            </a>
					</li>

					<li class="sidebar-header">
						Informasi PPL
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ppl.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Verivikasi Data PPL</span>
            </a>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="koordinator.php">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Koordinator Sekolah</span>
            </a>
					</li> -->

					<li class="sidebar-header">
						Aksi
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="../logout.php">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log Out</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
    <?php 
    session_start();
  
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      header("location:index.php?pesan=gagal");
    }
  
    ?>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <span class="text-dark"><?php echo $_SESSION['no_ukg']; ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="../logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
