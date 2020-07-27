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
    <section class="bg-white pt-5">
      <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="row">
              <?php if ( have_posts() ) : 
                while ( have_posts() ) :
                  the_post();                  
                  ?>

                <div class="col-lg-4">                  
                  <h2 class="text-blue font-weight-bold"><?php the_field('nombre_comercial'); ?></h2>   
                  <i class="<?php if (get_field('icono') == "Balde") {
                      echo "fa fa-shopping-basket";
                    } else {
                      // Nada
                    }
                    
                    ?>">
                    
                  
                
                </i>              
                </div>
                <div class="col-lg-8">
                  <h3>Marca</h3>
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
    </section>
   
	</main><!-- #main -->
</div>

<?php
get_footer();
  

