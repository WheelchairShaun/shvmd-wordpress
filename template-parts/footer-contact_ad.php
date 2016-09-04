<?php
/**
 * Template part for displaying the footer contact add section content in footer.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$footer_contact_headline			= get_field( 'footer_contact_headline', 7 );
$footer_contact_button_text			= get_field( 'footer_contact_button_text', 7 );

?>

<!-- Sign-up  -->
<section id="sign-up">
	<div id="sign-up-overlay">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
					<h2><?php echo $footer_contact_headline; ?></h2>
					<p><button class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#contactModal"><?php echo $footer_contact_button_text; ?></button></p>
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.container-->
	</div>
</section><!--/#sign-up-->
