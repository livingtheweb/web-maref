<?php
/**
 * Template part para mostrar contenido en front-page.php
 *
 *
 * @package Maref_by_Livingtheweb!
 */

?>

	<header class="entry-content">
		<div id="promociones" class="carousel slide" data-ride="carousel">
			<?php echo do_shortcode('[metaslider id="39"]'); ?>
		</div>
	</header><!-- .entry-content -->

	<!-- Sección marcas propias -->
	<section id="cajas-home">
		<div class="container">
			<div class="row">				
				<div class="col-md-4">	
					<div class="card bg-aqua" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary btn-block">Card link</a>						
						</div>
					</div>
				</div>
				<div class="col-md-4">	
					<div class="card" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary btn-block">Card link</a>						
						</div>
					</div>
				</div>	
				<div class="col-md-4">	
					<div class="card" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary btn-block">Card link</a>						
						</div>
					</div>
				</div>			
			</row>	
	</section>

	<section id="cta-sucursales" class="cta-sucursales">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cta-box cta-box_sucursales">
						<div class="row">
							<div class="col-lg-7">
								<h3 class="text-center pt-4">¡Consultá nuestras <span>sucursales</span> más cercanas!</h3>
							</div>
							<div class="col-lg-5 px-5 pt-3">
								<span class="btn-block text-center pb-2">Encontrá tu ATOMO</span>								
								<a href="<?php echo site_url(); ?>/sucursales/" class="btn btn-light btn-block sucursales_btn icon-map">¡Buscar ahora!</a>
							</div>
						</div>
						
					</div>
				</div>				
			</div>
		</div>		
	</section>

	<!-- Blog -->
	<section id="blog" class="mb-5">
		<div class="container">
			<div class="row">

				<?php 
					$reg = array( 
						'cat' => 23,
						'posts_per_page' => 3
					);	
					
					$filter_posts = new WP_Query($reg);
				?>
				<?php 
					if ($filter_posts -> have_posts() ): 
						while($filter_posts -> have_posts() ): 
							$filter_posts -> the_post();
				
				?>

				<div class="col-lg-4">
					<div class="sp-blog-item">
						<div class="blog-thubm">
							<figure style="width:340px; height:230px; background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center; background-size:cover"></figure>
							<div class="blog-date">
								<span class="text-uppercase font-weight-bold">
								  <!-- Else muestra texto por defecto si no colocan tag! -->
									<?php
										$posttags = get_the_tags();										
										if ($posttags) {
											foreach($posttags as $tag) {
												echo $tag->name . ' '; 
											}
										} else {
											echo "ATOMO conviene!";
										}
									?>
								</span>
							</div>
						</div>
						<div class="blog-text">
							<h5><?php the_title(); ?></h5>
							<span><?php echo get_the_date();  ?></span>
							<?php 
								$content_intro = get_the_excerpt();							
							?>			
							<p><?php 	echo substr($content_intro, 0,110  ) . " [...]" ?></p>				
							<a href="<?php the_permalink(); ?> " class="readmore"><img src="<?php echo get_template_directory_uri()?>/img/arrow-point-to-right.png" alt="" width="15"></a>
						</div>
					</div>
				</div>	

				<?php endwhile; ?>
				<?php else: 
					esc_html('No hay contenido para mostrar', 'atomoconviene' );					
				?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				
				
				<div class="col-md-12">
					<div class="mt-2"></div>
					<a href="blog/" class="btn btn-light float-right">Ver todas las notas</a>
				</div>	
			</div>
		</div>
	</section>	

	<!-- Áreas de widgets para banners
	================================== -->

	<section id="banner-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner N°1 home col-12')) : ?>
	        <?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="banner-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner N°2 home col-12')) : ?>
	        <?php endif; ?>
				</div>
			</div>
		</div>
	</section>	

	<section id="banners-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner N°3 home col-4')) : ?>
	        <?php endif; ?>
				</div>
				<div class="col-lg-4">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner N°4 home col-4')) : ?>
	        <?php endif; ?>
				</div>
				<div class="col-lg-4">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner N°5 home col-4')) : ?>
	        <?php endif; ?>
				</div>				
			</div>
		</div>
	</section>

	<!-- Slider opiniones clientes -->	
	<section id="opiniones">
		<div class="container">
			<div class="row">
				<div class='col-md-10 offset-md-1 text-center mb-2'>
				<h2>Tu opinión nos interesa!	<img src="https://image.flaticon.com/icons/svg/39/39956.svg" class="feedback-icon"></h2>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-10 offset-md-1'>
					<div class="carousel slide sq-crousal4" data-ride="carousel" id="sq-crousal4">

						<!-- Carousel Slides -->
						<div class="carousel-inner">

						<?php 

							$args = array(
								'cat' => 24
							);

							$i=1;

							$filter_posts = new WP_Query($args);

							if ($filter_posts -> have_posts() ): 
								
								while($filter_posts -> have_posts() ): 
									$filter_posts -> the_post();
						
						?>
							<?php if ($i == 1) { ?>
							<!-- Opiniones -->
							<div class="carousel-item active">
								<blockquote>
									<div class="row">
										<div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
											<div class="feedback-text pl-3">
												<p><?php the_field('opinion'); ?>  </p>
												<a href="<?php the_field('link_al_perfil'); ?>" class="float-right" target="_blank"><small><?php the_field('nombre'); ?></small></a>
											</div>											
										</div>
									</div>
								</blockquote>
							</div>	
							<?php } else { ?>
								<div class="carousel-item">
								<blockquote>
									<div class="row">
										<div class="col-md-10 offset-md-1 d-md-flex d-block text-center text-lg-left">
											<div class="feedback-text pl-3">
												<p><?php the_field('opinion'); ?>  </p>
												<a href="<?php the_field('link_al_perfil'); ?>" class="float-right" target="_blank"><small><?php the_field('nombre'); ?></small></a>
											</div>											
										</div>
									</div>
								</blockquote>
							</div>
							<?php } ?>
							<?php $i++;
										endwhile; ?>						
							<?php else: ?>
							<!-- No posts found -->
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
					</div>
						
						<!-- Carousel Buttons Next/Prev -->
						<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#sq-crousal4" data-slide="prev">
						<img src="<?php echo get_template_directory_uri()?>/img/back-arrow.svg" width="85" alt="">
					</a>
					<a class="carousel-control-next" href="#sq-crousal4" data-slide="next">						
						<img src="<?php echo get_template_directory_uri()?>/img/right-arrow.svg" width="85" alt="">
					</a>
					</div>                          
				</div>
			</div>
		</div>
	</section>
	
	<section id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- <div class="mt-5"></div> -->
					<div class="home__heading home__heading-contacto">
						<h2>Queremos escucharte</h2>
					</div>
					<hr class="hr-line">
					<p class="text-center">En ATOMO estamos atentos a las necesidades de nuestros clientes y consideramos que sus opiniones son muy importantes para mejorar nuestro servicio.</p>
					<p class="text-center">¡Tus comentarios serán muy tenidos en cuanta!</p>
				</div>		
			</div>

			<!-- Formulario home -->
			<?php echo do_shortcode('[contact-form-7 id="68" title="Form home"]'); ?>				

		</div>		
	</section>

	<!-- Modal fan-page Facebook -->
<div class="modal fade" id="modal-fanpage">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title modal-title-modal-home text-center" id="exampleModalLabel">¡Bienvenidos al AHORRO!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<h3 class="pl-3">Seguinos en Facebook</h3>
						<p class="pl-3">para conocer todo lo que te interesa!</p>
					</div>
					<div class="col-6 py-5">
						<!-- BTN Facebook -->						
						<div class="fb-like btn btn-block btn-face" data-href="https://es-la.facebook.com/AtomoConviene/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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

