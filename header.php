
<?php
 require 'controller/app.php';
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assetcc/img/favicon.png" type="image/png">
	<title>Satner </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assetcc/css/bootstrap.css">
	<link rel="stylesheet" href="assetcc/vendors/linericon/style.css">
	<link rel="stylesheet" href="assetcc/css/font-awesome.min.css">
	<link rel="stylesheet" href="assetcc/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assetcc/css/magnific-popup.css">
	<link rel="stylesheet" href="assetcc/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="assetcc/css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="assetcc/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
							<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="elements.php">Elements</a></li>
									<li class="nav-item"><a class="nav-link" href="portfolio-details.php">Portfolio Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<?php if ($_GET['success']==true):?>
		
	
	<div class="void">
		<p>	
			???????? ???????????? ?????????????? ??????????????????
		</p>
	</div>
	<?php  endif; ?>
    