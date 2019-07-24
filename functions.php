<?php

/**
 * Register menus
 */
add_action('init', function() {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu'
        )
    );
});

include_once( get_template_directory() . '/includes/hidden.php' );
include_once( get_template_directory() . '/includes/wp_bootstrap_navwalker.php');
