<?php
/*
Template Name: Actualités
*/
get_header(); //appel du template header.php  ?>
<div class="col-xs-12 actu-bandeau">
</div>
<section class="container">

    <div class="row bojackActu">
        <div class="col-xs-10 col-xs-offset-1 titre-actu">
            <h1>ils parlent de nous</h1>
        </div>
    <div class="col-xs-10 col-xs-offset-1">
        <?php
          get_template_part('views/ajax-search');
        ?>
    </div>
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
        <article id="<?php the_ID(); ?>" class="col-xs-10 col-xs-offset-1">
            <h1><?php the_title(); ?><div class="divider"></div></h1>
            <div class="col-xs-12 contenu-article">
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