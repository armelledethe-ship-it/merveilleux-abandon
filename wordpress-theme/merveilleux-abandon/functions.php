<?php
/**
 * Merveilleux Abandon — fonctions du thème.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', function () {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'assets/css/theme.css' );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'ma-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=DM+Sans:wght@400;500;700&family=Playfair+Display:ital,wght@0,600;1,500&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'ma-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
} );

add_action( 'enqueue_block_editor_assets', function () {
	wp_enqueue_style(
		'ma-fonts-editor',
		'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=DM+Sans:wght@400;500;700&family=Playfair+Display:ital,wght@0,600;1,500&display=swap',
		array(),
		null
	);
} );

/* Catégorie de compositions propre au site. */
add_action( 'init', function () {
	register_block_pattern_category( 'merveilleux-abandon', array( 'label' => 'Merveilleux Abandon' ) );
} );
