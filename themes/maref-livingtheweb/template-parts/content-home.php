<?php
/**
 * Template part para mostrar contenido en front-page.php
 *
 *
 * @package Maref_by_Livingtheweb!
 */

?>

<header class="entry-content">
	<div class="overlay"></div>
	<!-- Importante: Playsinline is required for mobile Safari, allowing videos to play without forcing fullscreen mode. -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Video Maref</h1>
        <p class="lead mb-0">Algún texto interesante</p>
      </div>
    </div>
  </div>
</header>

	<?php get_template_part('template-parts/sections/section','servicios'); ?>
	<?php get_template_part('template-parts/sections/section','busqueda'); ?>
	<?php get_template_part('template-parts/sections/section','botones'); ?>
	<?php get_template_part('template-parts/sections/section','noticias'); ?>

	


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'atomo-supermercados' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

