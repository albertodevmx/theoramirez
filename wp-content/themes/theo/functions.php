<?php

function register_my_menus() {
  register_nav_menus(
    array( 'menu-principal' => __( 'Menu Bridexperts' ) )
  );
}
add_action( 'init', 'register_my_menus' );




if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );







function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Mis widgets',
		'id' => 'widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );




function counter_widgets_init() {
	register_sidebar( array(
		'name' => 'widget-counter',
		'id' => 'widget-count',
		'before_widget' => '<div> Número de Visitas: ',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'counter_widgets_init' );


function mis_widgets_init() {
	register_sidebar( array(
		'name' => 'widget-mios',
		'id' => 'widget-mios',
		'before_widget' => '<div class="widgetsmios">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'mis_widgets_init' );





?>