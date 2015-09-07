<?php
/*
Plugin Name: Cider & Beer Menu
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant menu items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_beer_menu_item' );

function create_beer_menu_item() {
    register_post_type( 'beer_menu_items',
        array(
            'labels' => array(
                'name' => 'Cider & Beer Menu',
                'singular_name' => 'Cider & Beer Menu Item',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Cider & Beer Menu Item',
                'edit' => 'Edit',
                'edit_item' => 'Edit Cider & Beer Menu Item',
                'new_item' => 'New Cider & Beer Menu Item',
                'view' => 'View',
                'view_item' => 'View Cider & Beer Menu Item',
                'search_items' => 'Search Cider & Beer Menu Items',
                'not_found' => 'No Cider & Beer Menu Items found',
                'not_found_in_trash' => 'No Cider & Beer Menu Items found in Trash',
                'parent' => 'Parent Cider & Beer Menu Item'
            ),

            'public' => true,
            'menu_position' => 7,
            'supports' => array( 'title' ),
            'has_archive' => true,
			'show_ui' => true
        )
    );
}
?>
