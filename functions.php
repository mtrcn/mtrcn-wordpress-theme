<?php
define( 'MTRCN_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu',  'mtrcn'),
		'social'	=>	__( 'Social Links',  'mtrcn'),
	)
);

function mtrcn_scripts()  { 
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');	 
}

add_action( 'wp_enqueue_scripts', 'mtrcn_scripts' );


require get_template_directory() . '/inc/social-icon-functions.php';