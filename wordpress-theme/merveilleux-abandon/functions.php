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
		'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,300;0,400;0,500;1,300;1,400&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap',
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
		'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,300;0,400;0,500;1,300;1,400&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap',
		array(),
		null
	);
} );

require_once get_theme_file_path( 'inc/consentement.php' );

/* Catégorie de compositions propre au site. */
add_action( 'init', function () {
	register_block_pattern_category( 'merveilleux-abandon', array( 'label' => 'Merveilleux Abandon' ) );
} );

/* « Lire aussi » : exclut l'article affiché, privilégie sa catégorie. */
add_filter( 'query_loop_block_query_vars', function ( $query, $block ) {
	/* Le bloc « Lire aussi » du modèle d'article porte le queryId 3. */
	if ( 3 !== (int) ( $block->context['queryId'] ?? 0 ) || ! is_singular( 'post' ) ) {
		return $query;
	}
	$current               = get_queried_object_id();
	$query['post__not_in'] = array( $current );
	$query['ignore_sticky_posts'] = true;
	$same = get_posts( array(
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'post__not_in'   => array( $current ),
		'category__in'   => wp_get_post_categories( $current ),
		'fields'         => 'ids',
	) );
	if ( count( $same ) >= 3 ) {
		$query['post__in'] = $same;
		$query['orderby']  = 'post__in';
	}
	return $query;
}, 10, 2 );
