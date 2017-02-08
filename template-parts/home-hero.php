<?php
/**
 * Template part for displaying the hero banner content in page-home.php.
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

$hero_phone				= get_field( 'ci_telephone_voice' );
$hero_days_1			= get_field( 'ci_office_days_1' );
$hero_hours_1			= get_field( 'ci_office_hours_1' );
$hero_days_2			= get_field( 'ci_office_days_2' );
$hero_hours_2			= get_field( 'ci_office_hours_2' );

?>

<!-- Jumbotron -->
<section class="jumbotron" id="hero">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 hero-ad">
				<h1 class="hero-title">
				<?php if( !empty($hero_logo_image) ) : ?>
					<img src="<?php echo $hero_logo_image['url']; ?>" alt="<?php echo $hero_logo_image['alt']; ?>">
				<?php else : ?>
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/signature-black.png" alt="Signature Healthcare of Volusia">
				<?php endif; ?>
				</h1>

				<h2 class="hero-subtitle"><span><?php echo $hero_headline_1; ?></span><?php echo !empty($hero_headline_2) ? ' ' . $hero_headline_2 : ''; ?></h2>
				<?php echo !empty($hero_description) ? '<p class="hero-text">' . $hero_description . '</p>' : ''; ?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 hero-ad">

				<div id="call-now">
					<div class="phone">
						<h4>Call</h4>

						<span class="tel"><?php echo $hero_phone; ?></span>
						<div class="office-hours">
							<div class="hours-entry"><span class="days"><?php echo $hero_days_1; ?></span> <span class="hours"><?php echo $hero_hours_1; ?></span></div>
							<?php if( !empty($hero_days_2) ) : ?>
							<div class="hours-entry"><span class="days"><?php echo $hero_days_2; ?></span> <span class="hours"><?php echo $hero_hours_2; ?></span></div>
							<?php endif; ?>
						</div><!--/.operations-->
					</div><!--/.phone-->
				</div><!--/.call-now-->

				<p><button class="btn btn-lg btn-danger" data-toggle="modal" data-target="#contactModal">Click here to email us &raquo;</button></p>

			</div><!--/.col-->
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#hero.jumbotron-->
