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
    </div>

    <div class="col-md-6 col-xs-12">
        <div class="movement">
            <h1>Rejoignez le mouvement</h1>
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
            <a href="actualite"><h1>Actualités</h1></a>
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
            <a class="twitter-timeline" data-height="640" data-link-color="#9E6C4B" href="https://twitter.com/BoJackHorseman">Tweets by TwitterDev</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
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

