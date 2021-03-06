<?php
/**
 * JKL Grammar - Register Post Types.
 *
 * @package JKL Grammar
 */

// Prevent direct file access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register a custom post type called "Grammar".
 *
 * @see get_post_type_labels() for label keys.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 */
function jkl_grammar_register_post_type() {

	$labels = array(
		'name'                  => _x( 'Grammar', 'Post type general name', 'jkl-grammar' ),
		'singular_name'         => _x( 'Grammar', 'Post type singular name', 'jkl-grammar' ),
		'menu_name'             => _x( 'Grammar', 'Admin Menu text', 'jkl-grammar' ),
		'name_admin_bar'        => _x( 'Grammar', 'Add New on Toolbar', 'jkl-grammar' ),
		'add_new'               => __( 'Add New', 'jkl-grammar' ),
		'add_new_item'          => __( 'Add New Grammar Point', 'jkl-grammar' ),
		'new_item'              => __( 'New Grammar Point', 'jkl-grammar' ),
		'edit_item'             => __( 'Edit Grammar Point', 'jkl-grammar' ),
		'view_item'             => __( 'View Grammar Point', 'jkl-grammar' ),
		'all_items'             => __( 'All Grammar Points', 'jkl-grammar' ),
		'search_items'          => __( 'Search Grammar Points', 'jkl-grammar' ),
		'parent_item_colon'     => __( 'Base Grammar Point:', 'jkl-grammar' ),
		'not_found'             => __( 'No Grammar Points found.', 'jkl-grammar' ),
		'not_found_in_trash'    => __( 'No Grammar Points found in Trash.', 'jkl-grammar' ),
		'featured_image'        => _x( 'Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'jkl-grammar' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'jkl-grammar' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'jkl-grammar' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'jkl-grammar' ),
		'archives'              => _x( 'Grammar Archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'jkl-grammar' ),
		'insert_into_item'      => _x( 'Insert into Grammar Point', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'jkl-grammar' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Grammar Point', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'jkl-grammar' ),
		'filter_items_list'     => _x( 'Filter Grammar Points list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'jkl-grammar' ),
		'items_list_navigation' => _x( 'Grammar Points list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'jkl-grammar' ),
		'items_list'            => _x( 'Grammar Points list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'jkl-grammar' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'rest_base'          => 'grammar',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'grammar' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'data:image/svg+xml;base64,' . base64_encode( '<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M1591 1448q56 89 21.5 152.5t-140.5 63.5h-1152q-106 0-140.5-63.5t21.5-152.5l503-793v-399h-64q-26 0-45-19t-19-45 19-45 45-19h512q26 0 45 19t19 45-19 45-45 19h-64v399zm-779-725l-272 429h712l-272-429-20-31v-436h-128v436z"/></svg>' ),
		'supports'           => array( 'title', 'subtitles', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		// 'taxonomies'         => array( 'post_tag' ),
	);

	register_post_type( 'jkl-grammar', $args );

}
add_action( 'init', 'jkl_grammar_register_post_type' );
