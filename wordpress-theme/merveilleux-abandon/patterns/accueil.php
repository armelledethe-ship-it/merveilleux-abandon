<?php
/**
 * Title: Accueil Merveilleux Abandon
 * Slug: merveilleux-abandon/accueil
 * Categories: merveilleux-abandon
 * Description: Page d'accueil complète.
 */
$img = function ( $f ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $f ) );
};
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"56px","bottom":"48px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:56px;padding-bottom:48px">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"56px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
<!-- wp:paragraph {"className":"ma-surtitre"} -->
<p class="ma-surtitre">La blessure d'abandon, racontée par celle qui l'a vécue</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.06"}}} -->
<h1 class="wp-block-heading" style="line-height:1.06">Nous avons tous été abandonnés un jour. Moi, c'était le jour de ma naissance.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#2E3E5A"}},"fontSize":"grand"} -->
<p class="has-text-color has-grand-font-size" style="color:#2E3E5A">Je suis Armelle de Thé. Je raconte mon histoire, je donne la parole à celles et ceux qui ont traversé un abandon, et je vous restitue ce que j'en ai appris. Pour qu'un deuil, une rupture ou un licenciement deviennent un nouveau départ.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"16px","margin":{"top":"24px"}}}} -->
<div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/comprendre/">Comprendre la blessure d'abandon</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/ecouter/">Écouter les témoignages</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
<!-- wp:html -->
<figure class="ma-duo-bloc" style="margin:0">
	<div class="ma-duo">
		<figure><img src="<?php echo $img( 'hotel-dieu-dos-nb.jpg' ); ?>" alt="Armelle de dos, s'éloignant dans la galerie de l'Hôtel-Dieu" style="object-position:center 35%"></figure>
		<figure><img src="<?php echo $img( 'hotel-dieu-portrait.jpg' ); ?>" alt="Armelle de face sous les arcades de l'Hôtel-Dieu" style="object-position:center 40%"></figure>
	</div>
	<figcaption>Hôtel-Dieu de Paris, où je suis née le 27 juin 1967. Photos Sophie Thouvenin.</figcaption>
</figure>
<!-- /wp:html -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"nuit","textColor":"blanc","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-blanc-color has-nuit-background-color has-text-color has-background" style="margin-top:0;padding-top:48px;padding-bottom:48px">
<!-- wp:paragraph {"textColor":"corail-clair","fontFamily":"signature","style":{"typography":{"fontStyle":"italic","fontSize":"1.375rem"}}} -->
<p class="has-corail-clair-color has-text-color has-signature-font-family" style="font-size:1.375rem;font-style:italic">Abandonner · Donner · Transmettre</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"24px"}}}} -->
<div class="wp-block-columns" style="margin-top:24px">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"textColor":"corail-clair","style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p class="has-corail-clair-color has-text-color" style="font-size:0.875rem;font-weight:700">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"blanc","style":{"typography":{"fontSize":"2rem"}}} -->
<h2 class="wp-block-heading has-blanc-color has-text-color" style="font-size:2rem">Je témoigne</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"}}} -->
<p class="has-text-color" style="color:#D5DCE8">Née sous X, placée en orphelinat, adoptée. J'ai mis cinquante ans à regarder cette histoire en face. Je la raconte sans fard, dans mon livre et sur scène.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"textColor":"corail-clair","style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p class="has-corail-clair-color has-text-color" style="font-size:0.875rem;font-weight:700">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"blanc","style":{"typography":{"fontSize":"2rem"}}} -->
<h2 class="wp-block-heading has-blanc-color has-text-color" style="font-size:2rem">Je donne la parole</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"}}} -->
<p class="has-text-color" style="color:#D5DCE8">Dans L'Après et dans la rue, je demande aux autres ce que leurs abandons leur ont pris, et ce qu'ils leur ont donné.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"textColor":"corail-clair","style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p class="has-corail-clair-color has-text-color" style="font-size:0.875rem;font-weight:700">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"blanc","style":{"typography":{"fontSize":"2rem"}}} -->
<h2 class="wp-block-heading has-blanc-color has-text-color" style="font-size:2rem">Je restitue</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"}}} -->
<p class="has-text-color" style="color:#D5DCE8">Ce que j'apprends de moi et des autres, je vous le transmets. En articles, en conférences, en vidéos.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"56px","bottom":"56px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:56px;padding-bottom:56px">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"12px"},"layout":{"selfStretch":"fixed","flexSize":"720px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"ma-surtitre"} -->
<p class="ma-surtitre">Comprendre</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">La blessure d'abandon, chacun la porte</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#2E3E5A"}},"fontSize":"grand"} -->
<p class="has-text-color has-grand-font-size" style="color:#2E3E5A">Elle ne commence pas toujours à la naissance. Un deuil, une séparation, un poste perdu suffisent à la réveiller. Voici ce que j'ai compris en la traversant.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><a href="/comprendre/">Tous les articles →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":2,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false},"style":{"spacing":{"margin":{"top":"28px"}}}} -->
<div class="wp-block-query" style="margin-top:28px">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"280px"},"style":{"spacing":{"blockGap":"32px"}}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
<!-- wp:post-terms {"term":"category","className":"ma-surtitre","style":{"typography":{"fontSize":"0.8125rem"}}} /-->
<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontSize":"1.5rem","lineHeight":"1.25"}}} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"creme","style":{"spacing":{"padding":{"top":"56px","bottom":"56px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-creme-background-color has-background" style="margin-top:0;padding-top:56px;padding-bottom:56px">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"56px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
<?php
$ma_v = get_page_by_path( 'l-apres-episode', OBJECT, 'attachment' );
$ma_p = get_page_by_path( 'l-apres-episode-affiche', OBJECT, 'attachment' );
if ( $ma_v ) :
	$ma_vurl = esc_url( wp_get_attachment_url( $ma_v->ID ) );
	$ma_purl = $ma_p ? esc_url( wp_get_attachment_url( $ma_p->ID ) ) : '';
