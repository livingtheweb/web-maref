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
    
    <section class="bg-white pt-5 min-vh-100">
      <div class="container">
          <div class="row">
            <div class="col-lg-9">
            
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
                
                // Título taxonomía industria
                $taxonomy = 'industria';
                $terms = get_terms( $taxonomy );
                foreach( $terms as $term ) { 
                  echo '<h2 class="text-center">'. $term->name. '</h2>';
              }
              ?>
         
            
              <hr>
              <div class="row align-items-center">
              <div class="col-lg-12 mb-4">
              <div class="row">
                <?php if ( have_posts() ) : 
                  while ( have_posts() ) :
                    the_post();                  
                  ?>
               
                
              
                
                    <div class="col-lg-4 shadow-sm p-4">
                      <div class="row">
                          <div class="col-lg-4 mb-4">
                          <?php $icono = get_field('icono'); ?>
                            <i class="<?php if ($icono == "Balde") {
                                echo "fa fa-fill-drip fa-3x";
                              } elseif (get_field('icono') == "Bidón") {
                                echo "fa fa-glass-whiskey fa-3x";
                               
                              } else {
                                echo "fas fa-shopping-bag fa-3x";
                              }
                              
                              ?>">
                            </i>             
                          </div>
                          <div class="col-lg-8">
                            <h4 class="text-blue font-weight-bold"><?php the_field('nombre_comercial'); ?></h4>
                            <p class="m-0 text-black-50"><?php the_field('descripcion'); ?></p>
                            <p class="font-weight-bold m-0 text-info"><?php the_field('forma_de_comercialización'); ?></p>
                          </div>

                      </div>
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
            <div class="col-lg-3 bg-general">
              <?php get_sidebar('fluidos'); ?>
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
  

