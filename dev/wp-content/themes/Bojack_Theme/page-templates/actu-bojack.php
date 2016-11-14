<?php
/*
Template Name: Actualités
*/
get_header(); //appel du template header.php  ?>
<section class="container">
    <div class="row bojackActu">
    <?php 
        $args=array(
        'post_type' => 'actualite',
        'posts_per_page' => -1 ,
        'paged' => $paged,
        'orderby' => 'ID',
        'order'   => 'ASC'
    );

  // The Query
  $the_query = new WP_Query( $args );
  // The Loop
  if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) 
    {
        $the_query->the_post();
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>
        <article class="col-md-12" id="actualite_<?php the_ID(); ?>">
            <div class="col-md-6 img_actu" style="background-image: url('<?php echo $thumb['0'];?>')">
                <div class="fadeEffect">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-md-6">
              <p><?php the_content(); ?></p>
            </div>
        </article>
    <?php      
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }
?>
    </div>
</section>
<?php get_footer(); //appel du template footer.php ?>