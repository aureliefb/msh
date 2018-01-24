<?php

// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil     = $this->generateUrl("accueil");
$urlActus       = $this->generateUrl("actus");
$urlContact     = $this->generateUrl("contact");
$urlSavoirFaire = $this->generateUrl("savoirfaire");
$urlCatalogue   = $this->generateUrl("catalogue");
$urlPierre      = $this->generateUrl("pierre");
$urlBoutiques   = $this->generateUrl("boutiques");
$urlMentionsLegales   = $this->generateUrl("mentionslegales");


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maison Saint-Honoré Boulangerie bio Marseille</title>
        <!-- Links Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
        <!-- FIN links Google fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="icon" type="image/png" href="<?php echo $urlAccueil ?>img/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo $urlAccueil ?>img/favicon-16x16.png" sizes="16x16" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>css/styleFront.css" />
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>css/responsive.css" />
    </head>
    <body class="wrapper">
        <!--VERSION DESKTOP -->
 <div class="desktop-only">
    <!-- LANDING PAGE -->
    <?php if(isset($hasAnimation) && $hasAnimation) : ?>
   

        <section id="animation">
            <div class="row">
                <img src="<?php echo $urlAccueil ?>img/landing-page/pierre.jpg" alt="Pierre Ragot boulanger Maison Saint-Honoré">
                <img src="<?php echo $urlAccueil ?>img/landing-page/burger.jpg" alt="Maison Saint-Honoré Burgers">
                <img src="<?php echo $urlAccueil ?>img/landing-page/vitrine.jpg" alt="Maison Saint-Honoré vitrine boutique Endoume Marseille">
            </div>
            <div class="row">
                <img src="<?php echo $urlAccueil ?>img/landing-page/mains.jpg" alt="Maison Saint-Honoré pétrissage">
                <img src="<?php echo $urlAccueil ?>img/landing-page/boutique.jpg" alt="Maison Saint-Honoré intérieur boutique Endoume Marseille">
                <img src="<?php echo $urlAccueil ?>img/landing-page/produits.jpg" alt="Maison Saint-Honoré produits">
            </div> 

            <!-- MOT D'ACCUEIL -->
            <section id="welcome" class="desktop-only">
                   <h1>Maison Saint-Honoré par Pierre Ragot, boulangerie bio à Marseille</h1>
                       <p>Certifiée Ecocert
                            <img class="logo-ecocert" src="<?php echo $urlAccueil ?>img/logo_ecocert.png">
                       </p>
                   <p>Pierre et Lisa Ragot ainsi que toute l'équipe vous accueille dans leurs 3 boutiques.</p>
            </section>           
        </section>
    <!-- FIN landing page -->

    <?php endif ?>
    
    <header id="content">

    
        <div id="parent">
                <img src="<?php echo $urlAccueil ?>img/accueil/empty.png" id="flou" class ="sandwich" usemap="#map"/>
                <map name="map">
                    <!-- #$-:Image map file created by GIMP Image Map plug-in
                    #$-:GIMP Image Map plug-in by Maurits Rijk
                    #$-:Please do not edit lines starting with "#$"
                    #$VERSION:2.3
                    #$AUTHOR:Etudiant -->
                    <area shape="rect" id="pierre" coords="76,318,549,731" data-fancybox data-src="#pierrefancy" href="" />
                    <area shape="rect" id="boutiques" coords="750,111,1169,702" href="<?php echo $urlBoutiques ?>#anchor-boutique" />
                    <area shape="rect" id="philo" coords="556,104,977,638" data-fancybox data-src="#savoirfairefancy" href="" />
                    <area shape="rect" id="contact" coords="1080,172,1798,813" href="<?php echo $urlBoutiques ?>#anchor-contact" />
                    <area shape="rect" id="catalogue" coords="95,636,1373,900" href="<?php echo $urlCatalogue ?>#anchor-catalogue" />
                    <area shape="rect" id="actu" coords="0,15,540,315" href="<?php echo $urlActus ?>#anchor-actus"/>
                </map>
        
                <!--Text foor the navigation-->
                <img class ="sandwich" id="actutext" src="<?php echo $urlAccueil ?>img/accueil/actu.png">
                <img class ="sandwich" id="boutitext" src="<?php echo $urlAccueil ?>img/accueil/boutiquez.png">
                <img class ="sandwich" id="contacttext" src="<?php echo $urlAccueil ?>img/accueil/contactez.png">
                <img class ="sandwich" id="philostext" src="<?php echo $urlAccueil ?>img/accueil/savoirfaire.png">
                <img class ="sandwich" id="pierretext" src="<?php echo $urlAccueil ?>img/accueil/pierreragot.png">
               
        
                <!--clock-->
                <canvas id="clock" class="clock"></canvas>
                
            <!--photos dans les cadres-->
            <img class ="sandwich" id="back" src="<?php echo $urlAccueil ?>img/accueil/background.png">
            <img class ="sandwich" id="light1" src="<?php echo $urlAccueil ?>img/accueil/lamp1.png">
            <img class ="sandwich" id="light2" src="<?php echo $urlAccueil ?>img/accueil/lamp2.png">
            <img class ="sandwich" id="light3" src="<?php echo $urlAccueil ?>img/accueil/lamp3.png">
            <img class ="sandwich" id="light4" src="<?php echo $urlAccueil ?>img/accueil/lamp4.png">
            <img class ="sandwich" id="label" src="<?php echo $urlAccueil ?>img/accueil/catalogue.png">
            <img class ="sandwich" id="savoirfaire" src="<?php echo $urlAccueil ?>img/accueil/philosoph.png">
            <img class ="sandwich" id="adress-boutiques" src="<?php echo $urlAccueil ?>img/accueil/boutiques.png">
            <img class ="sandwich" id="pierrephoto" src="<?php echo $urlAccueil ?>img/accueil/pierre.png">
            <img class ="sandwich" id="telephone" src="<?php echo $urlAccueil ?>img/accueil/telephone.png">
            <img class ="sandwich" id="ensemble" src="<?php echo $urlAccueil ?>img/accueil/breadandlights.png">
        </div> 
        <!--fin div parent-->   
        
        <div class="mainlogo">
            <a href="<?php echo $urlAccueil ?>">
                <img class="logoDesktop" src='./img/logomsh.png'>
            </a>
        </div>
        <!--fin div mainlogo-->  

        <div class="spacing"></div>


    </div> <!--fin div desktop-->   
      <!---FIN VERSION DESKTOP -->       


     <!--- VERSION MOBILE NAV--> 
            <div class="mobile-nav mobile-one-page">
                <div class="buttonetlogo">
                    <div class="menu-btn" id="menu-btn">
                        	<span></span>
                        	<span></span>
                        	<span></span>
                    </div><!--fin div menu btn-->
                             <a href="<?php echo $urlAccueil ?>">
                             <img class="logoMobile" src='./img/logolighthoriz.png'></a>
                             <div>
                                 <a href="https://www.facebook.com/maisonsthonorepierreragot/" target="_blank"><i class="mobile-rs fa fa-facebook-official" aria-hidden="true"></i></a>
                                 <a href="https://www.instagram.com/maisonsainthonoremarseille/" target="_blank"><i class="mobile-rs fa fa-instagram" aria-hidden="true"></i></a>
                             </div>
                </div> <!--fin div button logo-->
                        <div class="responsive-menu">
                            <ul>
                             <li><a href="<?php echo $urlAccueil ?>">ACCUEIL</a></li>
                              <li><a href="<?php echo $urlActus ?>">ACTUS</a></li>
                              <li><a href="<?php echo $urlPierre ?>">PIERRE RAGOT</a></li>
                              <li><a href="<?php echo $urlSavoirFaire ?>">SAVOIR FAIRE</a></li>
                              <li><a href="<?php echo $urlCatalogue ?>">CATALOGUE</a></li>
                              <li><a href="<?php echo $urlBoutiques ?>">BOUTIQUES / CONTACT</a></li>
                            </ul>
                        </div><!--fin div responsive mobile-->
            </div><!--fin div mobile-nav-->
            
            <div class="spacing-mobile"></div>        
       <!---FIN VERSION MOBILE -->  
    </header>


    <div style="display: none;" id="pierrefancy">
    	<h2>Pierre Ragot</h2>
    	<section>
            <div class="polaroid">
                <img src="<?php echo $urlAccueil ?>img/accueil/pierre2.jpg">
            </div>
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
    </div>

    <div style="display: none;" id="savoirfairefancy">
    	<h2>Savoir-faire</h2>
        <section>
            <div class="polaroid">
                <img src="<?php echo $urlAccueil ?>img/Pierrenb.jpg">
            </div>
            <article>
                <p>Pierre Ragot est un boulanger passionné et engagé dans le Bio depuis 2013.</p>
                <p>Adeptes des circuits-court et sans intermédiaire, il sélectionne des farines d’exceptions de France, farines biologiques issues, pour la plupart, de semences paysannes, et moulues artisanalement sur des meules de pierre.</p>
                <p>Son travail est exclusivement axé sur des pains aux Levains naturels sur fermentation longue.</p>
            </article>
        </section>
    </div>

    <main>
