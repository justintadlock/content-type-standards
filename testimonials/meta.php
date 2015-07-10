<?php

add_action( 'init', 'prefix_testimonials_register_meta' );

function prefix_testimonials_register_meta() {

	/* Register post meta (note: you might want to alter the callbacks). */

	register_meta( 'post', 'email', 'strip_tags',  '__return_false' );
	register_meta( 'post', 'url',   'esc_url_raw', '__return_false' );
}
