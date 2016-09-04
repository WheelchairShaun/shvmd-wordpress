<?php
/**
 * Template Name: New Patients Forms Page
 */

get_header(); ?>

<!-- Feature image -->
<section class="page-title">
	<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>
</section>

<!-- Main content -->
<main id="main" role="main">
	<section id="content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">

					<?php while ( have_posts() ) : the_post();

						the_content();

						// Initialize custom post type for patient forms
						$npf_loop = new WP_Query( array( 'post_type'	=> 'patient_form',
														 'orderby'		=> 'post_id',
														 'order'		=> 'ASC',
														)
												);
					?>

					<table class="patient-forms">

					<?php while( $npf_loop->have_posts() ) : $npf_loop->the_post(); 

						// Custom variables from Advanced Custom Fields
						$npf_file		= get_field( 'patient_form_file' );
						$npf_dbtn_text	= get_field( 'patient_form_dbutton_text');
					?>
						<tr>
							<td class="patient-form-name"><?php the_title(); ?></td>
							<td class="patient-form-download"><a href="<?php echo $npf_file['url']; ?>" class="btn btn-info"><?php echo $npf_dbtn_text; ?></a></td>
						</tr>
					<?php endwhile; ?>

					</table>

					<?php if ( get_edit_post_link() ) : ?>
						<div class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'shvmd' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
						</div><!-- .entry-footer -->
					<?php endif;

					endwhile; // End of the loop.
					?>

					</div><!--/.col-->

				</div><!--/.row-->
			</div><!--/.container-->
		</article><!-- #post-## -->
	</section><!--/#primary-->
</main>

<?php
get_footer();
