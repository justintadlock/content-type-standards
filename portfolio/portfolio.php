<?php

add_action( 'init', 'prefix_register_portfolio_content_type' );

function prefix_register_portfolio_content_type() {

	/* Register meta. */
	register_meta( 'post', '_project_url',        'esc_url_raw', '__return_true' );
	register_meta( 'post', '_project_media',      'strip_tags',  '__return_true' );
	register_meta( 'post', '_project_client',     'strip_tags',  '__return_true' );
	register_meta( 'post', '_project_location',   'strip_tags',  '__return_true' );
	register_meta( 'post', '_project_start_date', 'strip_tags',  '__return_true' );
	register_meta( 'post', '_project_end_date',   'strip_tags',  '__return_true' );

	/* Register post types. */
	register_post_type(
		'portfolio_project',
		array()
	);

	/* Register taxonomies. */
}
