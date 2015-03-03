<?php
/*
Plugin Name: Suppliers
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying restaurant Suppliers items.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_suppliers_entry' );

function create_Suppliers_entry() {
    register_post_type( 'suppliers_entries',
        array(
            'labels' => array(
                'name' => 'Suppliers',
                'singular_name' => 'Suppliers Entry',
                'add_new' => 'Add New',
                'add_new_item' => 'Add Suppliers Entry',
                'edit' => 'Edit',
                'edit_item' => 'Edit Suppliers Entry',
                'new_item' => 'New Suppliers Entry',
                'view' => 'View',
                'view_item' => 'View Suppliers Entry',
                'search_items' => 'Search Suppliers Entries',
                'not_found' => 'No Suppliers Entries found',
                'not_found_in_trash' => 'No Suppliers Entries found in Trash',
                'parent' => 'Parent Suppliers Entry'
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
