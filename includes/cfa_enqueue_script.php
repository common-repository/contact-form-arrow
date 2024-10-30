<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


function cfa_add_ajax_file() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('MyAjax',plugins_url('../js/cfa_ajax_script.js',__FILE__),array('jquery'),true);
	wp_localize_script( 'MyAjax', 'MyAjax', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-script',  plugin_dir_url(__FILE__) .'../js/cfa_cp.js', array( 'wp-color-picker' ), false, true );
}
add_action('wp_enqueue_scripts','cfa_add_ajax_file');
add_action('admin_enqueue_scripts','cfa_add_ajax_file');