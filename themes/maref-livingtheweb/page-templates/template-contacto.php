<?php
/**
 * Template name: Contacto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */
get_header();
?>

<header>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3346.0547659199733!2d-68.79917658510648!3d-33.00233158203866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e7333c0a207b3%3A0x83f0678882f28f8b!2sMaref%20Sa!5e0!3m2!1ses!2sar!4v1595454077583!5m2!1ses!2sar" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</header>
<div id="primary">
	<main id="main" class="site-main">  
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">           
            <div class="h-100">
              <h3 class="text-blue pb-4">Contactos</h3>
              <h5>Argentina</h5>
              <p class="text-black-50">Administración y planta industrial</p>
              <p>Ruta Provincial 84 N°8400, Parque Industrial Municipal de Luján de Cuyo, Predio F5, Mendoza, Argentina.</p>
              <div class="mb-2"></div>
              <a href="tel:+542615361917">+54 9 261 5361917</a><br>
              <a href="tel:+542615732222">+54 9 261 5732222</a>                   
            </div>            
          </div>
          <div class="col-lg-4">        
            <div class="h-100">                
              <h5>Chile</h5>
              <p class="text-black-50">Administración y planta industrial</p>
              <p>Avenida Los Consquistadores 1700, Piso 11</p>
              <div class="mb-2"></div>
              <a href="tel:+56930940371">+56 9 3094-0371</a>  
            </div>           
          </div>
          <div class="col-lg-4">        
            <div class="h-100">                
              <h5>Perú</h5>
              <p class="text-black-50">Administración y planta industrial</p>
              <p>Avenida Los Consquistadores 1700, Piso 11</p>
              <div class="mb-2"></div>
              <a href="tel:+56930940371">+56 9 3094-0371</a>  
            </div>         
          </div>
        </div>
      </div>
    </section>
      
    
   <!-- Formularios -->   
    <section class="py-5 bg-white">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6">     
            <h3 class="text-blue font-weight-bold pb-4 text-center">Consultas</h3>       
            <?php echo do_shortcode('[contact-form-7 id="114" title="Consultas"]'); ?> 

          
          </div>       
        </div>
        <hr>
        <div class="row justify-content-center">
          <div class="col-6">     
            <h3 class="text-blue font-weight-bold pb-4 text-center">Forma parte</h3>       
            <?php echo do_shortcode('[contact-form-7 id="115" title="Forma parte"]'); ?> 
            
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
  

