<?php

add_action( 'init', 'prefix_portfolio_register_taxonomies' );

function prefix_portfolio_register_taxonomies() {

	/* Register the Portfolio Category taxonomy. */

	register_taxonomy(
		'portfolio_category',
		array( 'portfolio_project' ),
		array(
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var'         => 'portfolio_category',

			/* Capabilities. */
			'capabilities' => array(
				'manage_terms' => 'manage_portfolio',
				'edit_terms'   => 'manage_portfolio',
				'delete_terms' => 'manage_portfolio',
				'assign_terms' => 'edit_portfolio_projects',
			),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'         => 'portfolio/category',
				'with_front'   => false,
				'hierarchical' => true,
				'ep_mask'      => EP_NONE
			),

			/* Labels used when displaying taxonomy and terms. */
			'labels' => array(
				'name'                       => __( 'Project Categories', 'example-textdomain' ),
				'singular_name'              => __( 'Project Category',   'example-textdomain' ),
				'menu_name'                  => __( 'Categories',         'example-textdomain' ),
				'name_admin_bar'             => __( 'Category',           'example-textdomain' ),
				'search_items'               => __( 'Search Categories',  'example-textdomain' ),
				'popular_items'              => __( 'Popular Categories', 'example-textdomain' ),
				'all_items'                  => __( 'All Categories',     'example-textdomain' ),
				'edit_item'                  => __( 'Edit Category',      'example-textdomain' ),
				'view_item'                  => __( 'View Category',      'example-textdomain' ),
				'update_item'                => __( 'Update Category',    'example-textdomain' ),
				'add_new_item'               => __( 'Add New Category',   'example-textdomain' ),
				'new_item_name'              => __( 'New Category Name',  'example-textdomain' ),
				'parent_item'                => __( 'Parent Category',    'example-textdomain' ),
				'parent_item_colon'          => __( 'Parent Category:',   'example-textdomain' ),
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
