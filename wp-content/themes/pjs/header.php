<!DOCTYPE html>
<!--if lt IE 7html.no-js.lt-ie9.lt-ie8.lt-ie7
-->
<!--if IE 7html.no-js.lt-ie9.lt-ie8
-->
<!--if IE 8html.no-js.lt-ie9
-->
<!-- [if gt IE 8] <!-->
<html class="no-js">
<!-- <![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="envoltura">
		<header class="header">
			<div class="arriba">
				<div class="logo-container"><a href="./" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="LOGO"></a></div>
			</div>
			<nav class="menu">
				<!--
				<ul>
					<li><a href="./">Inicio</a></li>
					<li><a href="#">Quienes Somos</a></li>
					<li class="submenu">
						<a href="#">Categorías <span class="glyphicon glyphicon-chevron-down"></span></a>
						<ul>
							<li><a href="#">Categoría A</a></li>
							<li><a href="#">Categoría B</a></li>
							<li><a href="#">Categoría C</a></li>
						</ul>
					</li>
					<li><a href="#">Contáctenos</a></li>
				</ul>
-->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu' 
					,'container' => false
					,'items_wrap' => '<ul id="%1$s" class="%2$s"><li><a href="' . home_url('/') . '">Inicio</a></li>%3$s</ul>'
					,'link_after' => ' <span class="glyphicon glyphicon-chevron-down"></span>'
				) );
				?>	

			</nav>

		</header>
		<div class="cuerpo">