	<!-- Section Noticias y anuncios -->
	<section class="blog bg-white py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="text-center">Noticias y anuncios</h3>
				</div>				
			</div>
			<div class="row">
				<?php 
					$reg = array( 
						'cat' => 4,
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
							<figure style="height:230px; background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center; background-size:cover"></figure>
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
											echo "Maref";
										}
									?>
								</span>
							</div>
						</div>
						<div class="blog-text">
							<h5><a href="<?php the_permalink(); ?>" class="text-info"><?php the_title(); ?></a></h5>
							<span class="text-black-50"><?php echo get_the_date();  ?></span>
							<?php 
								$content_intro = get_the_excerpt();							
							?>			
							<!-- <p><?php 	echo substr($content_intro, 0,110  ) . " [...]" ?></p>				 -->
							<a href="<?php the_permalink(); ?>" class="readmore fa fa-arrow-alt-right"></a>
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