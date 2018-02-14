<?php

if( ! function_exists('xapi_setup_options') ){

	function xapi_setup_options(){
		
		update_option( 'xapi_verblist', array('read', 'watch'));
		
	}

}