<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


add_action( 'save_post', 'cfa_form_save' );

function cfa_form_save( $post_id ) {

if( current_user_can('editor') || current_user_can('administrator') ) {
	

	$post_type = get_post_type($post_id);
// If this isn't a 'sfba_subscribe_form' post, don't update it.
	if ( 'cfa_contact_form' != $post_type ) {
		return;
	}

// Stop WP from clearing custom fields on autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
		return;
	}

// Prevent quick edit from clearing custom fields
	if (defined('DOING_AJAX') && DOING_AJAX){
		return;
	}

	if ( isset( $_REQUEST['cfa_name'] ) ) {
		update_post_meta($post_id, '_cfa_name', TRUE);
	} else {
		update_post_meta($post_id, '_cfa_name', FALSE);
	}

	if ( isset( $_REQUEST['cfa_email'] ) ) {
		update_post_meta($post_id, '_cfa_email', TRUE);
	} else {
		update_post_meta($post_id, '_cfa_email', FALSE);
	}

	if ( isset( $_REQUEST['cfa_subject'] ) ) {
		update_post_meta($post_id, '_cfa_subject', TRUE);
	} else {
		update_post_meta($post_id, '_cfa_subject', FALSE);
	}

	if ( isset( $_REQUEST['cfa_phone'] ) ) {
		update_post_meta($post_id, '_cfa_phone', TRUE);
	} else {
		update_post_meta($post_id, '_cfa_phone', FALSE);
	}

	if ( isset( $_REQUEST['cfa_message'] ) ) {
		update_post_meta($post_id, '_cfa_message', TRUE);
	} else {
		update_post_meta($post_id, '_cfa_message', FALSE);
	}
	if ( isset( $_POST['cfa_container_bg0'] ) ) {
		update_post_meta( $post_id, '_cfa_container_bg0', sanitize_text_field( $_POST['cfa_container_bg0'] ) );
	}
		if ( isset( $_POST['cfa_container_bg1'] ) ) {
		update_post_meta( $post_id, '_cfa_container_bg1', sanitize_text_field( $_POST['cfa_container_bg1'] ) );
	}
			if ( isset( $_POST['cfa_form_div_style'] ) ) {
		update_post_meta( $post_id, '_cfa_form_div_style', sanitize_text_field( $_POST['cfa_form_div_style'] ) );
	}
			if ( isset( $_POST['cfa_input_field_style'] ) ) {
		update_post_meta( $post_id, '_cfa_input_field_style', sanitize_text_field( $_POST['cfa_input_field_style'] ) );
	}
				if ( isset( $_POST['cfa_heading_style'] ) ) {
		update_post_meta( $post_id, '_cfa_heading_style', sanitize_text_field( $_POST['cfa_heading_style'] ) );
	}
		if ( isset( $_POST['cfa_submit_style'] ) ) {
		update_post_meta( $post_id, '_cfa_submit_style', sanitize_text_field( $_POST['cfa_submit_style'] ) );
	}
	    if ( isset( $_POST['cfa_message_style'] ) ) {
		update_post_meta( $post_id, '_cfa_message_style', sanitize_text_field( $_POST['cfa_message_style'] ) );
	}
		if ( isset( $_POST['cfa_border_radius_style'] ) ) {
		update_post_meta( $post_id, '_cfa_border_radius_style', sanitize_text_field( $_POST['cfa_border_radius_style'] ) );
	}
			if ( isset( $_POST['cfa_send_mail'] ) ) {
		update_post_meta( $post_id, '_cfa_send_mail', sanitize_text_field( $_POST['cfa_send_mail'] ) );
	}

		if ( isset( $_POST['cfa_value'] ) ) {
		update_post_meta( $post_id, '_cfa_value', sanitize_text_field( $_POST['cfa_value'] ) );
	}
}
}