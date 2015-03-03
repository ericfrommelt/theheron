<?php
/*
Plugin Name: Wine & Cocktail Menu
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant menu items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_wine_menu_item' );

function create_wine_menu_item() {
    register_post_type( 'wine_menu_items',
        array(
            'labels' => array(
                'name' => 'Wine & Cocktail Menu',
                'singular_name' => 'Wine & Cocktail Menu Item',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Wine & Cocktail Menu Item',
                'edit' => 'Edit',
                'edit_item' => 'Edit Wine & Cocktail Menu Item',
                'new_item' => 'New Wine & Cocktail Menu Item',
                'view' => 'View',
                'view_item' => 'View Wine & Cocktail Menu Item',
                'search_items' => 'Search Wine & Cocktail Menu Items',
                'not_found' => 'No Wine & Cocktail Menu Items found',
                'not_found_in_trash' => 'No Wine & Cocktail Menu Items found in Trash',
                'parent' => 'Parent Wine & Cocktail Menu Item'
            ),
 
            'public' => true,
            'menu_position' => 4,
            'supports' => array( 'title' ),
            'has_archive' => true,
			'show_ui' => true
        )
    );
}
?>
