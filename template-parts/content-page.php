<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Signature_Healthcare_of_Volusia
 */

?>

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

					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shvmd' ),
							'after'  => '</div>',
						) );
					?>

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
					<?php endif; ?>

					</div><!--/.col-->

				</div><!--/.row-->
			</div><!--/.container-->
		</article><!-- #post-## -->
	</section><!--/#primary-->
</main>
