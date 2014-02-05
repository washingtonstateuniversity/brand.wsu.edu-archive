<?php

function brand_scripts() {
	wp_enqueue_script(
		'stellar.js',
		get_stylesheet_directory_uri() . '/scripts/jquery.stellar.min.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'brand_scripts' );

?>