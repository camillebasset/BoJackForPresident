<?php
add_action('init', 'create_custom_taxonomy');
function create_custom_taxonomy(){
  $args = array(
          'label' => 'Catégorie actualite',
          'rewrite' => array( 'slug' => 'categorie-actualite' ),
          'hierarchical' => true,
      );
  register_taxonomy( 
    'categorie-actualite',
    array('actualite'),
     $args ); 
  
  $args2 = array(
          'label' => 'Mots-clés actualite',
          'rewrite' => array( 'slug' => 'mots-cles-actualite' ),
          'hierarchical' => false,
      );
  register_taxonomy( 
    'mots-cles-actualite',
    array('actualite'),
     $args2 ); 
}