<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Signature_Healthcare_of_Volusia
 */

// Advanced Custom Fields
$cfm_form_shortcode = get_field( 'cfm_form_shortcode', 7 );

?>

<?php get_template_part( 'template-parts/footer', 'contact_ad' ); ?>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
					<p class="text-center"><img src="<?php bloginfo( 'template_directory' ); ?>/img/signature-white.png" alt="Signature Healthcare of Volusia"></p>
				</div><!--/.col-->

			</div><!--/.row-->

			<div class="row">
				<div class="col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
					<?php

						wp_nav_menu(
							array(

								'theme_location'	=> 'footer',
								'container'			=> 'nav',
								'items_wrap'		=> '<ul class="list-unstyled">%3$s</ul>',

							)
						);

					?>

				</div><!--/.col-->

				<div class="col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
					<?php get_template_part( 'template-parts/footer', 'company' ); ?>
				</div><!--/.col-->

			</div><!--/.row-->

			<div class="row">
				
				<div class="col-sm-12">
					<p class="copy-text text-center">&copy; 2016 Signature Healthcare of Volusia</p>
				</div><!--/.col-->
				
			</div><!--/.row-->
		</div><!--/.container-->
	</footer>

	<!-- Contact Modal -->
	<div class="modal fade" id="contactModal">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="opt-inModalLabel">
						<i class="fa fa-envelope"></i> Contact us by Email
					</h4>
				</div><!--/.modal-header-->

				<div class="modal-body">
					<p>Simply enter your name, email, subject, and a message. Please leave a phone number if you would like a call back from our office.</em></p>

					<?php echo do_shortcode($cfm_form_shortcode); ?>

					<hr>

					<p><small>Your privacy is important to us. Please do not send any sensitive medical information with this form. We cannot guarantee your information will be privileged and confidential.</small></p>
				</div><!--/.modal-body-->

			</div><!--/.modal-content-->
		</div><!--/.modal-dialog-->
	</div><!--/#contactModal-->

</div><!--/#page-->

<?php wp_footer(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>

</body>
</html>
