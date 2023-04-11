<?php
/*
Plugin Name: CertifyWP: Plugin to Install
Plugin URI: https://certifywp.com/
Description: Adds a sentence to the beginning of the post content.
Version: 1.0
Author: CertifyWP
Author URI: https://certifywp.com/
*/

function certifywp_test_filter( $content ) {
	if ( is_single() ) {
		$content = '<p style="background-color: lightgrey;">CertifyWP test plugin is working!</p>' . $content;
	}

	return $content;
}
add_filter( 'the_content', 'certifywp_test_filter' );
