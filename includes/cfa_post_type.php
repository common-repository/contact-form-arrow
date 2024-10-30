<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


add_action( 'init', 'cfa_contact_form_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cfa_contact_form_init() {
	$labels = array(
		'name'               => _x( 'CFA Contact Form', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'CFA Contact Form', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'CFA Contact Form', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'CFA Contact Form', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'contact form', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Contact Form', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Contact Form', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Contact Form', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Contact Form', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Contact Forms', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Contact Forms', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Contact Forms:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No contact forms found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No contact forms found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cfa_contact_form' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'custom_fields')
	);

	register_post_type( 'cfa_contact_form', $args );
}

function cfa_contact_form5() {

    $scr = get_current_screen();
    
    if( $scr-> post_type !== 'cfa_contact_form' )
        return;

    include_once( 'cfa_setting_page.php' );
}

add_action( 'edit_form_after_title', 'cfa_contact_form5' );