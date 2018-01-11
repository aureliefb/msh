

<section class="actus">
    <h3>LISTE DES ARTICLES DE TOUTES CATEGORIES</h3>

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository     = $this->getDoctrine()->getRepository(App\Entity\MonArticle::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
//$tabResultat = $objetRepository->findBy([], [ "datePublication" => "DESC" ]);

$tabResultat = $objetRepository->trouverArticleUser($objetConnection);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $tabLigne)
{
    
    extract($tabLigne);

    $htmlImage = "";
    if ($chemin_image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/$chemin_image" title="$chemin_image">

CODEHTML;
    }
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
    $urlArticle     = $this->generateUrl("article", [ "id" => $idArticle ]);
    $urlCategorie   = $this->generateUrl("categorie", [ "cat" => $categorie ]);
    
    echo
<<<CODEHTML

    <article>
        <h4 title="$id"><a href="$urlArticle">$titre</a></h4>
        <div>CREE PAR $pseudo</div>
        <div><a href="$urlCategorie">$categorie</a></div>
        <p>$contenu</p>
        <div>$htmlImage</div>
        <div>$date_publication</div>
    </article>
    
CODEHTML;
    
}

?>


</section>