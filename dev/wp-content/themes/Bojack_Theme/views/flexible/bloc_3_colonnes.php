<?php
  $titre_1   = get_sub_field('titre_1');
  $contenu_1 = get_sub_field('texte_1');
  $titre_2   = get_sub_field('titre_2');
  $contenu_2 = get_sub_field('texte_2');
  $titre_3   = get_sub_field('titre_3');
  $contenu_3 = get_sub_field('texte_3');
 ?>
 <section class="container">
 <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="fa fa-birthday-cake" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Enfant</h4>
              <img src="<?= $titre_1['url'] ?>" alt="" />
            </div>
            <div class="timeline-body">
              <p><?= $contenu_1?></p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Adolescent</h4>
              <img src="<?= $titre_2['url'] ?>" alt="" />
            </div>
            <div class="timeline-body">
              <p><?= $contenu_2?></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Adulte</h4>
              <img src="<?= $titre_3['url'] ?>" alt="" />
            </div>
            <div class="timeline-body">
              <p><?= $contenu_3?></p>
            </div>
          </div>
        </li>
    </ul>
 </section>