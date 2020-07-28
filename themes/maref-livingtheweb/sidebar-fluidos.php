
<h2>Nuestros fluidos de perforación</h2>
<?php 
  $taxonomy = 'generico';
  $terms = get_terms( $taxonomy, array(
    'hide_empty' => false,
  ));

 
  
  foreach( $terms as $term ) { 
    $term_link = get_term_link( $term );
    echo '<a href="' . esc_url( $term_link ) . '" class="btn d-block btn-lg mx-auto btn-blue mb-1">' . $term->name. '</a>';
    
}

 
