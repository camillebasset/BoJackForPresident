<?php

// CREATION CUSTOM POST TYPES
include_once('inc/custom_post_types.php');

// CREATION TAXONOMIES
include_once('inc/taxonomies.php');

// CREATION ROLES
include_once('inc/roles.php');

// CREATION STYLES SCRIPTS
include_once('inc/scripts_styles.php');

// THEME SUPPORT
include_once('inc/theme_support.php');

//AJAX
include_once('inc/ajax.php');

function the_excerpt_max_charlength($charlength) {
   $excerpt = get_the_excerpt();
   $charlength++;
   if(strlen($excerpt)>$charlength) {
	   $subex = substr($excerpt,0,$charlength-5);
	   $exwords = explode(" ",$subex);
	   $excut = -(strlen($exwords[count($exwords)-1]));
	   if($excut<0) {
			echo substr($subex,0,$excut);
	   } else {
			echo $subex;
	   }
	   echo "[...]";
   } else {
	   echo $excerpt;
   }
}













