<?php
  $titre_1   = get_sub_field('titre_1');
  $contenu_1 = get_sub_field('texte_1');
  $titre_2   = get_sub_field('titre_2');
  $contenu_2 = get_sub_field('texte_2');
  $titre_3   = get_sub_field('titre_3');
  $contenu_3 = get_sub_field('texte_3');
 ?>
 <section class="container">
   <div class="col-md-4">
     <img src="<?= $titre_1['url'] ?>" alt="" />
     <p><?= $contenu_1?></p>
   </div>
   <div class="col-md-4">
     <img src="<?= $titre_2['url'] ?>" alt="" />
     <p><?= $contenu_2?></p>
   </div>
   <div class="col-md-4">
     <img src="<?= $titre_3['url'] ?>" alt="" />
     <p><?= $contenu_3?></p>
   </div>
 </section>
