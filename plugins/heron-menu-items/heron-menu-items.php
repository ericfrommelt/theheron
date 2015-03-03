<?php
/*
Plugin Name: Heron Menu Items
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant menu items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_menu_item' );

function create_menu_item() {
    register_post_type( 'menu_items',
        array(
            'labels' => array(
                'name' => 'Menu Items',
                'singular_name' => 'Menu Item',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Menu Item',
                'edit' => 'Edit',
                'edit_item' => 'Edit Menu Item',
                'new_item' => 'New Menu Item',
                'view' => 'View',
                'view_item' => 'View Menu Item',
                'search_items' => 'Search Menu Items',
                'not_found' => 'No Menu Items found',
                'not_found_in_trash' => 'No Menu Items found in Trash',
                'parent' => 'Parent Menu Item'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title' ),
            'taxonomies' => array( 'category' ),
            'has_archive' => true
        )
    );
}
?>
