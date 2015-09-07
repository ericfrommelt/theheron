<?php
/*
Plugin Name: Hours
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant hours items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_hours_entry' );

function create_hours_entry() {
    register_post_type( 'hours_entries',
        array(
            'labels' => array(
                'name' => 'Hours',
                'singular_name' => 'Hours Entry',
                'add_new' => 'Add New',
                'add_new_item' => 'Add Hours Entry',
                'edit' => 'Edit',
                'edit_item' => 'Edit Hours Entry',
                'new_item' => 'New Hours Entry',
                'view' => 'View',
                'view_item' => 'View Hours Entry',
                'search_items' => 'Search Hours Entries',
                'not_found' => 'No Hours Entries found',
                'not_found_in_trash' => 'No Hours Entries found in Trash',
                'parent' => 'Parent Hours Entry'
            ),

            'public' => true,
            'menu_position' => 10,
            'supports' => array( 'title' ),
            'has_archive' => true,
			'show_ui' => true
        )
    );
}
?>
