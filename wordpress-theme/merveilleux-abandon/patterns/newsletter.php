<?php
/**
 * Title: Newsletter (20 premières pages)
 * Slug: merveilleux-abandon/newsletter
 * Categories: merveilleux-abandon
 * Description: Inscription à la newsletter Brevo avec l'extrait offert.
 */
$ma_brevo = 'https://5a2988f1.sibforms.com/serve/MUIFAEtdg7HAYpHBubES44O6JVy6EpMBNEFAIVJ1UCdm4PGBZTATxk4tiz1p9cnx1ngXtWBo5V_us1fasTP5ZQEFG0ywB1ZCJp28sq2DI1Ga8CeMZMc39i5MwRr_QGrXafZ9WCdO0agkanJjatHwS7ZxBSf60C8DBylLK9eTC7dZTdaAEdy_o1o9PhvRpnBFdUu8aE3py2tnnSs6VQ==';
?>
<!-- wp:group {"align":"full","backgroundColor":"creme","style":{"spacing":{"padding":{"top":"88px","bottom":"88px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-creme-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:88px;padding-bottom:88px">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center" id="newsletter">Recevez les 20 premières pages du livre</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","fontSize":"grand"} -->
<p class="has-text-align-center has-grand-font-size">Puis, chaque mois, une lettre : un témoignage, ce que j'en retiens, et mes prochaines dates.</p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<iframe name="ma-brevo" title="Inscription newsletter" style="display:none"></iframe>
<form class="ma-nl" action="<?php echo esc_url( $ma_brevo ); ?>" method="POST" target="ma-brevo" onsubmit="var f=this;setTimeout(function(){f.reset();f.querySelector('.ma-nl-ok').hidden=false;},600);">
	<div class="ma-nl-champs">
		<label class="screen-reader-text" for="ma-nl-prenom">Votre prénom</label>
		<input id="ma-nl-prenom" type="text" name="PRENOM" placeholder="Votre prénom" required>
		<label class="screen-reader-text" for="ma-nl-nom">Votre nom</label>
		<input id="ma-nl-nom" type="text" name="NOM" placeholder="Votre nom" required>
		<label class="screen-reader-text" for="ma-nl-email">Votre adresse e-mail</label>
		<input id="ma-nl-email" type="email" name="EMAIL" placeholder="Votre adresse e-mail" required>
		<button type="submit">Je m'inscris</button>
	</div>
	<p class="ma-nl-mention">Désinscription en un clic. Votre adresse n'est jamais partagée.</p>
	<p class="ma-nl-ok" hidden role="status">Merci ! Vérifiez votre boîte mail pour confirmer votre inscription.</p>
</form>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
