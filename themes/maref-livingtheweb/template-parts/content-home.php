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
        <p class="lead mb-0">Ver video completo</p>
      </div>
    </div>
  </div>
</header>

	<?php get_template_part('template-parts/sections/section','servicios'); ?>
	<?php get_template_part('template-parts/sections/section','busqueda'); ?>
	<?php get_template_part('template-parts/sections/section','botones'); ?>
	<?php get_template_part('template-parts/sections/section','noticias'); ?>


<?php get_footer(); ?>

