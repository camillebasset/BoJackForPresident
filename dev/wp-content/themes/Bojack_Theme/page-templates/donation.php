<?php
/*
Template Name: Donation
*/
get_header(); //appel du template header.php ?>

<div class="container">
  <div class="col-xs-12 donationbloc">
    <h1>Aider bobo</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>