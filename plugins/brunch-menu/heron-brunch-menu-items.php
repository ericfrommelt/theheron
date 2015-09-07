<?php
/*
Plugin Name: Brunch Menu
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant menu items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_brunch_menu_item' );

function create_brunch_menu_item() {
    register_post_type( 'brunch_menu_items',
        array(
            'labels' => array(
                'name' => 'Brunch Menu',
                'singular_name' => 'Brunch Menu Item',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Brunch Menu Item',
                'edit' => 'Edit',
                'edit_item' => 'Edit Brunch Menu Item',
                'new_item' => 'New Brunch Menu Item',
                'view' => 'View',
                'view_item' => 'View Brunch Menu Item',
                'search_items' => 'Search Brunch Menu Items',
                'not_found' => 'No Brunch Menu Items found',
                'not_found_in_trash' => 'No Brunch Menu Items found in Trash',
                'parent' => 'Parent Brunch Menu Item'
            ),

            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title' ),
            'has_archive' => true
        )
    );
}
?>
