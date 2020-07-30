<?php
/**
 * Template name: Nosotros
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */
get_header();
?>


<div id="primary">
	<main id="main" class="site-main">  
      
      
    <h4 class="position-absolute w-25 ml-5 text-white font-weight-bold text-left display-4" style="
    top: 200px;
    left: 100px;
    ">Suministro, transporte y asistencia técnica</h4>      
    <?php maref_livingtheweb_post_thumbnail(); ?>

   
    <section class="py-5 bg-caja-02">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">            
            <p>Somos una empresa argentina dedicada... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non neque quam corporis amet deleniti, quod possimus laboriosam provident itaque similique, saepe sequi sit mollitia voluptate vel illo consectetur fugit. Veniam!</p>
            <p>Saepe dignissimos ducimus soluta ipsum deleniti laborum sapiente dolores pariatur animi aut, cumque corporis enim repellat? Cum, eos molestias, vitae ipsa aspernatur incidunt molestiae alias dicta quibusdam nesciunt, expedita impedit!</p>

            <!-- Mostrar en ventana modal desde YouTube -->
            <a href="" class="btn btn-orange text-uppercase" data-toggle="modal" data-target="#modal1">Video institucional</a>
          </div>
          <div class="col-lg-7">
            <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/nosotros-1.jpeg" alt="">
           
          </div>
        </div>
      </div>
    </section>

    <section id="compromiso" class="pb-4 bg-caja-02">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" style="background-image:url(http://localhost/maref/wp-content/uploads/2020/07/nosotros-2.jpg); background-repeat:no-repeat;background-position:center center; background-size:cover">
            <!-- <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/nosotros-2.jpg" alt="">            -->
          </div>                
          <div class="col-lg-4"> 
            <div style="height: 450px;">             
              <h3 class="text-blue pb-4">Compromiso, liderazgo y transparencia al servicio de nuestros clientes</h3>
              <!-- <h2 class="font-weight-bold text-left display-4">Asistencia técnica</h2> -->
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia fugit, illum, repellendus impedit veritatis quidem ut commodi pariatur at earum odit recusandae quos, perferendis dolore molestiae similique nisi harum fuga.</p>    
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio totam, modi, ex quibusdam provident, quae qui consequatur rem illo deleniti delectus ea quos assumenda eveniet autem sequi. Cum, sequi odit?</p>              
            </div>
          </div>        
          <div class="col-lg-5">
            <div style="height: 450px;">
              <div class="h-100" style="background-image:url(http://localhost/maref/wp-content/uploads/2020/07/nosotros-3.jpg); background-repeat:no-repeat;background-position:center center; background-size:cover"></div>
            </div>
          </div>     
        </div>
      </div>     
    </section> 

    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div style="height: 420px;">  
              <div class="h-100">
                <h3 class="text-blue pb-4">Comprometidos con el bienestar de personas y el medio ambiente</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>   
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
                   
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/nosotros-laboratorio.jpg" alt="">
          </div>
        </div>
      </div>
    </section> 

    <aside class="py-5 bg-btn-app">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </aside>

    <?php get_template_part('template-parts/sections/section','noticias'); ?>

	</main><!-- #main -->
</div>

<?php
get_footer();
  

