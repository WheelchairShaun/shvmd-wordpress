<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$seo_description	= get_field( 'seo_description', 7 );
$seo_keywords		= get_field( 'seo_keywords', 7 );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="description" content="<?php echo $seo_description; ?>">
	<meta name="keywords" content="<?php echo $seo_keywords; ?>">

	<!-- Bootstrap -->
	<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Neuton:300,400,700|Open+Sans:400,700" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/html5shiv-3.7.2.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/respond-1.4.2.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shvmd' ); ?></a>

	<header class="site-header" role="banner">
		<!-- Navbar -->
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/signature-logo-black.png" alt="Signature Healthcare of Volusia"></a>
				</div><!--/.navbar-header-->

				<!-- Nav links collection that will be collapsed -->
				<?php
					// If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4

					wp_nav_menu(
						array(

							'theme_location'	=> 'primary',
							'container'			=> 'div',
							'container_class'	=> 'collapse navbar-collapse',
							'container_id'		=> 'shvmd-menu',
							'menu_class'		=> 'nav navbar-nav',

						)
					);
				?>

			</div><!--/.container-->
		</nav><!--/.navbar-->
	</header>
