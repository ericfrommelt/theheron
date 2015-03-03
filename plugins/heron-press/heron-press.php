<?php
/*
Plugin Name: Heron Press
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant press items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_press_entry' );

function create_press_entry() {
    register_post_type( 'press_entries',
        array(
            'labels' => array(
                'name' => 'Heron Press',
                'singular_name' => 'Press Entry',
                'add_new' => 'Add New',
                'add_new_item' => 'Add Press Entry',
                'edit' => 'Edit',
                'edit_item' => 'Edit Press Entry',
                'new_item' => 'New Press Entry',
                'view' => 'View',
                'view_item' => 'View Press Entry',
                'search_items' => 'Search Press Entries',
                'not_found' => 'No Press Entries found',
                'not_found_in_trash' => 'No Press Entries found in Trash',
                'parent' => 'Parent Press Entry'
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
