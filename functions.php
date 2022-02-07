<?php

function delatorre() {
	add_theme_support('menus');
	register_nav_menu('header-menu','Header Menu');
	register_nav_menu('footer-menu','Footer Menu');
}

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 315,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img' );
define( 'THEME_CSS_PATH', get_stylesheet_directory_uri() . '/css' );
define( 'THEME_JS_PATH', get_stylesheet_directory_uri() . '/js' );

 add_theme_support( 'post-thumbnails' );