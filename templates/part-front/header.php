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
        <title>Maison Saint-Honoré par Pierre Ragot</title>
        <!-- Links Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <!-- FIN links Google fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>/css/styleFront.css" />
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>/css/responsive.css" />
    </head>
    <body class="wrapper">
        <!--VERSION DESKTOP -->
    <header>
    <div class="desktop-only">  
        <!-- <h1>Maison Saint-Honoré par Pierre Ragot</h1>
        <p>Boulangerie bio à Marseille</p> -->
        <div id="parent">
                <img src="<?php echo $urlAccueil ?>/img/accueil/empty.png" id="flou" class ="sandwich" usemap="#map"/>
                <map name="map">
                    <!-- #$-:Image map file created by GIMP Image Map plug-in
                    #$-:GIMP Image Map plug-in by Maurits Rijk
                    #$-:Please do not edit lines starting with "#$"
                    #$VERSION:2.3
                    #$AUTHOR:Etudiant -->
                    <area shape="rect" id="pierre" coords="76,318,549,731" target="pierre" data-fancybox data-src="#pierrestory" href="" />
                    <area shape="rect" id="boutiques" coords="991,111,1369,702" target="boutiques" href="<?php echo $urlBoutiques ?>"/>
                    <area shape="rect" id="philo" coords="556,104,977,638" target="cut" data-fancybox data-src="#savoirfairefancy" href="" />
                    <area shape="rect" id="contact" coords="1379,122,1798,813" target="telephone" href="<?php echo $urlContact ?>" />
                    <area shape="rect" id="catalogue" coords="95,736,1373,1214" target="catalogue" href="<?php echo $urlCatalogue ?>" />
                    <area shape="rect" id="actu" coords="0,15,540,315" target="actualité" href="<?php echo $urlActus ?>" />
                </map>
        
                <!--Text foor the navigation-->
                <img class ="sandwich" id="actutext" src="<?php echo $urlAccueil ?>/img/accueil/actu.png">
                <img class ="sandwich" id="boutitext" src="<?php echo $urlAccueil ?>/img/accueil/boutiquez.png">
                <img class ="sandwich" id="contacttext" src="<?php echo $urlAccueil ?>/img/accueil/contactez.png">
                <img class ="sandwich" id="philostext" src="<?php echo $urlAccueil ?>/img/accueil/savoirfaire.png">
                <img class ="sandwich" id="pierretext" src="<?php echo $urlAccueil ?>/img/accueil/pierreragot.png">
                <img class ="sandwich" id="prodtext" src="<?php echo $urlAccueil ?>/img/accueil/produits.png">
        
                <!--clock-->
                <!--
                <div class="clock">
                   <div class="numbers">
                        <ul>
                            <li>12</li>
                            <li>3</li>
                            <li>6</li>
                            <li>9</li>
                        </ul>
                    </div>
                    <div class="clockwise">
                        <div class="center"></div>
                        <div class="hand-minute" id="analogminute"></div>
                        <div class="hand-hour" id="analoghour"></div>
                    </div>
                </div> 
                -->
            <!--photos dans les cadres-->
            <img class ="sandwich" id="back" src="<?php echo $urlAccueil ?>/img/accueil/background.png">
            <img class ="sandwich" id="light1" src="<?php echo $urlAccueil ?>/img/accueil/lamp1.png">
            <img class ="sandwich" id="light2" src="<?php echo $urlAccueil ?>/img/accueil/lamp2.png">
            <img class ="sandwich" id="light3" src="<?php echo $urlAccueil ?>/img/accueil/lamp3.png">
            <img class ="sandwich" id="light4" src="<?php echo $urlAccueil ?>/img/accueil/lamp4.png">
            <img class ="sandwich" id="label" src="<?php echo $urlAccueil ?>/img/accueil/catalogue.png">
            <img class ="sandwich" id="savoirfaire" src="<?php echo $urlAccueil ?>/img/accueil/philosoph.png">
            <img class ="sandwich" id="adress-boutiques" src="<?php echo $urlAccueil ?>/img/accueil/boutiques.png">
            <img class ="sandwich" id="pierrephoto" src="<?php echo $urlAccueil ?>/img/accueil/pierre.png">
            <img class ="sandwich" id="telephone" src="<?php echo $urlAccueil ?>/img/accueil/telephone.png">
            <img class ="sandwich" id="ensemble" src="<?php echo $urlAccueil ?>/img/accueil/breadandlights.png">
        </div> 
        <!--fin div parent-->
        
        
        
            <div class="mainlogo">
                    <a href="<?php echo $urlAccueil ?>">
                    <img class="logoDesktop" src='./img/logomsh.png'>
            </div><!--fin div mainlogo-->
        
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
                             <img class="logoMobile" src='./img/logolighthoriz.png'>
                             <a href="https://www.facebook.com/maisonsthonorepierreragot/" target="_blank"><i class="mobile-rs fa fa-facebook-official" aria-hidden="true"></i></a>
                             <a href="https://www.instagram.com/maisonsainthonoremarseille/" target="_blank"><i class="mobile-rs fa fa-instagram" aria-hidden="true"></i></a>
                </div> <!--fin div button logo-->
                        <div class="responsive-menu">
                            <ul>
                             <li><a href="<?php echo $urlAccueil ?>">ACCUEIL</a></li>
                              <li><a href="<?php echo $urlActus ?>">ACTUS</a></li>
                              <li><a href="<?php echo $urlPierre ?>">PIERRE RAGOT</a></li>
                              <li><a href="<?php echo $urlSavoirFaire ?>">SAVOIR FAIRE</a></li>
                              <li><a href="<?php echo $urlCatalogue ?>">CATALOGUE</a></li>
                              <li><a href="<?php echo $urlBoutiques ?>">NOS BOUTIQUES</a></li>
                              <li><a href="<?php echo $urlContact ?>">CONTACT</a></li>
                            </ul>
                        </div><!--fin div responsive mobile-->
            </div><!--fin div mobile-nav-->
             
       <!---FIN VERSION MOBILE -->  
        
      </header>
      <div style="display: none;" id="pierrestory">
	<h2>Pierre Ragot</h2>
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
</div>

<div style="display: none;" id="savoirfairefancy">
	<h2>Savoir Faire</h2>
	<div>
	
	</div>
</div>
    <main>
