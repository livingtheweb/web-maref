<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */

?>




	<?php maref_livingtheweb_post_thumbnail(); ?>
<section class="bg-white pt-5">
	<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maref-livingtheweb' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
			<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'maref-livingtheweb' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

