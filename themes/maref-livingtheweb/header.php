<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maref_by_Livingtheweb!
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'maref-livingtheweb' ); ?></a>

	<header id="masthead" class="site-header">
		

		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light d-felx">
		
			<div class="site-branding navbar-brand">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$maref_livingtheweb_description = get_bloginfo( 'description', 'display' );
				if ( $maref_livingtheweb_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $maref_livingtheweb_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->		
		
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-principal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php 
				wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'menu-principal',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );			
			?>
				<div class="row" id="redes">
					<div class="col"></div>	
						<div class="nav-redes">							 
							<i class="fab fa-facebook-f pr-1"></i>
							<i class="fab fa-twitter pr-1"></i>									
						</div>			
				</div>	
		</nav>
		<!-- #site-navigation -->
		<!-- <hr> -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">	

			<div class="collapse navbar-collapse" id="menu-principal">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">eLearning <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Catálogo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">APP</a>
					</li>
					
				
			</div>
		</nav>
	</header><!-- #masthead -->
