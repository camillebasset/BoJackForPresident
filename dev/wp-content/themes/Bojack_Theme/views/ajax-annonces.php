<?php
	
	$args = array(
		'post_type' => 'annonce',
		'post_status' => 'published',
    	'tax_query' => array(
    		array(
    			'taxonomy' => 'categorie-annonce',
    			'field' => 'term_id',
    			'terms' => $term_id,
    		),
    	)
	);

	$the_query = new WP_Query( $args);

  // The Loop
  if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) 
    {
        $the_query->the_post();
    ?>
        <article class="col-md-4" id="annonce_<?php the_ID(); ?>">
          <?php
              if(has_post_thumbnail())
              {
                echo '<div class="responsiveImage">';
                the_post_thumbnail("thumbnail_annonce");
                echo '</div>';
              }
          ?>
         
          <h2><?php the_title(); ?></h2>
          <h3><?php the_terms( get_the_ID(), 'categorie-annonce', 'Catégories: ', ' / ' ); ?></h3>
          <p><?php the_excerpt_max_charlength(140); ?></p>
          <span class="prix">Prix : <?php the_field('prix'); ?>€</span>
          <a class="pull-right" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Voir l'annonce </a>
        </article>
    <?php      
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
   		echo '<div class="centered-loading"><p><i class="fa fa-exclamation-circle red"></i> Aucune annonce trouvée.</p></div>';
    }
?>
