<?php
	$urlSavoirFaire = $this->generateUrl("savoirfaire");
	$urlBoutiques   = $this->generateUrl("boutiques");
	$urlAccueil     = $this->generateUrl("accueil");
	$urlCatalogue   = $this->generateUrl("catalogue");
	$urlBoutiques   = $this->generateUrl("boutiques");
?>


<section class="section-pierre">
	<h2><a id="anchor-pierre">Pierre Ragot</a></h2>
	<article>
		<p>Pierre Ragot, parisien pur sucre, est un jeune Artisan Boulanger, bien décidé à bouléguer les habitudes boulangères marseillaises. Riche en expérience sur la Capitale, c'est en 2010 que Pierre décide de s'exiler en terre Marseillaise.</p>

		<p>Il reprend "le Fournil des Auffes" au Vallon des Auffes en 2011 et se fait un Nom auprès de Chef Marseillais. Il crée par la suite" Maison Saint-Honoré par Pierre Ragot" en 2015 dans le quartier d’Endoume, un terrain de jeux, pour laisser libre cours à son Imagination fertile.
			<a href="<?php echo $urlBoutiques ?>#anchor-boutique">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>

		<p>L'ambition de Pierre : imposer son savoir-faire et devenir une référence à Marseille en matière de Pain. Il ouvre une seconde Maison Saint-Honoré le 25 septembre 2017 sur l’avenue du Prado. Son amour pour les matières premières de premier choix et son goût pour les expérimentations culinaires font la renommée de la maison Saint-Honoré.
		<a href="<?php echo $urlCatalogue ?>#anchor-catalogue">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>
	</article>
</section>