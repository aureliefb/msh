            <section class="accueil">
                

  <!--- VERSION MOBILE --> 
     
            
            
                <section class="mobile-one-page">    
                    <section class="mobile-actus">
                        <div class="mobile-content-section">
                		<a href="histoire3.php">
                			<h2>ACTUS</h2>
                		</a>
                			<p>Dernières nouvelles de la maison</p>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet neque at tellus semper tristique.</p>
                		</div>
                	</section>
                
                	<section class="mobile-pierre">
                	    <div class="mobile-content-section">
                		<a href="pierre.php">
                			<h2>Pierre RAGOT</h2>
                		</a>
                			<p>Pierre Ragot ....</p>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet neque at tellus semper tristique.</p>
                		</div>
                	</section>
                
                	<section class="mobile-catalogue">
                	    <div class="mobile-content-section">
                		<a href="catalogue.php">
                			<h2>Catalogue</h2>
                		</a>
                			<p>Nos Prorduits</p>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet neque at tellus semper tristique.</p>
                		</div>
                	</section>
                
                	<section class="mobile-savoirfaire">
                	    <div class="mobile-content-section">
                		<a href="savoirfaire.php">
                			<h2>Savoir Faire</h2>
                		</a>
                			<p>Notre Savoir Faire</p>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet neque at tellus semper tristique.</p>
                		</div>
                	</section> 
                	
                	<section class="mobile-boutiques">
                	    <div class="mobile-content-section">
                		<a href="boutiques.php">
                			<h2>Nos Boutiques</h2>
                		</a>
                		<div>
                			<p>Où nous trouver ?</p>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet neque at tellus semper tristique.</p>
                		</div>
                	</section> 
                	<section class="mobile-contact">
                	    <div class="mobile-content-section">
                		<a href="contact.php">
                			<h2>Contact</h2>
                		</a>
                			<p>Contactez nous</p>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet neque at tellus semper tristique.</p>
                		</div>
                	</section> 
                </section>	
             
       <!---FIN VERSION MOBILE -->

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