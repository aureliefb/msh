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
		<p>Pierre Ragot, parisien d'origine, suit un parcours d'artisan-boulanger auprès de maisons d'exception.</p>

		<p>Il devient gérant du Fournil des Auffes avant de fonder sa propre marque :  la maison Saint-Honoré par Pierre Ragot. Il ouvre une première adresse dans le quartier d'Endoume, puis une seconde sur l'avenue du Prado à deux pas de la place Castellane.
			<a href="<?php echo $urlBoutiques ?>">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>

		<p>Sa passion du métier, son amour pour des matières premières de premier choix, son goût pour les expérimentations culinaires font la renommée de la maison Saint-Honoré. Les spécialités de la maison : le Saint-Honoré, la focaccia au charbon végétal, les bloomers, etc.
		<a href="<?php echo $urlCatalogue ?>">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>

	</article>
</section>