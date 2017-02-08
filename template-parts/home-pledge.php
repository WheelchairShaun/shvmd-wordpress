<?php
/**
 * Template part for displaying the better-healthcare "Signature Pledge" section content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$pledge_headline				= get_field( 'pledge_headline' );
$pledge_content					= get_field( 'pledge_content' );

?>

<!-- Better Healthcare -->
<section id="better-healthcare">
	<div class="container better-healthcare-content">

		<div class="section-header">
			<h2><?php echo $pledge_headline; ?></h2>
		</div><!--/.section-header-->

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

				<?php echo $pledge_content; ?>
				
			</div><!--/.col-->
		</div><!--/.row-->
		
	</div><!--/.container-->
</section><!--/#better-healthcare-->
