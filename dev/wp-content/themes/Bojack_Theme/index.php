<?php
get_header(); //appel du template header.php  ?>


<?php
 get_template_part('views/slider');
?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section class="container">

<div class="row bojack_home">
    <div class="intro col-xs-12">
      <h1>Bojack Horseman, candidat aux élections 2017</h1>
      <p class="col-md-6 col-md-offset-3">Soutenez BoJack tout au long de ses meetings à travers la France</p>
      <a href="participer" class="join">Voir la liste des prochains meetings</a>
        <!-- <div class="last_actu" style="background-image: url('<?php echo $thumb['0'];?>')">

        </div> -->
    </div>
  </div>
</section>
    <div class="col-xs-12 titre-actu-opacite">
      <h1>ACTUALITÉS</h1>
    </div>
<section class="container">
  <div class="row bojack_home">
     <div class="col-xs-12 col-md-6">
        <div class="twitter">
            <a class="twitter-timeline" data-height="640" data-link-color="#9E6C4B" href="https://twitter.com/BoJackHorseman">Tweets by TwitterDev</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
     </div>
      <div class="col-md-6 col-xs-12">
        <a href="https://www.instagram.com/bojackhorseman/" target="_blank">
            <div class="instagram">
            </div>
        </a>
    </div>
    <div class="col xs-12 home_actu">
      <p class="col-md-6 col-md-offset-3">On parle de BoJack partout dans le monde. Il va bientôt révolutionner la France. Participer à sa notoriété et suivez ce qu’il se dit ! </p>
      <a href="actualites" class="join">Voir les derniers articles</a>
    </div>
  </section>
    <div class="col-xs-12 titre-faire_don">
      <h1>FAITES UN DON</h1>
    </div>
    <section class="container">
      <div class="row home_don">
        <p class="col-md-6 col-md-offset-3">BoJack, c’est une idéologie, un mode de vie et une façon de penser. Mais la réalité est parfois bien plus forte que les idées, faites un don à BoJack Horseman, afin que tous vos rêves deviennent réalité et que la France acceuille un président de qualité ! </p>
        <a href="donation" class="join">Faire un don</a>
  </div>
</section>
<div class="col-xs-12 titre-boutique-opacite">
  <h1></h1>
</div>
<section class="container">
  <div class="row home_don">
    <p class="col-md-6 col-md-offset-3">Vous pouvez aussi acheter des goodies à l’effigie de BoJack pour être paré pour les meetings et autres manifestations publiques </p>
    <a href="donation" class="join">Accéder à la boutique</a>

</div>


</section>

<?php get_footer(); ?>