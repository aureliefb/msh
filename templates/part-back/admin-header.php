<?php

// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil     = $this->generateUrl("accueil");
// $urlLogin       = $this->generateUrl("login");
$urlAdmin               = $this->generateUrl("admin");
$urlAdminCatalogue      = $this->generateUrl("admin-catalogue");
$urlAdminNewsletter     = $this->generateUrl("admin-newsletter");
$urlAdminBoutique       = $this->generateUrl("admin-boutique");
$urlLogout              = $this->generateUrl("logout");
//pour afficher le bienvenue 
$verifPseudo            = $objetSession->get("pseudo");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maison Saint Honoré Admin</title>
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>/css/styleBack.css" />
        

    </head>
    <body>
            <div class="page">
        <header>
            <h1>Maison Saint Honoré ADMIN</h1>
            <h4>BIENVENUE <?php echo $verifPseudo ?></h4>
            <nav>
                <ul>
                    <li><a href="<?php echo $urlAdmin ?>">Admin Page Principal</a></li>
                    <li><a href="<?php echo $urlAdminCatalogue  ?>">Gérer le catalogue</a></li>
                    <li><a href="<?php echo $urlAdminNewsletter  ?>">Créér une nouvelle Newsletter et gérer les contacts</a></li>
                    <li><a href="<?php echo $urlAdminBoutique  ?>">Gérer les boutiques et points de vente</a></li>
                    <li><a href="<?php echo $urlLogout ?>">Logout Admin</a></li>
                </ul>
            </nav>
        </header>
        <main>




    