<section id="slider">
<?php
   $args=array(
    'post_type' => 'slide',
    'posts_per_page' => -1,
    );

  // The Query
  $the_slider_query = new WP_Query( $args );

  // The Loop
  if ( $the_slider_query->have_posts() ) {
    
    while ( $the_slider_query->have_posts() ) 
    {
        $the_slider_query->the_post();
    ?>
    <div class="slide">
      <div class="relative">
       <?php
              if(has_post_thumbnail())
              {
                the_post_thumbnail(); 
              }
      ?>
      </div>
    </div>
    <?php
    }
  }
  wp_reset_postdata();
?>
</section>