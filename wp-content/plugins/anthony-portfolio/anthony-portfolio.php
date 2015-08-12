<?php
/*
Plugin Name: Anthony's Portfolio App
Plugin URI: -
Description: Q & A interface
version: 1.0
Author: Anthony Saldana
License: GPLv2 or later
Text Domain: portfolio-questions
*/

add_action('init','register_portfolio_questions');

function register_portfolio_questions(){
	$labels = array(
        'name' =>__('Portfolio App', 'portfolio_app'),
	    'singular_name'=>__('Portfolio App' , 'portfolio_app'),
        'add_new' => __('Add New' , 'portfolio_app'),
        'add_new_item' => __('Add New Project', 'portfolio_app'),
        'edit_item' => __('Edit Project', 'portfolio_app'),
        'new_item' => __('New Project', 'portfolio_app'),
        'view_item' => __('View Project', 'portfolio_app'),
        'search_items' => __('Search Projects', 'portfolio_app'),
        'not_found' => __('No Items Found', 'portfolio_app'),
        'not_found_in_trash' => __('No Projects found in Trash', 'portfolio_app'),
        'menu_name' => __('Anthony\'s Portfolio App', 'portfolio_app'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => __( 'Anthony\s wp portfolio plugin.', 'portfolio_app'),
	  'supports' => array( 'title', 'editor', 'comments' ),
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'show_in_nav_menus' => true,
	  'publicly_queryable' => true,
	  'exclude_from_search' => false,
	  'has_archive' => true,
	  'query_var' => true,
	  'can_export' => true,
	  'rewrite' => true,
	  'capability_type' => 'post'
    );
    register_post_type('portfolio_app', $args);
}
