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

?>

	<!-- Sign-up  -->
	<section id="sign-up">
		<div id="sign-up-overlay">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<h2>Are you ready for healthcare the way it <strong>should</strong> be?</h2>
						<p><button class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#contactModal">Yes, contact me for a no cost consultation!</button></p>
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div>
	</section><!--/#sign-up-->

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
								'menu_class'		=> 'list-unstyled',

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
					<p>Simply enter your name, email, and a message. Please leave a phone number if you would like a call back from our office.</em></p>
					<form role="form">
						<div class="form-group">
							<label class="sr-only" for="contact-name">Your name</label>
							<input type="text" class="form-control" id="contact-name" placeholder="Your name">
						</div><!--/.form-group-->
						<div class="form-group">
							<label class="sr-only" for="contact-email">Your email</label>
							<input type="text" class="form-control" id="contact-email" placeholder="Your email">
						</div><!--/.form-group-->
						<div class="form-group">
							<label class="sr-only" for="contact-phone">Your phone number</label>
							<input type="text" class="form-control" id="contact-phone" placeholder="Your phone number">
						</div><!--/.form-group-->
						<div class="form-group">
							<label class="sr-only" for="contact-message">Your message</label>
							<textarea class="form-control input-lg" id="contact-message" placeholder="Your message" rows="3"></textarea>
						</div><!--/.form-group-->

						<input type="submit" class="btn btn-danger" value="Send">

						<hr>

						<p><small>Your privacy is important to us. Please do not send any sensitive medical information with this form. We cannot guarantee your information will be privileged and confidential.</small></p>
					</form>
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
