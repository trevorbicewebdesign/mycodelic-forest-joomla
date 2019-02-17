<?php
add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
	load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}
function theme_enqueue_styles()
{
	$production_mode = ot_get_option('_uncode_production');
	$resources_version = ($production_mode === 'on') ? null : rand();
	$parent_style = 'uncode-style';
	$child_style = array('uncode-custom-style');
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
require_once(dirname(__FILE__).'/partials/headers.php');
require_once(dirname(__FILE__).'/partials/menus.php');

add_filter( 'gform_notification_1', 'change_user_notification_attachments', 10, 3 );
function change_user_notification_attachments( $notification, $form, $entry ) {
	$attachments = array();
	//Change 'your-file.pdf' to your file name.
	
	print_r($notification);
	die();

	$i = 1;
	while($entry['6.'.$i]){
		$selections[] = sanitize_title($entry['6.'.$i]);
		$i++;
	}
	
	foreach($selections as $index=>$selection){
		if(file_exists(ABSPATH. '/wp-content/uploads/product_pdf/'.$selection.'_Spec_Sheet.pdf')) {
			$attachments[] = ABSPATH. '/wp-content/uploads/product_pdf/'.$selection.'_Spec_Sheet.pdf';
		}
	}

	foreach( $notification as $note ) {
		/*
		* Attach the file to all notifications for this form.
		* (Write this within if-statement(s) if you only want to attach the file to some of the notifications.)
		*/
		$notification['attachments'] = $attachments;
	}
	return $notification;
}