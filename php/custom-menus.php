<?php

// Register menus
add_action('after_setup_theme', 'gmuj_register_menus');

function gmuj_register_menus(){

    // Register menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'university' => 'University Menu',
        'prominent' => 'Prominent Links Menu',
        'calls-to-action' => 'Calls-to-Action Menu'
    ));

}