<?php
/**
 *
 * @package Maref_by_Livingtheweb!
 */
get_header();
?>


<div id="primary">
	<main id="main" class="site-main">  
  <?php maref_livingtheweb_post_thumbnail(); ?>
    <div class="position-absolute w-25 bg-general px-4" style="right:0;">
      <?php get_sidebar('fluidos'); ?>
    </div>
    <section class="bg-white pt-5 min-vh-100">
      <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <h2 class="text-blue font-weight-bold text-center mb-5">
              <?php 
                $args = array( 
                  'post_type' => 'fluido',   
                  'paged' => $page,
                  'post__not_in' => $do_not_duplicate,
                  'order' => 'ASC',
                  'orderby' => 'title',                             
                  'tax_query' => array(
                    'taxonomy' => 'generico',
                    'orderby' => 'title',
                    
                   
                  
                    
                    
                  )                   
                );

              
              ?>
          <?php echo get_the_term_list( $post->ID, 'generico', '<h2 class="text-center display-5"', '</h2>') ?>

              </h2>
              <hr>
          
            </div>
            
                <div class="col-lg-9">
                  <div class="row align-items-center">
                  <?php if ( have_posts() ) : 
                    while ( have_posts() ) :
                      the_post();                  
                      ?>
                  
                    <div class="col-lg-1">
                      <i class="<?php if (get_field('icono') == "Balde") {
                          echo "fa fa-fill-drip fa-3x";
                        } else {
                          // Nada
                        }
                        
                        ?>">
                    </i>              
                    </div>
                    <div class="col-lg-4">
                      <h2 class="text-blue font-weight-bold"><?php the_field('nombre_comercial'); ?></h2>
                      <p class="m-0"><?php the_field('descripcion'); ?></p>
                      <p class="m-0"><?php the_field('forma_de_comercialización'); ?></p>
                    </div>

                    <?php  
                      endwhile;

                      the_posts_navigation();

                      else :

                      get_template_part( 'template-parts/content', 'none' );

                      endif;
                      ?>
                  </div>
                </div> 

              </div>
            </div>
                            
        </div>
      </div>
    </section>
   
	</main><!-- #main -->
</div>

<?php
get_footer();
  

