<?php

add_action( 'init', 'prefix_portfolio_register_meta' );

function prefix_portfolio_register_meta() {

	/* Register post meta (note: you might want to alter the callbacks). */

	register_meta( 'post', 'project_url',        'esc_url_raw', '__return_false' );
	register_meta( 'post', 'project_client',     'strip_tags',  '__return_false' );
	register_meta( 'post', 'project_location',   'strip_tags',  '__return_false' );
	register_meta( 'post', 'project_start_date', 'strip_tags',  '__return_false' );
	register_meta( 'post', 'project_end_date',   'strip_tags',  '__return_false' );
}
