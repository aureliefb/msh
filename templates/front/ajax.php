<?php

//JE RECUPERE LES INFOS MANQUANTES
$urlAccueil     = $this->generateUrl("accueil");

// IL FAUT RECUPERER LE FILTRE DEPUIS LA REQUETE AJAX
$ajaxCategorie = $objetRequest->get("ajaxCategorie", "");

$objetProduitRepository = $this->getDoctrine()->getRepository(App\Entity\Produit::class);
$objetCategorieRepository = $this->getDoctrine()->getRepository(App\Entity\Categorie::class);

$objetCategorie = $objetCategorieRepository->findOneBy([ "nomCategorie" => $ajaxCategorie ]);

// récupère la liste des produits de cette categorie
//$listProduits = $objetProduitRepository->findBy([ "categorie_id" => $objetCategorie->getId() ]);
$listProduits = $objetProduitRepository->findBy([ "categorie" => $objetCategorie->getId() ]);

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
        	$htmlImage = 
<<<CODEHTML
    <img src="$urlAccueil/img/produits/$photo" title="$photo">
CODEHTML;
    }
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
     $urlProduit  = $this->generateUrl("catalogue", [ "id" => $id, "nomProduit" => $urlProduit ]);
    
			echo
<<<CODEHTML
<figure class="effect-winston">
	<div>$htmlImage</div>
	<figcaption>
		<h2>$nomProduit</h2>
		<p>
			<a href="#">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</a>
		</p>
	</figcaption>
</figure>
CODEHTML;
		}
