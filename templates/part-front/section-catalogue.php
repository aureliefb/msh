<section class="page-catalogue">
	<h2><a id="anchor-catalogue">Catalogue</a></h2>

	<section class="contenu-catalogue">
		<nav class="nav-catalogue">
			<ul>
				<li><a data-categorie="pain" class="ajax" href="#">Pains</a></li>
				<li><a data-categorie="focaccia" class="ajax" href="#">Foccacia</a></li>
				<li><a data-categorie="cakes" class="ajax" href="#">Cakes salés et sucrés</a></li>
				<li><a data-categorie="viennoiserie" class="ajax" href="#">Viennoiseries</a></li>
				<li><a data-categorie="gateaux" class="ajax" href="#">Gâteaux</a></li>
				<li><a data-categorie="saisonnier" class="ajax" href="#">Créations saisonnières</a></li>
				<li><a data-categorie="autres" class="ajax" href="#">Et autres...</a></li>
			</ul>
		</nav>


		<div class="grid">
		<?php

		$objetProduitRepository = $this->getDoctrine()->getRepository(App\Entity\Produit::class);
		$objetCategorieRepository = $this->getDoctrine()->getRepository(App\Entity\Categorie::class);

	    // récupère la liste des produits de cette categorie
	    $listProduits = $objetProduitRepository->findBy([], ["nomProduit" => "ASC"]);

		// ON A UN TABLEAU D'OBJETS DE CLASSE Article
	    foreach ($listProduits as $objetProduit){
	    	$id = $objetProduit->getId();
		    $nomProduit = $objetProduit->getNomProduit();
		    $categorie = $objetProduit->getCategorie();
		    $description = $objetProduit->getDescription();
		    $photo = $objetProduit->getPhoto();
		    // $allergene = $objetProduit->getAllergene();
		    $label = $objetProduit->getLabel();
		    $urlProduit = $objetProduit->getUrlProduit();

	    // $description = mb_strimwidth($description, 0, 50, '... ').'<a href="template-produit.php?idproduit=' . $idproduit . '"></a>';

	    $htmlImage = "";
		    if ($photo) {
        	$htmlImage = '<img src="'.$urlAccueil.'img/produits/'.$photo.'" title="'.$photo.'">';
    }

    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
     $urlProduit  = $this->generateUrl("catalogue", [ "nomCategorie" => $categorie, "nomProduit" => $urlProduit ]);

			echo
<<<CODEHTML
<figure class="effect-winston">
	<div>$htmlImage</div>
	<figcaption>
			<h2>$nomProduit</h2>
		<p>
			<a href="#">
				<i class="fa fa-plus-circle" aria-hidden="true">
				</i>
			</a>
		</p>
	</figcaption>
</figure>
CODEHTML;
		}

		?>

		</div>

<!--
/* TEST affichage icones allergènes  */

$listeAllergene = "";
    $requeteSQL2=
<<<CODESQL
SELECT * FROM produitsallergenes
INNER JOIN allergenes
ON produitsallergenes.idAllergene = allergenes.idAllergene
WHERE idProduit = $idProduit
CODESQL;

// je veux rajouter à ma table ProduitsAllergènes des éléments suppl contenus dans la table Allergènes
// ligne ON : l'idAllergènes de la table ProduitsAllergènes doit être égal à l'idAllergènes de la table Allergènes

    $tabResult = connexionBDD("$requeteSQL2", []);

    foreach($tabResult as $tabLigne2) {
        array_map("htmlentities", $tabLigne2);
        extract($tabLigne2);

        $iconeAllerg = "";
        if ($icone) {
        $iconeAllerg =
<<<CODEHTML
    <img src="$icone" title="$icone">
CODEHTML;
    }

        $listeAllergene .= "$icone ($allergene)";
    }

-->

	</section>
</section>