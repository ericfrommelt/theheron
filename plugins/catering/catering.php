<?php
/*
Plugin Name: Heron Catering
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying catering images.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_catering_entry' );

function create_catering_entry() {
    register_post_type( 'catering_entries',
        array(
            'labels' => array(
                'name' => 'Catering',
                'singular_name' => 'Catering Entry',
                'add_new' => 'Add New',
                'add_new_item' => 'Add Catering Entry',
                'edit' => 'Edit',
                'edit_item' => 'Edit Catering Entry',
                'new_item' => 'New Catering Entry',
                'view' => 'View',
                'view_item' => 'View Catering Entry',
                'search_items' => 'Search Catering Entries',
                'not_found' => 'No Catering Entries found',
                'not_found_in_trash' => 'No Catering Entries found in Trash',
                'parent' => 'Parent Catering Entry'
            ),

            'public' => true,
            'menu_position' => 6,
            'supports' => array( 'title' ),
            'has_archive' => true,
			'show_ui' => true
        )
    );
}
?>
