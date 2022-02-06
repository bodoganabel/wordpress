<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'vw_theme_style' );
				function vw_theme_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */


function wpb_widgets_init() {

	register_sidebar(
		array (  
			'name'          => 'Left Sidebar',
			'id'            => 'sidebar-left',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	
	register_sidebar(
		array (  
			'name'          => 'Right Sidebar',
			'id'            => 'sidebar-right',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	
	}
	
add_action( 'widgets_init', 'wpb_widgets_init' );
	