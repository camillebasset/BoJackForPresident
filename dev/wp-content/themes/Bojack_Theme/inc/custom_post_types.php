<?php
add_action('init', 'create_custom_post_type_actualites');

function create_custom_post_type_actualites(){
  
  $labels = array(
        'name'               => 'Actualités',
        'singular_name'      => 'actualite',
        'all_items'          => 'Toutes les actualités',
        'add_new'            => 'Ajouter une actualité',
        'add_new_item'       => 'Ajouter une nouvelle actualié',
        'edit_item'          => "Modifier l'actualité",
        'new_item'           => 'Nouvelle actualité',
        'view_item'          => "Voir l'actualité",
        'search_items'       => 'Rechercher une actualité',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'actualite parente:',
        'menu_name'          => 'Actualités',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => -1,
        'menu_icon'           => 'dashicons-media-spreadsheet',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'actualite' ),
        'capabilities' => array(
                          'publish_posts' => 'publish_actualite',
                          'edit_posts' => 'edit_actualite',
                          'edit_others_posts' => 'edit_others_actualite',
                          'delete_posts' => 'delete_actualite',
                          'delete_others_posts' => 'delete_others_actualite',
                          'read_private_posts' => 'read_private_actualite',
                          'edit_post' => 'edit_actualite',
                          'delete_post' => 'delete_actualite',
                          'read_post' => 'read_actualite'
                              ),

    );
    register_post_type( 'actualite', $args );
}

add_action('init', 'create_custom_post_type_slides');

function create_custom_post_type_slides(){
  
    $labels = array(
        'name'               => 'Slides',
        'singular_name'      => 'Slide',
        'all_items'          => 'Toutes les slides',
        'add_new'            => 'Ajouter une slide',
        'add_new_item'       => 'Ajouter une nouvelle slide',
        'edit_item'          => "Modifier la slide",
        'new_item'           => 'Nouvelle slide',
        'view_item'          => "Voir la slide",
        'search_items'       => 'Rechercher une slide',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Slide parente:',
        'menu_name'          => 'Slider',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-tickets-alt',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'slide' ),
    );
    register_post_type( 'slide', $args );
}