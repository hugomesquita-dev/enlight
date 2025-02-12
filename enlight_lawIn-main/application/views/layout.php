<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- Site Metas -->
	<title>Enlight</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Site Icons -->
	<link rel="icon" href="<?= base_url('assets/images/logo-splash.svg') ?>" type="image/svg" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
	<!-- Site CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>" />
	<!-- Colors CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/colors.css') ?>" />
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
	<!-- Wow Animation CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>" />

	
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

	<!-- jQuery (necessary for Bootstrap's JavaScript) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="default_theme" class="light_blue home_page_2"> 
	<!-- header -->
	<header id="default_header" class="header_style_2">
		<!-- header top -->
		<div class="header_top light_silver_2" style="background: #FFFFFF !important;">
			<div class="container">
				<div class="full">
					<div class="row">
						<div class="col-md-2 col-xs-12">
							<ul class="top_information pull-left">
								<img style="width:100%" src="<?= base_url('assets/images/logo.png') ?>" alt="Enlight" />
							</ul>
						</div>
						<div class="col-md-8 col-xs-12"></div>
						<div class="col-md-2 col-xs-12 hidden-xs" style="padding-top:15px; text-align:right">
							<a href="<?=base_url('/painel/login')?>" class="text-gray btn-login-home">
								<i class="fa fa-lock text-gray" aria-hidden="true"></i>
								Login
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header top end -->
		<!-- header bottom -->
		<div class="header_bottom">

			<div class="main_bg">
				<div class="container">
					<!-- menu start -->
					<div class="menu_side">
						<div id="navbar_menu">
							<ul class="first-ul">
								<li><a href="<?= base_url() ?>">HOME</a></li>
								<li><a href="<?= base_url('glossario') ?>">GLOSSÁRIO</a></li>
								<li><a href="<?= base_url('publicacao') ?>">PUBLICAÇÕES</a></li>
								<li><a href="<?= base_url('legislacao') ?>">LEGISLAÇÃO</a></li>
								<li><a href="<?= base_url('obrigacao') ?>">OBRIGAÇÕES</a></li>
							</ul>
						</div>
						<div style="margin-top: 10px; text-align: right;">
							<img src="<?= base_url('assets/images/Lawin.png') ?>" alt="Lawin" />
						</div>
					</div>
					<!-- menu end -->
				</div>
			</div>
		</div>
		<!-- header bottom end -->
	</header>
	<!-- end header --> 
	
	  <?=$contents?>

	<!-- start footer -->
	<footer class="footer_style_2">
		<div class="container wow fadeIn" data-wow-duration="2s">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 footer_top">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer_logo pull-left">
								<img style="width:90%" src="<?= base_url('assets/images/logo.png') ?>" alt="Enlight" />
							</div>
						</div>
						<div class="col-md-6 hidden-sm hidden-xs">
							<div class="center">
								<ul class="footer_menu">
									<li><a href="<?= base_url() ?>">HOME</a></li>
									<li><a href="<?= base_url('glossario') ?>">GLOSSÁRIO</a></li>
									<li><a href="<?= base_url('publicacao') ?>">PUBLICAÇÕES</a></li>
									<li><a href="<?= base_url('legislacao') ?>">LEGISLAÇÃO</a></li>
									<li><a href="<?= base_url('obrigacao') ?>">OBRIGAÇÕES</a></li>
								</ul>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	<!-- bottom footer -->
	<div class="bottom_footer bottom_footer_style_2 ">
		<div class="container wow fadeIn" data-wow-duration="2s">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="bottom_menu">
						<ul>
							<li><a href="#">Termos & Condições</a></li>
							<li><a href="#">Politica de Privacidade</a></li>
							<li><a href="#">Cookies</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="cpy text_align_right">
						<p>Copyright © 2023 Enlight</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end bottom footer --> 
	
	<!-- Menu JS -->
	<script src="<?= base_url('assets/js/menumaker.js') ?>"></script>
	<!-- Wow Animation -->
	<script src="<?= base_url('assets/js/wow.js') ?>"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript) -->
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up text-gray" aria-hidden="true"></i> Topo</button>
<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
</script>
</body>

</html>