<?php

add_action( 'init', 'prefix_register_example_content_type' );

function prefix_register_example_content_type() {

	register_post_type(
		'post_type_name',
		array()
	);

	register_taxonomy(
		'taxonomy_name',
		array( 'post_type_name' ),
		array()
	);
}
