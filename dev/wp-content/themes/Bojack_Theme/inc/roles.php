<?php
add_action('after_switch_theme', 'create_new_role');
function create_new_role(){
  add_role(
      'internaute',
      'Internaute',
      array(
          'read'         => true,  // true allows this capability
          'publish_actualite' => true,
          'edit_actualite' => true,
          'read_actualite' => true,
          'delete_actualite'    => true,
          'edit_others_actualite' => false,
          'create_actualites' => true,
          'read_actualite'    => true,
        
        
         // Use false to explicitly deny
      )
  );
  
    $role = get_role( 'administrator');
    $role->add_cap('edit_actualite');
    $role->add_cap('edit_actualites');
    $role->add_cap('create_actualites');
    $role->add_cap('publish_actualite');
    $role->add_cap('edit_others_actualite');
    $role->add_cap('publish_other_actualites');
    $role->add_cap('read_actualite');



    

}
    $role = get_role( 'administrator');
$role->add_cap('edit_membre');
