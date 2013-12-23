<?php
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