<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */

get_header();
?>

<div id="primary">
		<main id="main" class="site-main">  
			<section class="bg-white pt-5">
				<div class="container">
				
						<?php
							if ( have_posts() ) :

								

								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									?>
									
									<!-- Blog Post -->
									<div class="card mb-4 shadow">
										<div class="card-body">
											<div class="row align-items-end">
												<div class="col-lg-6">
													<a href="<?php the_permalink(); ?>">
														<figure style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>); background-repeat:no-repeat;background-position:center center; background-size:cover;height:250px">

														</figure>
													
													</a>
												</div>
												<div class="col-lg-6">
													<h2 class="card-title"><?php the_title(); ?></h2>
													<p class="card-text"><?php  echo get_the_excerpt(); ?></p>
													<a href="<?php the_permalink(); ?>" class="btn btn-blue text-uppercase float-right">Leer más &rarr;</a>
												</div>
											</div>
										</div>
										<div class="card-footer text-white" style="background-color:rgba(88,88,92,.9)">
											<?php the_date(); ?>										
										</div>
									</div>
									<hr>


									<?php  

								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
						

						</div>
		</section>
	</main><!-- #main -->
</div>

<?php
get_footer();