?>
<!-- wp:video {"id":<?php echo (int) $ma_v->ID; ?>,"className":"ma-video-verticale"} -->
<figure class="wp-block-video ma-video-verticale"><video controls playsinline preload="metadata" poster="<?php echo $ma_purl; ?>" src="<?php echo $ma_vurl; ?>"></video></figure>
<!-- /wp:video -->
<?php else : ?>
<!-- wp:paragraph {"align":"center","backgroundColor":"nuit","textColor":"blanc","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}},"border":{"radius":"4px"}}} -->
<p class="has-text-align-center has-blanc-color has-nuit-background-color has-text-color has-background" style="border-radius:4px;padding-top:120px;padding-bottom:120px">L'Après, bientôt ici.</p>
<!-- /wp:paragraph -->
<?php endif; ?>
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
<!-- wp:paragraph {"className":"ma-surtitre"} -->
<p class="ma-surtitre">Écouter · L'Après</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Qu'est-ce que ton abandon t'a donné ?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#2E3E5A"}},"fontSize":"grand"} -->
<p class="has-text-color has-grand-font-size" style="color:#2E3E5A">Dans L'Après, je pose la même question à chaque invité. Ce qu'il a perdu, ce qu'il en a fait, ce qu'il veut transmettre. Des conversations vraies, sans filtre.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"nuit"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-nuit-background-color has-background wp-element-button" href="/ecouter/">Voir tous les épisodes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:64px;padding-bottom:64px">
<!-- wp:paragraph {"align":"center","className":"ma-surtitre"} -->
<p class="has-text-align-center ma-surtitre">Le Registre des abandons</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Et vous, quel abandon avez-vous traversé ?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#2E3E5A"}},"fontSize":"grand"} -->
<p class="has-text-align-center has-text-color has-grand-font-size" style="color:#2E3E5A">Une naissance, un divorce, un départ, un licenciement. Déposez quelques lignes, signées ou anonymes. Chaque récit est lu avant d'être publié.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/registre/">Déposer mon histoire</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"nuit","textColor":"blanc","style":{"spacing":{"padding":{"top":"56px","bottom":"56px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-blanc-color has-nuit-background-color has-text-color has-background" style="margin-top:0;padding-top:56px;padding-bottom:56px">
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"56px"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:paragraph {"className":"ma-surtitre"} -->
<p class="ma-surtitre">Conférences et interventions</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"blanc","style":{"typography":{"fontSize":"2.5rem","lineHeight":"1.15"}}} -->
<h2 class="wp-block-heading has-blanc-color has-text-color" style="font-size:2.5rem;line-height:1.15">« Arrête de croire qu'on t'a abandonné, tu t'es juste oublié en route. »</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"}},"fontSize":"grand"} -->
<p class="has-text-color has-grand-font-size" style="color:#D5DCE8">Une conférence-témoignage sur l'identité, la perte et ce qu'on peut en faire. Pour vos équipes, vos adhérents, vos patients ou votre public.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/conferences/">Demander une intervention</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"170px"},"style":{"spacing":{"blockGap":"16px"}}} -->
<div class="wp-block-group">
<!-- wp:group {"className":"ma-carte-public","layout":{"type":"default"}} -->
<div class="wp-block-group ma-carte-public"><!-- wp:heading {"level":3,"textColor":"blanc","fontFamily":"texte","style":{"typography":{"fontSize":"1.125rem"}}} -->
<h3 class="wp-block-heading has-blanc-color has-text-color has-texte-font-family" style="font-size:1.125rem">Entreprises</h3>
<!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"},"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-text-color" style="color:#D5DCE8;font-size:0.9375rem">Perte d'emploi, transformation, deuil au travail.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ma-carte-public","layout":{"type":"default"}} -->
<div class="wp-block-group ma-carte-public"><!-- wp:heading {"level":3,"textColor":"blanc","fontFamily":"texte","style":{"typography":{"fontSize":"1.125rem"}}} -->
<h3 class="wp-block-heading has-blanc-color has-text-color has-texte-font-family" style="font-size:1.125rem">Santé et social</h3>
<!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"},"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-text-color" style="color:#D5DCE8;font-size:0.9375rem">Maternités, protection de l'enfance, soignants.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ma-carte-public","layout":{"type":"default"}} -->
<div class="wp-block-group ma-carte-public"><!-- wp:heading {"level":3,"textColor":"blanc","fontFamily":"texte","style":{"typography":{"fontSize":"1.125rem"}}} -->
<h3 class="wp-block-heading has-blanc-color has-text-color has-texte-font-family" style="font-size:1.125rem">Associations</h3>
<!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"},"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-text-color" style="color:#D5DCE8;font-size:0.9375rem">Adoption, origines, accompagnement du deuil.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ma-carte-public","layout":{"type":"default"}} -->
<div class="wp-block-group ma-carte-public"><!-- wp:heading {"level":3,"textColor":"blanc","fontFamily":"texte","style":{"typography":{"fontSize":"1.125rem"}}} -->
<h3 class="wp-block-heading has-blanc-color has-text-color has-texte-font-family" style="font-size:1.125rem">Salons et festivals</h3>
<!-- /wp:heading --><!-- wp:paragraph {"style":{"color":{"text":"#D5DCE8"},"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-text-color" style="color:#D5DCE8;font-size:0.9375rem">Rencontres, lectures, dédicaces.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:48px;padding-bottom:48px">
<!-- wp:paragraph {"align":"center","textColor":"ardoise","className":"ma-surtitre"} -->
<p class="has-text-align-center ma-surtitre has-ardoise-color has-text-color">Ils en ont parlé</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ma-mur-presse","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group ma-mur-presse"><!-- wp:paragraph -->
<p>Europe 1</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>20 Minutes</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Le Figaro</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>RCF</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Psychologies</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Ouest-France</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Le Progrès</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Famille Chrétienne</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-text-align-center" style="font-weight:700"><a href="/presse/">Toutes les interviews →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"creme","style":{"spacing":{"padding":{"top":"56px","bottom":"56px"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-creme-background-color has-background" style="margin-top:0;padding-top:56px;padding-bottom:56px">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"56px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">
<!-- wp:image {"align":"center","width":"280px","style":{"shadow":"0 18px 40px rgba(23,42,70,0.16)"}} -->
<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo $img( 'couverture-merveilleux-abandon.jpg' ); ?>" alt="Couverture du livre Merveilleux Abandon" style="width:280px;box-shadow:0 18px 40px rgba(23,42,70,0.16)"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">
<!-- wp:paragraph {"className":"ma-surtitre"} -->
<p class="ma-surtitre">Le livre</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"ma-signature-titre","fontFamily":"signature","style":{"typography":{"fontSize":"3rem"}}} -->
<h2 class="wp-block-heading ma-signature-titre has-signature-font-family" style="font-size:3rem">Merveilleux <em>Abandon</em></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#2E3E5A"}},"fontSize":"grand"} -->
<p class="has-text-color has-grand-font-size" style="color:#2E3E5A">Pour la première fois, le fœtus et le nourrisson que j'ai été prennent la parole. Un récit cash, drôle et bouleversant sur ce qu'il faut abandonner pour devenir soi. Illustré par ma fille, Zoé Le Gavrian.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"ardoise","style":{"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-ardoise-color has-text-color" style="font-size:0.9375rem">Éditions Jouvence · 2026</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"nuit"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-nuit-background-color has-background wp-element-button" href="https://bit.ly/43sooAy" target="_blank" rel="noreferrer noopener">Acheter le livre</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.placedeslibraires.fr/livre/9782889841141-merveilleux-abandon-recit-d-une-experience-humaine-et-universelle-armelle-de-the-zoe-le-gavrian/" target="_blank" rel="noreferrer noopener">Chez votre libraire</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"700"}}} -->
<p style="font-size:0.9375rem;font-weight:700"><a href="#newsletter">Ou lisez d'abord les 20 premières pages, offertes →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"merveilleux-abandon/newsletter"} /-->
