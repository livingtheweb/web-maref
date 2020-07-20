<?php
/**
 * Template name: Clientes
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */
get_header();
?>


<div id="primary">
	<main id="main" class="site-main">  
      
      
    <h4 class="position-absolute w-25 ml-5 text-bg-app font-weight-bold text-left display-4" style="
    top: 200px;
    left: 100px;
    ">Clientes satifechos</h4>      
    <?php maref_livingtheweb_post_thumbnail(); ?>
   
    <section class="py-5 bg-caja-02">
      <div class="container">
        <div class="row align-items-center">
        <?php 

          $args = array( 
              'post_type' => 'cliente'
          );

          $filter_posts = new WP_Query($args);

          if ($filter_posts -> have_posts(  ) ): 
              while ($filter_posts -> have_posts() ): 
                  $filter_posts -> the_post();

          ?>
          <div class="col-lg-2">            
            <img src="<?php the_field('logo'); ?>" alt="">
          </div>

          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          
          
        </div>
      </div>
    </section>


   

	</main><!-- #main -->
</div>

<?php
get_footer();
  

