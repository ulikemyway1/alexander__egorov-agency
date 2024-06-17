<?php

/**
 * Register block script
 */

add_action( 'init', function() {
	$template_dir = get_template_directory_uri();

	wp_register_script(
		'block-kerr',
		$template_dir . hm_assets_bundle( 'js/blocks/block-kerr.js' ),
		array( 'jquery', 'acf' )
	);
});
