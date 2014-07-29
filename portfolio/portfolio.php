<?php

add_action( 'init', 'prefix_register_portfolio_content_type' );

function prefix_register_portfolio_content_type() {

	register_post_type(
		'project',
		array()
	);

	/* Register taxonomy. */
}
