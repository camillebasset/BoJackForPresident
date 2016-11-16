<?php 
/*
    Template Name: Formulaire nouveau membre
*/
acf_form_head();
get_header();
?>
<section class="container">
    <div class="col-md-12 form-membre">
    <?php if(have_posts())
    {
        while(have_posts() ) {
            the_post();
        ?>
        <h1 class="devenir_membre"><?php the_title(); ?></h1>
        <?php 
        if(!isset($_POST['updated']) || $_POST['updated']!= true)
            {
                acf_form(array(
                    'post_id' => 'new_post',
                    'new_post' => array(
                        'post_type' => 'membre',
                        'post_status' => 'pending'
                    ),
                    'submit_value' => 'Inscription',
                    'post_title' => false,
                    'post_content' => false,
                    'updated_message' => 'Merci, vous ferez bientot partis des membres soutenant Bojack',
                ));
            }
            ?>
            <?php
        }  
    }
    ?>
    </div>
    <?php 
    $args=array(
    'post_type' => 'membre',
    'posts_per_page' => -1 ,
    'paged' => $paged
    );

  // The Query
  $the_query = new WP_Query( $args );

  $count_membres = wp_count_posts( 'membre' )->publish;
  // The Loop
  if ( $the_query->have_posts() ) {
    ?>
    <div class="row listMembres">
        <div class="col-xs-12">
            <h2>Ils sont déja <?= $count_membres ?> à avoir rejoins Bojack</h2>
            <ul>
    <?php
        while ( $the_query->have_posts() ) 
        {
            $the_query->the_post();
        ?> 
            <li><?= the_field('nom') ?> <?= the_field('prenom') ?> - <i class="fa fa-map-marker red"></i> <?= the_field('ville') ?>
            </li>
        <?php
        }?>
            </ul>
        </div>
    </div>
    <?php
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
        echo "<p class='emptyMembres'>Aucun membre ne s'est encore inscrit.</p>";
    }
    ?>
</section>




<?php 
get_footer();
?>