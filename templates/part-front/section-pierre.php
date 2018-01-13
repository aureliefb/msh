<?php
	$urlSavoirFaire = $this->generateUrl("savoirfaire");
	$urlBoutiques   = $this->generateUrl("boutiques");
	$urlAccueil     = $this->generateUrl("accueil");
	$urlCatalogue   = $this->generateUrl("catalogue");
	$urlBoutiques   = $this->generateUrl("boutiques");
?>


<section>
	<h2>Section Pierre Ragot</h2>
	<div>
		<p>Pierre Ragot, parisien d'origine, suit un parcours d'artisan-boulanger auprès de maisons d'exception.</p>

		<p>En 0000, il devient gérant du Fournil des Auffes avant de fonder sa propre marque :  la maison Saint-Honoré par Pierre Ragot. Il ouvre une première adresse dans le quartier d'Endoume en 0000, puis une seconde sur l'avenue du Prado à deux pas de la place Castellane.
			<a href="<?php echo $urlBoutiques ?>.php">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>

		<p>Sa passion du métier, son amour pour des matières premières de premier choix, son goût pour les expérimentations culinaires font la renommée de la maison Saint-Honoré. Les spécialités de la maison : le Saint-Honoré, la focaccia au charbon végétal, les bloomers, etc.
		<a href="<?php echo $urlCatalogue ?>.php">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>

		<p>Le bouche à oreilles et les articles relayés dans la presse et sur les blogs font que les marseillais se bousculent aux portes des boutiques...</p>

		<p>Découvrez tout notre savoir-faire et la philosophie de notre maison ...
			<a href="<?php echo $urlSavoirFaire ?>.php">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>
	</div>
</section>