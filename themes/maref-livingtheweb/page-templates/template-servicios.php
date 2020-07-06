<?php
/**
 * Template name: Servicios
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maref_by_Livingtheweb!
 */
get_header();
?>


<div id="primary">
	<main id="main" class="site-main">  
    <section class="pt-5">
      <div class="container-fluid bg-btn-app">
          <div class="row align-items-center">           
            <div class="col-lg-6 text-center py-5">
              <div class="caja px-5">
                <h2 class="text-naranja text-uppercase">Capacitate con Maref</h2>
                <h2 class="text-white text-uppercase">Clases on-line <br> tutoriales</h2>
                <p class="text-white">Consigue el máximo rendimiento</p>
                <a href="" class="btn btn-orange">Acceder</a>
              </div>
            </div>
            <div class="col-lg-6 bg-caja-02 text-center py-5">
              <div class="caja px-5">
                <h2 class="text-naranja text-uppercase">Maref te acompaña</h2>
                <h2 class="text-blue text-uppercase">Descarga nuestra APP</h2>
                <p class="text-muted">Consigue una herramienta de trabajo gratuita pensada para facilitar tu trabajo</p>
                <a href="" class="btn btn-blue">Descarga la APP</a>
              </div>
            </div>                           
        </div>
      </div>
    </section>

    <section class="section-servicios" style="background-image:url(<?php the_field('fondo_01'); ?>); background-repeat:no-repeat;background-position:center center; background-size:cover">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="text-white font-weight-bold text-left display-4">Medición y telemedición de sondaje</h2>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <a href="" class="btn btn-blue text-uppercase">Videos</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-servicios" style="background-image:url(<?php the_field('fondo_02'); ?>); background-repeat:no-repeat;background-position:center center; background-size:cover">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <h2 class="text-white font-weight-bold text-right display-4">Alquiler de containers</h2>
            <p class="text-white text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <a href="" class="btn btn-orange text-uppercase">Más información</a>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="text-blue">Servicios de laboratorio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <a href="" class="btn btn-orange text-uppercase">Más información</a>
          </div>
          <div class="col-lg-8">
            <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/servicios-laboratorios.jpg" alt="">
            <div class="row mt-3">
              <div class="col-lg-4">
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, velit maiores dignissimos, aspernatur voluptates nihil delectus unde dolorem debitis</p>
              </div>
              <div class="col-lg-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia fugit, illum, repellendus impedit veritatis quidem ut commodi pariatur at earum odit recusandae quos, perferendis dolore molestiae similique nisi harum fuga.</p>
                <p>Laborum quaerat, labore necessitatibus voluptate quod magni doloribus alias optio porro fugit sapiente dolor rem cupiditate fuga beatae repudiandae consequuntur nisi error nemo! Quos facilis adipisci unde voluptatum delectus nisi!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-caja-02">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="text-blue">Almueras líquidas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident asperiores error velit aspernatur ab optio delectus, at nostrum commodi molestiae dolorum cupiditate, fuga facilis quasi laudantium ratione maiores vitae!</p>
            <a href="" class="btn btn-orange text-uppercase">Más información</a>
          </div>
          <div class="col-lg-8"> 
            <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/servicios-sales.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

	</main><!-- #main -->
</div>

<?php
get_footer();
  

