<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maref_by_Livingtheweb!
 */

?>

	<footer class="pt-5">
		<div class="container">
				<div class="row">
						<div class="col-lg-4">
								<h4 class="text-center mb-3">Contáctanos</h4>
								<p class="text-black-50 text-center">Administración y Planta Industrial: Ruta Provincial 84 N°8400, Parque Industrial Municipal de Luján de Cuyo, Predio F5, Mendoza, Argentina.</p> 
								<p class="text-black-50 text-center">Depósito: Espejo Oeste 240, Russell, Maipú, Mendoza, Argentina.</p>	
						</div>
						<div class="col-lg-4">   
							<h4 class="text-center mb-3">Certificaciones</h4>    
							<p class="text-black-50 text-center">Tiene certificado su sistema de Gestión de Calidad. Cuyo alcance es: Diseño y desarrollo, fabricación y comercialización de aditivos de origen vegetal y mineral para perforación de pozos petroleros, perforaciones mineras y HDD (Horizontal Drilling Direct).</p>             
							<!-- <div class="icon-links icon-social icon-links-grid social-colors">
									<a class="facebook"><i class="icon-facebook"></i></a>
									<a class="instagram"><i class="icon-instagram"></i></a>      
									<a class="youtube"><i class="icon-youtube"></i></a>
							</div> -->
							<hr class="space-sm">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/certificaciones.png" alt="" class="w-50 d-block mx-auto">                          
						</div>
						<div class="col-lg-4">						
								<a href="clientes" class="btn btn-lg btn-blue text-uppercase d-block mx-auto" style="width:160px">Clientes</a>
								<div class="my-5"></div>
								
								<div class="nav-redes d-flex justify-content-center">										
									<span class="fa-stack fa-1x mr-3" style="color:#fff;line-height:2.3em">
										<i class="fa circle-icon fa-stack-2x icon-background"></i>
										<i class="fab fa-linkedin fa-stack-1x"></i>
									</span>				
									<span class="fa-stack fa-1x" style="color:#fff;line-height:2.3em">
										<i class="fa circle-icon fa-stack-2x icon-background"></i>
										<i class="fab fa-youtube fa-stack-1x"></i>
									</span>						
								</div>
						</div>
				</div>
		</div>	  
	</footer>	
	<div class="bg-light mt-5">
		<div class="container">
			<div class="site-info small">
				<div class="row">
					<div class="col-6 text-center">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'maref-livingtheweb' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( '© 2020 %s', 'maref-livingtheweb' ), 'Maref S.A' );
							?>
						</a>
					</div>
					<!-- <span class="sep"> | </span> -->
					<div class="col-6 text-center">
						<span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'maref-livingtheweb' ), 'maref-livingtheweb', '<a href="https://www.livingthewebla.com/web/">Livingtheweb! & Fática diseño</a>' );
							?></span>
					</div>
				</div>
			</div><!-- .site-info -->               
		</div>
	</div>   
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
