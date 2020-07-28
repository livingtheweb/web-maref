
<h2>Nuestros fluidos de perforación</h2>
<?php 
  $args = array( 
    'post_type' => 'fluido', 
    'order' => 'ASC',
    'orderby' => 'title',                             
    'tax_query' => array(
      'taxonomy' => 'generico',
      'orderby' => 'title'

  
    )                   
  );

  $filter_posts = new WP_Query($args);

  if ($filter_posts -> have_posts(  ) ): 
    while ($filter_posts -> have_posts() ): 
        $filter_posts -> the_post();

  ?>               


  <?php echo get_the_term_list( $post->ID, 'generico', '<a class="btn d-block btn-lg mx-auto btn-blue mb-1"', '</a>') ?>


  <?php endwhile; else: ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
