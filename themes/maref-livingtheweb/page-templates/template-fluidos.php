<?php
/**
 * Template name: Fluidos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */
get_header();
?>


<div id="primary">
	<main id="main" class="site-main">

  <?php maref_livingtheweb_post_thumbnail(); ?>
   
    <section class="bg-white pt-5">
      <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="row mb-3">
                <div class="col-lg-6">                  
                  <h2 class="text-blue font-weight-bold">Gel MarXtra <sup>TM</sup></h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum natus, enim doloremque, nihil esse rem, quos accusantium est asperiores aut vel tenetur soluta? Cumque ex cupiditate error quo officia. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolore ullam a ratione, quidem est suscipit repudiandae odio, nulla voluptatum, sequi nihil repellendus molestias incidunt! Corrupti praesentium rem quia aperiam.</p>
                </div>
                <div class="col-lg-6">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-12">
                <h2 class="text-blue font-weight-bold">Lit Mar <sup>TM</sup></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum natus, enim doloremque, nihil esse rem, quos accusantium est asperiores aut vel tenetur soluta? Cumque ex cupiditate error quo officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem mollitia illo dicta ea labore, a pariatur error ipsam temporibus fugit voluptate et dolorem, distinctio odio quam ut! Sit, inventore!</p>
              </div>
              <div class="row mt-5">
                <div class="col-lg-6">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt="">
                </div>
                <div class="col-lg-6">
                  <h2 class="text-blue font-weight-bold">Seal MarXtra <sup>TM</sup></h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum natus, enim doloremque, nihil esse rem, quos accusantium est asperiores aut vel tenetur soluta? Cumque ex cupiditate error quo officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate non doloremque libero corporis quae id repellat voluptatum quibusdam. Nobis minus ex optio dignissimos asperiores itaque atque eos accusamus ab impedit.</p>
                </div>
              </div>     
              <div class="row bg-caja-02 mt-5 p-4 pb-5" style="box-shadow: -500px 0px 0 #D7D2AF;">              
                <div class="col-lg-4">
                  <h2 class="text-blue font-weight-bold">TS Plus <sup>TM</sup></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit nostrum exercitationem, explicabo ea amet adipisci suscipit, atque laudantium reprehenderit itaque, velit voluptatibus cum earum quasi soluta tenetur illum. Praesentium.</p>                 
               
                </div>
                <div class="col-lg-8">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt="">
                </div>
              </div>             
            </div> 
            <div class="col-lg-3 bg-general">
            <!-- <div class="position-absolute w-25 bg-general px-4" style="right:0;"> -->
              <?php get_sidebar('fluidos'); ?>
            <!-- </div> -->
            </div>                 
        </div>
      </div>
    </section>
    
	</main><!-- #main -->
</div>

<?php
get_footer();
  

