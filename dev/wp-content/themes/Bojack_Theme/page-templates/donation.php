<?php
/*
Template Name: Donation
*/
get_header(); //appel du template header.php ?>

<div class="container">
  <div class="col-xs-12 donationbloc">
    <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>