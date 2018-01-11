

<section class="actus">
    <h3>LISTE DES ARTICLES DE TOUTES CATEGORIES</h3>

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository     = $this->getDoctrine()->getRepository(App\Entity\MonArticle::class);
$objetRepositoryUser = $this->getDoctrine()->getRepository(App\Entity\User::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
$tabResultat = $objetRepository->findBy([], [ "datePublication" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $objetArticle)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE Article
    $id              = $objetArticle->getId();
    $titre           = $objetArticle->getTitre();
    $categorie       = $objetArticle->getCategorie();
    $contenu         = $objetArticle->getContenu();
    $cheminImage     = $objetArticle->getCheminImage();
    $datePublication = $objetArticle->getDatePublication("d/m/Y H:i:s");
    
    // JE VAIS FAIRE UNE 2e REQUETE POUR ALLER CHERCHER LE User
    $idUser          = $objetArticle->getIdUser();
    $objetUser = $objetRepositoryUser->find($idUser);
    $pseudo = "";
    if ($objetUser)
    {
        $pseudo = $objetUser->getPseudo();
    }
    
    $htmlImage = "";
    if ($cheminImage)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/$cheminImage" title="$cheminImage">

CODEHTML;
    }
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
    $urlArticle = $this->generateUrl("article", [ "id" => $id ]);
    $urlCategorie = $this->generateUrl("categorie", [ "cat" => $categorie ]);
    
    echo
<<<CODEHTML

    <article>
        <h4 title="$id"><a href="$urlArticle">$titre</a></h4>
        <div>CREE PAR $pseudo</div>
        <div><a href="$urlCategorie">$categorie</a></div>
        <p>$contenu</p>
        <div>$htmlImage</div>
        <div>$datePublication</div>
    </article>
    
CODEHTML;
    
}

?>


</section>