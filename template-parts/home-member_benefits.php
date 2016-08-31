<?php
/**
 * Template part for displaying the member-benefits section content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$mb_headline				= get_field( 'mb_headline' );
$mb_button_text				= get_field( 'mb_button_text' );
$mb_button_link				= get_field( 'mb_button_link' );

$mb_benefit_1				= get_field( 'mb_benefit_1' );
$mb_benefit_1_icon			= get_field( 'mb_benefit_1_icon' );
$mb_benefit_2				= get_field( 'mb_benefit_2' );
$mb_benefit_2_icon			= get_field( 'mb_benefit_2_icon' );
$mb_benefit_3				= get_field( 'mb_benefit_3' );
$mb_benefit_3_icon			= get_field( 'mb_benefit_3_icon' );
$mb_benefit_4				= get_field( 'mb_benefit_4' );
$mb_benefit_4_icon			= get_field( 'mb_benefit_4_icon' );
$mb_benefit_5				= get_field( 'mb_benefit_5' );
$mb_benefit_5_icon			= get_field( 'mb_benefit_5_icon' );

?>

<!-- Membership Benefits -->
<section id="member-benefits">
	<div class="container">
		
		<div class="section-header">
			<h2><?php echo $mb_headline; ?></h2>
		</div><!--/.section-header -->

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1 benefit">
				<i class="fa <?php echo $mb_benefit_1_icon; ?> fa-2x"></i>
				<h4><?php echo $mb_benefit_1; ?></h4>
			</div><!--/.col-->

			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 benefit">
				<i class="fa <?php echo $mb_benefit_2_icon; ?> fa-2x"></i>
				<h4><?php echo $mb_benefit_2; ?></h4>
			</div><!--/.col-->

			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 benefit">
				<i class="fa <?php echo $mb_benefit_3_icon; ?> fa-2x"></i>
				<h4><?php echo $mb_benefit_3; ?></h4>
			</div><!--/.col-->

			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 benefit">
				<i class="fa <?php echo $mb_benefit_4_icon; ?> fa-2x"></i>
				<h4><?php echo $mb_benefit_4; ?></h4>
			</div><!--/.col-->

			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 benefit">
				<i class="fa <?php echo $mb_benefit_5_icon; ?> fa-2x"></i>
				<h4><?php echo $mb_benefit_5; ?></h4>
			</div><!--/.col-->
			
		</div><!--/.row-->

		<p><a class="btn btn-lg btn-info" href="<?php echo $mb_button_link; ?>"><?php echo $mb_button_text; ?> &raquo;</a></p>

	</div><!--/.container -->
</section><!--/#member-benefits-->
