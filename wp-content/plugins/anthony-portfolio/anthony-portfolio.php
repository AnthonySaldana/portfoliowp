<?php
/*
Plugin Name: Anthony Portfolio
Description: A WP Portfolio plugin developed by Anthony Saldana. Create and manage a professional portfolio with ease!
version: 1.0
Author: Anthony Saldana
Author URI: http://anthonysaldana.com
License: GPLv2 or later
Text Domain: portfolio_app
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

		add_action( 'init', 'create_table' );
		function create_table(){
			global $wpdb;
			$table_name = $wpdb->prefix . 'anthony_portfolio';
			$charset_collate = $wpdb->get_charset_collate();
			$name = 'tsting it';
			$sql = "CREATE TABLE $table_name (
			id INT NOT NULL AUTO_INCREMENT,
			time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
			group_name VARCHAR(40) NOT NULL,
			UNIQUE KEY id (id)
			)";
			$wpdb->query($sql);
		}
			
		//Now to add the admin_menu action hook
		add_action( 'admin_menu', 'create_portfolio_menu' );
		function create_portfolio_menu(){
			$slug = plugin_basename( __FILE__ );
			add_menu_page("Anthony's Portfolio", "Anthony's Portfolio", 0, "anthony_portfolio", "");
			add_submenu_page( 'anthony_portfolio','Portfolio Option', 'Create Group','manage-options',__FILE__,'my_plugin_options' );
		
			function my_plugin_options() {
				if ( !current_user_can( 'manage_options' ) )  {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
				?>
				<center>
            <h1>Add Menu</h1>
                <label for="name">Add a New Menu to the site: </label><br/>
                <input type="text" id="name" name="name" placeholder="Enter Menu Name"/>
                <div id="myDiv"><h2>Let AJAX change this text</h2></div>
                <button class="btn btn-info" onclick="anthonyportfolioajax()">Add New Menu</button>
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script>
                function anthonyportfolioajax()
                {
                    var name = $('#name').val();
                    var data = {
							'action': 'process_add',
							'name': name
                            };
                    $.post( ajaxurl, data, function(response ){
                            var mes = "Menu has been added Successfully";
                            $("#myDiv").text( mes );
                            var name = $('#name').val();
                            alert(ajaxurl);
                            console.log(response);
                        }
                    );
                }
            </script>
        </center>
				<?php
			}
		
		}
		
		add_action('init','register_portfolio_app');
			
		function register_portfolio_app(){
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
					'menu_name' => __('Arbfolio', 'portfolio_app'),
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
					'show_in_menu' => 'anthony_portfolio',
					'query_var' => true,
					'can_export' => true,
					'rewrite' => true,
					'capability_type' => 'post'
			);
			register_post_type('anthony-portfolio', $args);
		}
