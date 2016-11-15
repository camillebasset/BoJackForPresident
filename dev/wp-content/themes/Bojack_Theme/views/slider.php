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
        $thumb_slide = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>
    <div class="slide">
      <div class="relative">
          <div class="slideimg" style="background-image: url('<?php echo $thumb_slide['0'];?>')">
          </div>
          <div class="slide__caption">
              <span><?= the_field('titre')?></span>
          </div>
      </div>
    </div>
    <?php
    }
  }
  wp_reset_postdata();
?>
</section>