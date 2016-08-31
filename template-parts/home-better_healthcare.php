<?php
/**
 * Template part for displaying the better-healthcare section content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$bh_headline				= get_field( 'bh_headline' );
$bh_introduction			= get_field( 'bh_introduction' );
$bh_reason_1_headline		= get_field( 'bh_reason_1_headline' );
$bh_reason_1_paragraph		= get_field( 'bh_reason_1_paragraph' );
$bh_reason_2_headline		= get_field( 'bh_reason_2_headline' );
$bh_reason_2_paragraph		= get_field( 'bh_reason_2_paragraph' );

?>

<!-- Better Healthcare -->
<section id="better-healthcare">
	<div class="container">

		<div class="section-header">
			<h2><?php echo $bh_headline; ?></h2>
		</div><!--/.section-header-->

		<p class="lead"><?php echo $bh_introduction; ?></p>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-6 col-lg-6">
				<h3><?php echo $bh_reason_1_headline; ?></h3>
				<p><?php echo $bh_reason_1_paragraph; ?></p>
			</div><!--/.col-->

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-6 col-lg-6">
				<h3><?php echo $bh_reason_2_headline; ?></h3>
				<p><?php echo $bh_reason_2_paragraph; ?></p>
			</div><!--/.col-->
		</div><!--/.row-->
		
	</div><!--/.container-->
</section><!--/#better-healthcare-->
