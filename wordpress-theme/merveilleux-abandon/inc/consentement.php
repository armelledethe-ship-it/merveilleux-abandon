<?php
/**
 * Consentement aux cookies (CNIL) : Google Analytics, pixel Meta et lecteurs externes
 * ne se chargent qu'après accord. Refuser est aussi simple qu'accepter.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const MA_GA_ID    = 'G-PRLFL2EME9';
const MA_PIXEL_ID = '825558830139542';

/* Iframes de tiers : la source est mise de côté jusqu'au consentement. */
add_filter( 'the_content', function ( $html ) {
	if ( is_admin() || false === stripos( $html, '<iframe' ) ) {
		return $html;
	}
	$own = wp_parse_url( home_url(), PHP_URL_HOST );
	return preg_replace_callback( '#<iframe([^>]*?)\ssrc="(https?://[^"]+)"([^>]*)></iframe>#i', function ( $m ) use ( $own ) {
		$host = wp_parse_url( $m[2], PHP_URL_HOST );
		if ( ! $host || $host === $own ) {
			return $m[0];
		}
		$label = preg_replace( '/^(www|open|embed)\./', '', $host );
		return '<div class="ma-iframe-attente"><iframe' . $m[1] . ' data-ma-src="' . esc_attr( $m[2] ) . '"' . $m[3] . '></iframe>'
			. '<button type="button" class="ma-iframe-accord">Écouter : j’accepte les cookies de ' . esc_html( $label ) . '</button></div>';
	}, $html );
}, 20 );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'ma-consentement', get_theme_file_uri( 'assets/js/consentement.js' ), array(), wp_get_theme()->get( 'Version' ), array( 'in_footer' => true, 'strategy' => 'defer' ) );
	wp_localize_script( 'ma-consentement', 'MA_CONSENT', array( 'ga' => MA_GA_ID, 'pixel' => MA_PIXEL_ID ) );
} );

add_action( 'wp_footer', function () {
	?>
<div class="ma-cookies" role="dialog" aria-live="polite" aria-label="Cookies" hidden>
	<p>Ce site utilise des cookies pour mesurer son audience (Google Analytics, Meta) et pour lire les podcasts hébergés ailleurs (Spotify, Acast, Apple, RCF). Rien n’est déposé sans votre accord. <a href="/mentions-legales/#cookies">En savoir plus</a></p>
	<div class="ma-cookies-boutons">
		<button type="button" data-ma-consent="none" class="ma-cookies-refus">Tout refuser</button>
		<button type="button" data-ma-consent="all" class="ma-cookies-accord">Tout accepter</button>
	</div>
</div>
	<?php
} );
