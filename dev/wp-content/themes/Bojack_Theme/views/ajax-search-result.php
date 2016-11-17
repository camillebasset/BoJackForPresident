<?php
$args=array(
  'post_type' => 'actualite',
  'posts_per_page' => 5,
  's' => $search_input
  );
// The Query
//$wp_query->max_num_pages
  $the_query = new WP_Query( $args );
  // The Loop
  if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) 
    {
        $the_query->the_post();
    ?>
      <li><a href="#<?php the_ID(); ?>" id="ancre_article"><?php the_title(); ?></a></li>
    <?php      
    }
    echo '</ul>';
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
        echo '<span class="errorSearch"><i class="fa fa-exclamation-circle"></i> Pas de résultat trouvé</span>';
    }
    ?>