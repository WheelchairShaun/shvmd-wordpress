<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Signature_Healthcare_of_Volusia
 */

get_header(); ?>

<!-- Feature image -->
<section class="page-title">
	<h1 class="entry-title"><span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'shvmd' ); ?></span></h1>
</section>

<!-- Main content -->
<main id="main" role="main">
	<section id="content" class="error-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'shvmd' ); ?></p>

						<nav>
							<p><a href="<?php echo home_url( '/'); ?>">Visit our home page.</a></p>
							<p><a href="<?php echo home_url( '/#doctor'); ?>">Learn about Dr. Mercer.</a></p>
							<p><a href="<?php echo home_url( '/services'); ?>">View our benefits and services.</a></p>
							<p><a href="<?php echo home_url( '/faq'); ?>">See our most often answered questions.</a></p>
							<p><a href="<?php echo home_url( '/new-patient-forms'); ?>">Download forms for new patients.</a></p>
						</nav>

					</div><!-- .page-content -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();
