<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function beepo_career_widgets() {

	register_sidebar( array(
		'name'          => 'Home Page Header Contact Info',
		'id'            => 'home_page_header_contact_info',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Careers Page Header Contact Info',
		'id'            => 'careers_page_header_contact_info',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer First Column',
		'id'            => 'beepo_career_footer_first_column',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Second Column',
		'id'            => 'beepo_career_footer_second_column',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Third Column',
		'id'            => 'beepo_career_footer_third_column',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );	
}

add_action( 'widgets_init', 'beepo_career_widgets' );
?>