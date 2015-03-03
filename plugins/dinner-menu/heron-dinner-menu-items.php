<?php
/*
Plugin Name: Dinner Menu
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant menu items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_dinner_menu_item' );

function create_dinner_menu_item() {
    register_post_type( 'dinner_menu_items',
        array(
            'labels' => array(
                'name' => 'Dinner Menu',
                'singular_name' => 'Dinner Menu Item',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Dinner Menu Item',
                'edit' => 'Edit',
                'edit_item' => 'Edit Dinner Menu Item',
                'new_item' => 'New Dinner Menu Item',
                'view' => 'View',
                'view_item' => 'View Dinner Menu Item',
                'search_items' => 'Search Dinner Menu Items',
                'not_found' => 'No Dinner Menu Items found',
                'not_found_in_trash' => 'No Dinner Menu Items found in Trash',
                'parent' => 'Parent Dinner Menu Item'
            ),
 
            'public' => true,
            'menu_position' => 4,
            'supports' => array( 'title' ),
            'has_archive' => true
        )
    );
}
?>
