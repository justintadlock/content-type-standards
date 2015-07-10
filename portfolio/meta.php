<?php

add_action( 'init', 'prefix_portfolio_register_meta' );

function prefix_portfolio_register_meta() {

	/* Register post meta (note: you might want to alter the callbacks). */

	register_meta( 'post', 'url',        'esc_url_raw', '__return_false' );
	register_meta( 'post', 'client',     'strip_tags',  '__return_false' );
	register_meta( 'post', 'location',   'strip_tags',  '__return_false' );
	register_meta( 'post', 'start_date', 'strip_tags',  '__return_false' );
	register_meta( 'post', 'end_date',   'strip_tags',  '__return_false' );
}
