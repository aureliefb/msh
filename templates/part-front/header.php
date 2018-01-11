<?php

// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil     = $this->generateUrl("accueil");
$urlActus       = $this->generateUrl("actus");
$urlContact     = $this->generateUrl("contact");
$urlSavoirFaire = $this->generateUrl("savoirfaire");
$urlCatalogue   = $this->generateUrl("catalogue");
$urlPierre      = $this->generateUrl("pierre");
$urlBoutiques   = $this->generateUrl("boutiques");



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maison Saint-Honoré par Pierre Ragot</title>
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        <!-- <link rel="stylesheet" href="css/styleAurel.css" /> -->
        <link rel="stylesheet" href="css/styleMerge.css" />

    </head>
    <body>
            <div class="page">
        <header>
            <h1>Maison Saint-Honoré par Pierre Ragot</h1>
             <nav>
    <ul>
        <li><a href="<?php echo $urlAccueil ?>">Accueil</a></li>
        <li><a href="<?php echo $urlActus ?>">Actus</a></li>
        <li><a href="<?php echo $urlBoutiques ?>">Boutiques</a></li>
        <li><a href="<?php echo $urlCatalogue ?>">Catalogue</a></li>
        <li><a href="<?php echo $urlPierre ?>">Pierre Ragot</a></li>
        <li><a href="<?php echo $urlSavoirFaire ?>">Savoir-faire</a></li>
        <li><a href="<?php echo $urlContact ?>">Contact</a></li>
    </ul>
</nav> 


        <!-- <header id="content">
        <div class="container" id="parent">
            
                <img src="./img/accueil/empty.png') }}" id="flou" class ="sandwich" usemap="#map"/>
                <map name="map">
                    #$-:Image map file created by GIMP Image Map plug-in
                    #$-:GIMP Image Map plug-in by Maurits Rijk
                    #$-:Please do not edit lines starting with "#$"
                    #$VERSION:2.3
                    #$AUTHOR:Etudiant
                    <area shape="rect" id="pierre" coords="76,318,549,731" target="pierre" data-fancybox data-src="#pierrestory" href="./pierre-ragot"/>
                    <area shape="rect" id="histoire" coords="991,111,1369,702" target="histoire" href="#"/>
                    <area shape="rect" id="philo" coords="556,104,977,638" target="cut" href="./savoir-faire" />
                    <area shape="rect" id="contact" coords="1379,122,1798,813" target="telephone" href="./adresses" />
                    <area shape="rect" id="catalogue" coords="95,736,1373,1214" target="catalogue" href="./catalogue" />
                    <area shape="rect" id="actu" coords="0,15,540,315" target="actualité" href="./actu" />
                </map>FIN DU TEST
        
                Text foor the navigation
                <img class ="sandwich" id="actutext" src="./img/accueil/actu.png">
                <img class ="sandwich" id="boutitext" src="./img/accueil/boutiquez.png">
                <img class ="sandwich" id="contacttext" src="./img/accueil/contactez.png">
                <img class ="sandwich" id="philostext" src="./img/accueil/savoirfaire.png">
                <img class ="sandwich" id="pierretext" src="./img/accueil/pierreragot.png">
                <img class ="sandwich" id="prodtext" src="./img/accueil/produits.png">
                end of text for navigation
                
                clock
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
        
            photos dans les cadres
            <img class ="sandwich" id="back" src="./img/accueil/background.png">
            <img class ="sandwich" id="light1" src="./img/accueil/lamp1.png">
            <img class ="sandwich" id="light2" src="./img/accueil/lamp2.png">
            <img class ="sandwich" id="light3" src="./img/accueil/lamp3.png">
            <img class ="sandwich" id="light4" src="./img/accueil/lamp4.png">
            <img class ="sandwich" id="label" src="./img/accueil/catalogue.png">
            <img class ="sandwich" id="savoirfaire" src="./img/accueil/philosoph.png">
            <img class ="sandwich" id="adress-boutiques" src="./img/accueil/boutiques.png">
            <img class ="sandwich" id="pierrephoto" src="./img/accueil/pierre.png">
            <img class ="sandwich" id="telephone" src="./img/accueil/telephone.png">
            <img class ="sandwich" id="ensemble" src="./img/accueil/breadandlights.png">
        </div>
        
        <div class="sidebar">
            {# <div class="logo"> #}
                <a href=".">
                    <div class="incline">
                        <p>maison</p>
                        <p>saint-honoré</p>
                    </div>
                    <p class="sidebar-pierre">par Pierre ragot</p>
                </a>
            {# </div> #}
        </div> -->
            </header> 
    <main>
