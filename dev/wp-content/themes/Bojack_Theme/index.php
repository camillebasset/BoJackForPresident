<?php
get_header(); //appel du template header.php  ?>


<?php
 get_template_part('views/slider');
?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section class="container">

<div class="row bojack_home">
    <div class="col-xs-12">
        <div class="last_actu" style="background-image: url('<?php echo $thumb['0'];?>')">
            <a href="participer">
                <div class="fadeEffect">
                <?php
                    // boucle WordPress
                    if (have_posts()){
                        while (have_posts()){
                            the_post();
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <?php
                    }
                    }
                    else {
                    ?>
                    Nous n'avons pas trouvé d'article répondant à votre recherche
                    <?php
                    }
                ?>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-6 col-xs-12">
        <div class="movement">
            <div class="fadeEffect">
                <h1>Rejoignez le mouvement</h1>
            </div>
        </div>
    </div>
    <?php 
        $args=array(
        'post_type' => 'actualite',
        'posts_per_page' => 1 ,
        'order'   => 'ASC'
    );
  // The Query
  $the_query = new WP_Query( $args );
  // The Loop
  if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) 
    {
        $the_query->the_post();
        $thumb_actu = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?>
    <div class="col-md-6 col-xs-12">
        <div class="actus" style="background-image: url('<?php echo $thumb_actu['0'];?>')" >
            <div class="fadeEffect">
                <a href="actualite"><h1>Actualités</h1></a>
            </div>
        </div>
    </div>
    <?php      
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }
    ?>
    <div class="col-md-6 col-xs-12">
        <div class="twitter">
        </div>
    </div>

    <div class="col-md-6 col-xs-12">
        <div class="instagram">
        </div>
    </div>

    <div class="col-md-6 col-xs-12 boutique_container">
        <div class="boutique">
        </div>
    </div>



</div>
  

</section>

<?php get_footer(); ?>

