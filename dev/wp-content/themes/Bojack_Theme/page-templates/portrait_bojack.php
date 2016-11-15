<?php
/*
Template Name: Page portrait Bojack
*/

get_header(); //appel du template header.php
?>
<?php

$image = get_field('image');

if( !empty($image) ): ?>

	<div class="image_portraitBojack" style="background:url('<?php echo $image['url']; ?>');" alt="<?php echo $image['alt']; ?>" /></div>

<?php endif; ?>
<section class="container">
  <div class="row portraitBojack">
    <?php
    // check if the flexible content field has rows of data
    if( have_rows('portrait') ){

      // loop through the rows of data
      while ( have_rows('portrait') ){
        the_row();
        $layout = get_row_layout();
        include get_template_directory().'/views/flexible/'.$layout.'.php';
      }
    }?>
  </div>
</section>
<?php
  get_footer(); //appel du template header.php
  ?>
