            <section class="accueil">
                <h3>SECTION ACCUEIL</h3>

    <section class="section-newsletter">
            <div class="box">
                
        <h3>FORMULAIRE DE NEWSLETTER</h3>
        <form method="GET" action="" class="ligne">
            <input type="email" name="email" required placeholder="VOTRE EMAIL">
            <button>INSCRIPTION</button>
            <input type="hidden" name="codebarre" value="newsletter">
            <div class="response">
<?php

if ($objetRequest->get("codebarre", "") == "newsletter")
{
    // TRAITEMENT DU FORMULAIRE
    $objetNewsletterController = new App\Controller\NewsletterController;
    $objetNewsletterController->subscribeNewsletter($objetRequest, $objetConnection);
}
?>
            </div>
        </form>
            
            </div>
    </section>
    
    <section class="liste">
        <h3>LISTE DES INSCRITS A LA NEWSLETTER</h3>
        <table>
            <tbody>
            
<?php

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Newsletter
// $repository = $this->getDoctrine()->getRepository("App\Entity\Newsletter");
$repository = $this->getDoctrine()->getRepository(App\Entity\Newsletter::class);

// JE VEUX TOUTES LES LIGNES
//$tabResultat = $repository->findAll();

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
$tabResultat = $repository->findBy([], [ "id" => "DESC" ]);

// DEBUG
//echo "<pre>";
//print_r($tabResultat);
//echo "</pre>";

foreach($tabResultat as $objetNewsletter)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE Newsletter
    $email = $objetNewsletter->getEmail();
    $id    = $objetNewsletter->getId();
    
    echo
<<<CODEHTML

    <tr>
        <td>$id</td>
        <td>$email</td>
    </tr>
    
CODEHTML;
    
}

?>
            </tbody>
        </table>

    </section>

</section>