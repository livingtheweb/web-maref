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
    <div class="position-absolute w-25 bg-general px-4" style="right:0;">
      <?php get_sidebar('fluidos'); ?>
    </div>
    <section class="bg-white pt-5">
      <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-6">
                  <h2>Gel MarXtra tm</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum natus, enim doloremque, nihil esse rem, quos accusantium est asperiores aut vel tenetur soluta? Cumque ex cupiditate error quo officia.</p>
                </div>
                <div class="col-lg-6">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-12">
                <h2>Lit Mar tm</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum natus, enim doloremque, nihil esse rem, quos accusantium est asperiores aut vel tenetur soluta? Cumque ex cupiditate error quo officia.</p>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt="">
                </div>
                <div class="col-lg-6">
                  <h2>Seal MarXtra tm</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum natus, enim doloremque, nihil esse rem, quos accusantium est asperiores aut vel tenetur soluta? Cumque ex cupiditate error quo officia.</p>
                </div>
              </div>           
            </div>                  
        </div>
      </div>
    </section>
    <section class="bg-caja-02">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h2>Ts PLus tm</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit nostrum exercitationem, explicabo ea amet adipisci suscipit, atque laudantium reprehenderit itaque, velit voluptatibus cum earum quasi soluta tenetur illum. Praesentium.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam voluptates pariatur voluptas. Quo commodi ut sint veniam ipsum odio laboriosam tempora id nobis modi hic debitis, magnam libero laborum.</p>
            <div class="row">
              <div class="col-lg-6"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt=""></div>
              <div class="col-lg-6"><img src="<?php echo site_url(); ?>/wp-content/uploads/2020/07/video-devialigner-scaled.jpg" alt=""></div>
            </div>
          </div>         
        </div>
      </div> 
    </section>
	</main><!-- #main -->
</div>

<?php
get_footer();
  

