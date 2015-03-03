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

add_action( 'init', 'create_news_entry' );

function create_beer_menu_item() {
    register_post_type( 'news_entries',
        array(
            'labels' => array(
                'name' => 'News',
                'singular_name' => 'News Entry',
                'add_new' => 'Add New',
                'add_new_item' => 'Add News Entry',
                'edit' => 'Edit',
                'edit_item' => 'Edit News Entry',
                'new_item' => 'New News Entry',
                'view' => 'View',
                'view_item' => 'View News Entry',
                'search_items' => 'Search News Entries',
                'not_found' => 'No News Entries found',
                'not_found_in_trash' => 'No News Entries found in Trash',
                'parent' => 'Parent News Entry'
            ),
 
            'public' => true,
            'menu_position' => 2,
            'supports' => array( 'title' ),
            'has_archive' => true,
			'show_ui' => true
        )
    );
}
?>
