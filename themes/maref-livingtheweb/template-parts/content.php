<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */

?>

		<div class="col-lg-5">	
					
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title text-blue font-weight-bold">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
							
						// maref_livingtheweb_posted_on();
						// maref_livingtheweb_posted_by();
						?>
						<span>Publicado el <?php the_date(); ?></span>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<div class="entry-content">
					<?php
					the_content();
					
					?>
				</div><!-- .entry-content -->
			</div>

		<div class="col-lg-7">
			<?php maref_livingtheweb_post_thumbnail(); ?>
		</div>	
	</article><!-- #post-<?php the_ID(); ?> -->
</section>
<aside class="py-5 bg-btn-app">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</aside>
<?php get_template_part('template-parts/sections/section','noticias'); ?>
