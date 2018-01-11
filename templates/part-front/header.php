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
        <title>MON SITE SYMFONY</title>
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/style.css" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="css/styleAurel.css" />

    </head>
    <body>
            <div class="page">
        <header>
            <h1>MON SITE SYMFONY</h1>
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
        </header>
        <main>
