<?php
//http://codex.wordpress.org/Theme_Customization_API
/* =============================================================================
    Styles / Scripts
============================================================================= */
/* -----------------------------------------------------------------------------
    Styles
----------------------------------------------------------------------------- */
function docile_styles_scripts() {
    wp_enqueue_style( 'docile-roboto', '//fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Roboto+Condensed:400italic,700italic,400,700&subset=latin,latin-ext,cyrillic,cyrillic-ext', array(), '0.0.1', 'all' );
    wp_enqueue_style( 'docile-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '0.0.1', 'all' );
    wp_enqueue_style( 'docile-normalize', get_template_directory_uri() . '/css/normalize.css', array(), '0.0.1', 'all' );
    wp_enqueue_style( 'docile-grido', get_template_directory_uri() . '/css/grido.css', array(), '0.0.1', 'all' );
    wp_enqueue_style( 'docile-main', get_template_directory_uri() . '/css/docile.css', array(), '0.0.1', 'all' );
    wp_enqueue_style( 'docile-style', get_template_directory_uri() . '/css/style.css', array(), '0.0.1', 'all' );
    
    wp_enqueue_script( 'docile-script', get_template_directory_uri() . '/js/script.js', array(), '0.0.1', true );
}
/* -----------------------------------------------------------------------------
    Activate
----------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'docile_styles_scripts' );
/* =============================================================================
    Custom Menus
============================================================================= */
/* -----------------------------------------------------------------------------
    Main menu
----------------------------------------------------------------------------- */
function register_docile_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_docile_menu' );
/* =============================================================================
    Widgets
============================================================================= */
/* -----------------------------------------------------------------------------
    Sidebar widget
----------------------------------------------------------------------------- */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id'   => 'sidebar-widgets',
        'description'   => 'Sidebar Widget Area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
        )
    );
/* -----------------------------------------------------------------------------
    Footer widgets
----------------------------------------------------------------------------- */    
    register_sidebar( array(
    	'name' => 'Footer left',
    	'id' => 'footer-widgets-left',
    	'description'   => 'Footer Left Widget Area',
    	'before_widget' => '<div>',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
	    )
	);
	
	register_sidebar( array(
    	'name' => 'Footer middle',
    	'id' => 'sidebar-widgets-middle',
    	'description'   => 'Footer Middle Widget Area',
    	'before_widget' => '<div>',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
	    )
	);
	
	register_sidebar( array(
    	'name' => 'Footer right',
    	'id' => 'sidebar-widgets-right',
    	'description'   => 'Footer Right Widget Area',
    	'before_widget' => '<div>',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
	    )
	);
}
?>