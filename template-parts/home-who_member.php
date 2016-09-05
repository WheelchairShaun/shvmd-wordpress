<?php
/**
 * Template part for displaying the who-member section content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$wm_headline			= get_field( 'wm_headline' );
$wm_content				= get_field( 'wm_content' );

?>

<!-- Who Member -->
<section id="who-member">
	<div class="container who-member-content">
		
		<div class="section-header">
			<h2><?php echo $wm_headline; ?></h2>
		</div><!--/.section-header-->

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

				<?php echo $wm_content; ?>
				
			</div><!--/.col-->
		</div><!--/.row-->

	</div><!--/.container-->
</section><!--/#who-member-->
