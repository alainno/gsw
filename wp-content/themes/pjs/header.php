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
	<title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?>		
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="envoltura">
		<header class="header">
			<div class="arriba">
				<div class="left">
					<div class="logo-container"><a href="./" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="LOGO"></a></div>
				</div>
				<div class="right">
					<div class="clearfix">
						<ul class="lh right mt20">
							<li><a href="#">English</a></li>
							<li>|</li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</div>
					<ul class="lh mt5">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Youtube</a></li>
					</ul>
				</div>
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
					,'menu_class' => 'left'
					,'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="'.(is_home()?'current-menu-item':'').'"><a href="' . home_url('/') . '">Inicio</a></li>%3$s</ul>'
					,'link_after' => ' <span class="caret"></span>'
				) );
				?>
				<form action="" class="right">
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
						
				</form>
			</nav>

		</header>
		<div class="cuerpo">