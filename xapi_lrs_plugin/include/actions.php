<?php

/**
 * TinCan Script added when logged in user views posts
 */

if( ! function_exists('load_xapi_lrs_js') ){
	
	function xapi_load_lrs_js(){

		global $xapi_lrs_root;
		global $post;

		$current_user = wp_get_current_user();

		$realname = 'John Doe'; 
		$email = 'johndoe@email.com';
        // Defaults to John Doe if post is public or user is not logged in

		if( $current_user->ID > 0 ){
			$realname = $current_user->user_firstname . ' ' . $current_user->user_lastname;
			$email = $current_user->user_email;
		}

		if( strlen($realname) == 0 ){
			$realname = $current_user->user_nicename;
		}

		$options = get_option( 'xapi_lrs_options' );

		wp_enqueue_script( 'TinCanJs', $xapi_lrs_root .'/assets/js/TinCanJS/build/tincan-min.js', array('jquery'), false, $in_footer = true );
		wp_enqueue_script( 'xapi_lrs_js', $xapi_lrs_root .'/assets/js/xapi_lrs.js', array('jquery'), false, $in_footer = true );
		wp_localize_script( 'xapi_lrs_js', 'xapi_lrs', array(
			'user_email'=> $email, 
			'user_realname'=> $realname,
			'post'=> $post,
			'post_url' => get_permalink( $post->ID ),
			'post_id'=> $post->ID,
			'verb' => xapi_get_verb($post->ID),
			'url_iri' => xapi_get_url($post->ID),
			'xapi_username' => $options['xapi_username'],
			'xapi_password' => $options['xapi_password'],
			'xapi_endpoint' => $options['xapi_endpoint']
		) );
	}

}

if( ! function_exists('xapi_admin_scripts') ){

	function xapi_admin_scripts($hook) {

			global $xapi_lrs_root;
	    
	    if ( 'post.php' != $hook ) {
	        return;
	    }

	    wp_enqueue_script( 'xapi_awesomeplete', $xapi_lrs_root .'/assets/js/awesomeplete/awesomplete.js' );
	    wp_enqueue_style( 'xapi_awesomeplete', $xapi_lrs_root .'/assets/js/awesomeplete/awesomplete.css' );
	}
}

add_action( 'admin_enqueue_scripts', 'xapi_admin_scripts' );

if( ! function_exists('xapi_get_verb') ){

	function xapi_get_verb($post_id){

		$current_verb = get_post_meta( $post_id, 'xapi_verb', true );

		return $current_verb;

	}

}

if( ! function_exists('xapi_get_url') ){

	function xapi_get_url($post_id){

		$current_url = get_post_meta( $post_id, 'xapi_url', true );

		return $current_url;

	}

}

if( ! function_exists('xapi_lrs_send_statement') ){

	function xapi_lrs_send_statement(){

		$post_type = get_post_type();

		switch ($post_type) {
			case 'post':
			case 'page':
				xapi_load_lrs_js();
				break;
		}
	}

}

add_action('the_post', 'xapi_lrs_send_statement');

/**
 * Meta Box Added to Posts and Pages
 */

if( !function_exists('xapi_metabox_html') ){

	function xapi_metabox_html(){

		$current_verb = xapi_get_verb($_GET['post']);

		$current_url = xapi_get_url($_GET['post']);

		$verblist = get_option( 'xapi_verblist', $default = false );

		ob_start();
		
		include dirname(__DIR__) . '/templates/xapi_metabox_html.php';
		
		$html = ob_get_clean();
		
		echo $html;

	}
}

if( !function_exists('xapi_add_custom_box') ){

	function xapi_add_custom_box()	{
	    $screens = ['post', 'page'];

	    foreach ($screens as $screen) {
	        add_meta_box(
	            'xapi_'.$screen.'_meta_box',           // Unique ID
	            'xAPI Verb',  // Box title
	            'xapi_metabox_html',  // Content callback, must be of type callable
	            $screen,
	            'side',
	            'high'
	        );
	    }
	}

}

add_action('add_meta_boxes', 'xapi_add_custom_box');

if( ! function_exists('xapi_save_postdata') ){

	function xapi_save_postdata($post_id){

	  if (array_key_exists('xapi_verb', $_POST)) {

  		$verblist = get_option( 'xapi_verblist', false );

  		array_push($verblist, strtolower($_POST['xapi_verb']));

  		$verblist = array_unique($verblist);

  		update_option( 'xapi_verblist', $verblist );

      update_post_meta(
          $post_id,
          'xapi_verb',
          strtolower($_POST['xapi_verb'])
      );

      update_post_meta(
          $post_id,
          'xapi_url',
          $_POST['xapi_url']
      );
    }

	}

}

add_action('save_post', 'xapi_save_postdata');

/**
 * Hook it into Wordpress
 */
add_action('admin_menu', 'xapi_lrs_menu_pages'); 

/**
 * Place all the add_menu_page functions in here
 */
function xapi_lrs_menu_pages(){

	add_menu_page( 'xAPI Settings', 'xAPI Settings', 'manage_options', 'xapi_settings', 'xapi_lrs_admin_page' );

}

/**
 * Admin page function
 */
function xapi_lrs_admin_page(){

	$message = NULL;

	$options = array();

	if ( !current_user_can( 'manage_options' ) )  {
	
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );	
	}

	if( isset( $_POST['publish'] ) ){

		update_option( 'xapi_lrs_options', $_POST );

		$_POST['message'] = '<span style="color: #00b718;">Settings saved successfully</span>';
	}

	$options = get_option('xapi_lrs_options');
	
	ob_start(); 

	include dirname(__DIR__) . '/views/xapi_lrs_admin_page.php'; 

	$template = ob_get_clean();

	echo $template;
}

function sample_admin_notice__error() {

	$options = get_option( 'xapi_lrs_options', $default = false );

	$all_empty = ( empty($options['xapi_endpoint']) || empty($options['xapi_username']) || empty($options['xapi_password']) );

	if( $options == false || $all_empty ){

		$class = 'notice notice-error';

		$message = __( 'Thank you for activating the xAPI LRS Plugin. Please update the <a href="'.site_url( '/' ).'/wp-admin/admin.php?page=xapi_settings">xAPI LRS Settings</a> form.<br /> 
			<span style="color: #666; font-style: italic; font-size: 0.98em;">Note: If you are still seeing this alert after filling this out, please refresh the page.</span>', 'xapi-lrs-alert' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message ); 

	}
}

add_action( 'admin_notices', 'sample_admin_notice__error' );