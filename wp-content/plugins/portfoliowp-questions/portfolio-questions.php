<?php
/*
Plugin Name: portfolio Q&A
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
        'name' =>__('Questions', 'portfolio_questions'),
	    'singular_name'=>__('Questions' , 'portfolio_questions'),
        'add_new' => __('Add New' , 'portfolio_questions'),
        'add_new_item' => __('Add New Questions', 'portfolio_questions'),
        'edit_item' => __('Edit Questions', 'portfolio_questions'),
        'new_item' => __('New Quesion', 'portfolio_questions'),
        'view_item' => __('View Questions', 'portfolio_questions'),
        'search_items' => __('Search Questions', 'portfolio_questions'),
        'not_found' => __('No Questions Found', 'portfolio_questions'),
        'not_found_in_trash' => __('No Questions found in Trash', 'portfolio_questions'),
        'parent_item_colon' => __('Parent Questions', 'portfolio_questions'),
        'menu_name' => __('Portfolio Questions', 'portfolio_questions'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => __( 'Questions and Answers', 'portfolio_quesionts'),
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
    register_post_type('portfolio_questions', $args);
}
