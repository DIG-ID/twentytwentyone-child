<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}


function digid_head() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}

add_action( 'wp_head', 'digid_head' );