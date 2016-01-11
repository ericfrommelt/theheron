<?php
/*
Plugin Name: Contact
Plugin URI: http://theheronrestaurant.com/
Description: Declares a plugin that will create a custom post type displaying contct information.
Version: 1.0
Author: Eric Frommelt
Author URI: http://ericfrommelt.com/
License: GPLv2
*/

add_action( 'init', 'create_contact_entry' );

function create_Contact_entry() {
    register_post_type( 'contact_entries',
        array(
            'labels' => array(
                'name' => 'Contact',
                'singular_name' => 'Contact Entry',
                'add_new' => 'Add New',
                'add_new_item' => 'Add Contact Entry',
                'edit' => 'Edit',
                'edit_item' => 'Edit Contact Entry',
                'new_item' => 'New Contact Entry',
                'view' => 'View',
                'view_item' => 'View Contact Entry',
                'search_items' => 'Search Contact Entries',
                'not_found' => 'No Contact Entries found',
                'not_found_in_trash' => 'No Contact Entries found in Trash',
                'parent' => 'Parent Contact Entry'
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
