<?php 
$base_url = 'http://localhost/dashboard/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="http://localhost/dashboard/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Lacerda</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/complete.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> 
</head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="header.php" class="logo"> <img src="assets/img/complete.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL </span> </a>
				<a href="header.php" class="logo logo-small"> <img src="assets/img/complete.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							
						</div>
					
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/11.jpg" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="assets/img/11.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>Leonardo Lacerda</h6>
								<p class="text-muted mb-0">Administrador</p>
							</div>
						</div> <a class="dropdown-item" href="profile.html">Meu prefil</a> <a class="dropdown-item" href="settings.html">Account Settings</a> <a class="dropdown-item" href="index.php">Logout</a> </div>
				</li>
			</ul>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active"> <a href="home.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Usuarios </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="user/index.php"> Todos Usuarios  </a></li>
								<li><a href="user/edit.php"> Editar Usuarios </a></li>
								<li><a href="user/add.php"> Add Usuarios</a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Produtos </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="product/index.php">Todos productos </a></li>
								
							</ul>
						</li>
						
						<li class="menu-title mt-3"> <span>EXTRAS</span> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="index.php">Login </a></li>
							
								
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="">Level 1 </a></li>
								<li><a href="">Level 2 </a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
							<h3 class="page-title mt-3">Boa tarde mr.Lacerda!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
	
			</div>
            
		</div>
	</div>
   
	
</body>

</html>