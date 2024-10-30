<?php
/*
Plugin Name: Contact Form Arrow
Plugin URI: https://wordpress.org/plugins/contact-form-arrow
Description: Make a contact form and show fields which you like. 
Author: Arrow Plugins
Author URI: https://www.arrowplugins.com
Version: 1.0
License: GplV2
Copyright: 2017 Arrow Plugins
*/

include_once ('includes/cfa_post_type.php');
include_once ('includes/cfa_save_setting.php');
include_once ('shortcode/cfa_shortcode.php');
include_once ('includes/cfa_enqueue_script.php');

add_action('wp_ajax_cfa_send_email', 'cfa_send_email');
add_action('wp_ajax_nopriv_cfa_send_email', 'cfa_send_email');


function cfa_send_email(){
    $name = cfa_sanitize_options($_POST['dname']);
    $email = cfa_sanitize_options($_POST['demail']);
    $subject = cfa_sanitize_options($_POST['dsubject']);
    $phone = cfa_sanitize_options($_POST['dphone']);
    $message = cfa_sanitize_options($_POST['dmessage']);
    $send_email = cfa_sanitize_options($_POST['dmail']);
    $blog_name = get_bloginfo( 'name' );
    $blog_email = get_bloginfo( 'admin_email' );
    $headers = 'From: ' .$blog_name.' <'.$blog_email.'>'. "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to = $send_email;
    $subject = 'New Subscriber from Popup Plugin by Arrow Plugin';
    $message = 'Subscriber Name: '.$name.'<br/>Subscriber Email: '.$email;
    mail($to,$subject,$message,$headers);
    wp_die();
}