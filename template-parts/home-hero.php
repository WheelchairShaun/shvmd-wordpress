<?php
/**
 * Template part for displaying The hero banner content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$hero_logo_image		= get_field( 'hero_logo' );
$hero_headline_1		= get_field( 'hero_headline_1' );
$hero_headline_2		= get_field( 'hero_headline_2' );
$hero_description		= get_field( 'hero_description' );

?>

<!-- Jumbotron -->
<section class="jumbotron" id="hero">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 hero-ad">
				<h1 class="hero-title">
				<?php if( !empty($hero_logo_image) ) : ?>
					<img src="<?php echo $hero_logo_image['url']; ?>" alt="<?php echo $hero_logo_image['alt']; ?>">
				<?php else : ?>
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/signature-black.png" alt="Signature Healthcare of Volusia">
				<?php endif; ?>
				</h1>

				<h2 class="hero-subtitle"><span><?php echo $hero_headline_1; ?></span><?php echo !empty($hero_headline_2) ? ' ' . $hero_headline_2 : ''; ?></h2>
				<p class="hero-text"><?php echo $hero_description; ?></p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 hero-ad">

				<div id="call-now">
					<div class="phone">
						<h4>Call</h4>

						<span class="tel">386-322-5200</span>
						<div class="office-hours">
							<div class="hours-entry"><span class="days">Mon - Thurs</span> <span class="hours">8am - 5pm</span></div>
							<div class="hours-entry"><span class="days">Fri</span> <span class="hours">8am - 12pm</span></div>
						</div><!--/.operations-->
					</div><!--/.phone-->
				</div><!--/.call-now-->

				<p><button class="btn btn-lg btn-danger" data-toggle="modal" data-target="#contactModal">Click here to email us &raquo;</button></p>

			</div><!--/.col-->
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#hero.jumbotron-->
