<?php
/**
 * Template part for displaying the doctor section content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$dr_full_name			= get_field( 'dr_full_name' );
$dr_postnominal			= get_field( 'dr_postnominal_letters' );
$dr_introduction		= get_field( 'dr_introduction' );
$dr_content				= get_field( 'dr_content' );

?>

<!-- Doctor  -->
<section id="doctor">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-6">
				<div class="doctor-overlay">

					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $dr_full_name; ?> <small><?php echo $dr_postnominal; ?></small></h2>
						</div><!--/.col-lg-->
					</div><!--/.row-->

					<p class="lead"><?php echo $dr_introduction; ?></p>

					<?php echo $dr_content; ?>

				</div><!--/.doctor-overlay-->
			</div><!--/.col-->
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#doctor-->
