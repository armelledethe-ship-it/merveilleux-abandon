<?php
/**
 * Connexion Gandi (Authorizer, OAuth2) : le client Gandi ID n'accepte que l'adresse de retour
 * enregistrée à l'installation, sur nouveau.merveilleuxabandon.fr. Ce sous-domaine renvoie
 * (301, avec ses paramètres) vers merveilleuxabandon.fr, où la connexion se termine.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_filter( 'site_url', function ( $url, $path ) {
	if ( is_string( $path ) && false !== strpos( $path, 'external=oauth2' ) ) {
		return 'http://nouveau.merveilleuxabandon.fr/' . ltrim( $path, '/' );
	}
	return $url;
}, 10, 2 );
