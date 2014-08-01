<?php

add_action( 'init', 'prefix_portfolio_register_taxonomies' );

function prefix_portfolio_register_taxonomies() {

	/* Register the Portfolio Type taxonomy. */

	register_taxonomy(
		'portfolio_type',
		array( 'portfolio_project' ),
		array(
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var'         => 'portfolio_type',

			'capabilities' => array(
				'manage_terms' => 'manage_portfolio',
				'edit_terms'   => 'manage_portfolio',
				'delete_terms' => 'manage_portfolio',
				'assign_terms' => 'edit_portfolio_projects',
			),

			'rewrite' => array(
				'slug'         => 'portfolio/type',
				'with_front'   => false,
				'hierarchical' => true,
				'ep_mask'      => EP_NONE
			),

			'labels' => array(
				'name'                       => __( 'Project Types', 'example-textdomain' ),
				'singular_name'              => __( 'Project Type',  'example-textdomain' ),
				'menu_name'                  => __( 'Types',         'example-textdomain' ),
				'name_admin_bar'             => __( 'Type',          'example-textdomain' ),
				'search_items'               => __( 'Search Types',  'example-textdomain' ),
				'popular_items'              => __( 'Popular Types', 'example-textdomain' ),
				'all_items'                  => __( 'All Types',     'example-textdomain' ),
				'edit_item'                  => __( 'Edit Type',     'example-textdomain' ),
				'view_item'                  => __( 'View Type',     'example-textdomain' ),
				'update_item'                => __( 'Update Type',   'example-textdomain' ),
				'add_new_item'               => __( 'Add New Type',  'example-textdomain' ),
				'new_item_name'              => __( 'New Type Name', 'example-textdomain' ),
				'parent_item'                => __( 'Parent Type',   'example-textdomain' ),
				'parent_item_colon'          => __( 'Parent Type:',  'example-textdomain' ),
				'separate_items_with_commas' => null,
				'add_or_remove_items'        => null,
				'choose_from_most_used'      => null,
				'not_found'                  => null,
			)
		)
	);

	/* Register the Portfolio Tag taxonomy. */

	register_taxonomy(
		'portfolio_tag',
		array( 'portfolio_project' ),
		array(
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'query_var'         => 'portfolio_tag',

			/* Capabilities. */
			'capabilities' => array(
				'manage_terms' => 'manage_portfolio',
				'edit_terms'   => 'manage_portfolio',
				'delete_terms' => 'manage_portfolio',
				'assign_terms' => 'edit_portfolio_projects',
			),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'         => 'portfolio/tag',
				'with_front'   => false,
				'hierarchical' => false,
				'ep_mask'      => EP_NONE
			),

			/* Labels used when displaying taxonomy and terms. */
			'labels' => array(
				'name'                       => __( 'Project Tags',                   'example-textdomain' ),
				'singular_name'              => __( 'Project Tag',                    'example-textdomain' ),
				'menu_name'                  => __( 'Tags',                           'example-textdomain' ),
				'name_admin_bar'             => __( 'Tag',                            'example-textdomain' ),
				'search_items'               => __( 'Search Tags',                    'example-textdomain' ),
				'popular_items'              => __( 'Popular Tags',                   'example-textdomain' ),
				'all_items'                  => __( 'All Tags',                       'example-textdomain' ),
				'edit_item'                  => __( 'Edit Tag',                       'example-textdomain' ),
				'view_item'                  => __( 'View Tag',                       'example-textdomain' ),
				'update_item'                => __( 'Update Tag',                     'example-textdomain' ),
				'add_new_item'               => __( 'Add New Tag',                    'example-textdomain' ),
				'new_item_name'              => __( 'New Tag Name',                   'example-textdomain' ),
				'separate_items_with_commas' => __( 'Separate tags with commas',      'example-textdomain' ),
				'add_or_remove_items'        => __( 'Add or remove tags',             'example-textdomain' ),
				'choose_from_most_used'      => __( 'Choose from the most used tags', 'example-textdomain' ),
				'not_found'                  => __( 'No tags found',                  'example-textdomain' ),
				'parent_item'                => null,
				'parent_item_colon'          => null,
			)
		)
	);
}
