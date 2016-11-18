<?php
/*
Plugin Name: JulieKuehl.com
Description: A custom plugin for the JulieKuehl.com website
Version:     201611
Author:      JulieKuehl
Author URI:  https://juliekuehl.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Register custom post types
 */
add_action( 'init', 'kuehl_register_cpts' );
function kuehl_register_cpts() {
	$labels = array(
		"name" => __( 'Resumes', 'forward' ),
		"singular_name" => __( 'Resume', 'forward' ),
		"menu_name" => __( 'Resume', 'forward' ),
		"all_items" => __( 'All Resumes', 'forward' ),
		"add_new" => __( 'Add New', 'forward' ),
		"add_new_item" => __( 'Add New Resume', 'forward' ),
		"edit_item" => __( 'Edit Resume', 'forward' ),
		"new_item" => __( 'New Resume', 'forward' ),
		"view_item" => __( 'View Resume', 'forward' ),
		"search_items" => __( 'Search Resume', 'forward' ),
		"not_found" => __( 'No Resumes Found', 'forward' ),
		"not_found_in_trash" => __( 'No Resumes Found In Trash', 'forward' ),
	);

	$args = array(
		"label" => __( 'Resumes', 'forward' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "resume", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-media-spreadsheet",
		"supports" => array( "title", "revisions" ),
		"taxonomies" => array( "category", "post_tag" ),
	);
	register_post_type( "resume", $args );

	$labels = array(
		"name" => __( 'Portfolio', 'forward' ),
		"singular_name" => __( 'Portfolio', 'forward' ),
		"menu_name" => __( 'Portfolio', 'forward' ),
		"all_items" => __( 'All Portfolios', 'forward' ),
		"add_new" => __( 'Add New', 'forward' ),
		"add_new_item" => __( 'Add New Portfolio', 'forward' ),
		"edit_item" => __( 'Edit Portfolio', 'forward' ),
		"new_item" => __( 'New Portfolio Item', 'forward' ),
		"view_item" => __( 'View Portfolio', 'forward' ),
		"search_items" => __( 'Search Portfolio', 'forward' ),
		"not_found" => __( 'No Portfolios Found', 'forward' ),
		"not_found_in_trash" => __( 'No Portfolios Found In Trash', 'forward' ),
		"archives" => __( 'Portfolio List', 'forward' ),
		"insert_into_item" => __( 'Insert into portfolio', 'forward' ),
		"filter_items_list" => __( 'Filter portfolio list', 'forward' ),
		"items_list_navigation" => __( 'Portfolio items navigation', 'forward' ),
		"items_list" => __( 'Portfolio list', 'forward' ),
	);

	$args = array(
		"label" => __( 'Portfolio', 'forward' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => array( "title", "revisions" ),
		"taxonomies" => array( "category", "post_tag" ),
	);
	register_post_type( "portfolio", $args );

	$labels = array(
		"name" => __( 'Presentations', 'forward' ),
		"singular_name" => __( 'Presentation', 'forward' ),
		"menu_name" => __( 'Presentations', 'forward' ),
		"all_items" => __( 'All Presentations', 'forward' ),
		"add_new" => __( 'Add New', 'forward' ),
		"add_new_item" => __( 'Add New Presentation', 'forward' ),
		"edit_item" => __( 'Edit Presentation', 'forward' ),
		"new_item" => __( 'New Presentation', 'forward' ),
		"view_item" => __( 'View Presentation', 'forward' ),
		"search_items" => __( 'Search Presentation', 'forward' ),
		"not_found" => __( 'No Presentations Found', 'forward' ),
		"not_found_in_trash" => __( 'No Presentations Found In Trash', 'forward' ),
	);

	$args = array(
		"label" => __( 'Presentations', 'forward' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "presentations", "with_front" => true ),
		"query_var" => true,

		"supports" => array( "title", "revisions" ),
		"taxonomies" => array( "category", "post_tag" ),
	);
	register_post_type( "presentations", $args );

	$labels = array(
		"name" => __( 'Resources', 'forward' ),
		"singular_name" => __( 'Resource', 'forward' ),
		"menu_name" => __( 'Resources', 'forward' ),
		"all_items" => __( 'All Resources', 'forward' ),
		"add_new_item" => __( 'Add New Resource', 'forward' ),
		"edit_item" => __( 'Edit Resource', 'forward' ),
		"new_item" => __( 'New Resource', 'forward' ),
		"view_item" => __( 'View Resource', 'forward' ),
		"search_items" => __( 'Search Resource', 'forward' ),
		"not_found" => __( 'No Resources Found', 'forward' ),
		"not_found_in_trash" => __( 'No Resources Found In Trash', 'forward' ),
	);

	$args = array(
		"label" => __( 'Resources', 'forward' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "resources", "with_front" => true ),
		"query_var" => true,

		"supports" => array( "title", "revisions" ),
		"taxonomies" => array( "category", "post_tag" ),
	);
	register_post_type( "resources", $args );

// End of kuehl_register_cpts()
}
