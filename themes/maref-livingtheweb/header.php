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


	<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-general">
		<div class="container">
			
						
		<div class="float-left navbar-brand">
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
					<p class="site-description"><?php echo $maref_livingtheweb_description; ?></p>
				<?php endif; ?>
			</div> 
		
		
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
					'menu_class'      => 'navbar-nav mx-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );			
			?>
							
				<span class="navbar-text">
					<a href="" class="btn btn-blue">APP</a>
					<a href="" class="btn btn-orange">Aula Virtual</a>
				</span>		

				<div class="col"></div>	
				<div class="nav-redes">	

					<span class="fa-stack fa-1x" style="color:#fff;line-height:2.3em">
						<i class="fa circle-icon fa-stack-2x icon-background"></i>
						<i class="fab fa-youtube fa-stack-1x"></i>
					</span>			
					<span class="fa-stack fa-1x" style="color:#fff;line-height:2.3em">
						<i class="fa circle-icon fa-stack-2x icon-background"></i>
						<i class="fab fa-linkedin fa-stack-1x"></i>
					</span>							
				</div>			
			</div>
	</nav>
			<!-- #site-navigation -->
	


