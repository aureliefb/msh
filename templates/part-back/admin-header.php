<?php
// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil         = $this->generateUrl("accueil");
// $urlLogin        = $this->generateUrl("login");
$urlAdmin           = $this->generateUrl("admin");
$urlAdminCatalogue  = $this->generateUrl("admin-catalogue");
$urlAdminNewsletter = $this->generateUrl("admin-newsletter");
$urlAdminBoutiques  = $this->generateUrl("admin-boutiques");
$urlLogout          = $this->generateUrl("logout");
//pour afficher le bienvenue
$verifPseudo        = $objetSession->get("pseudo");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maison Saint Honoré Admin</title>
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>/css/styleBack.css"/>
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
            <div class="page">
        <header>
            <div class="admin-header">
            <img class="logoadmin" src='./img/logolighthoriz.png'>
            <h1>Maison Saint Honoré ADMIN</h1>
            </div>
            <h4>BIENVENUE <span class="admin-user"><?php echo $verifPseudo ?></span></h4>

            <nav>
                <ul>
                    <li><i class="fa fa-lock" aria-hidden="true"></i>
<a href="<?php echo $urlAdmin ?>">   Admin Page Principal</a></li><br>
                    <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
<a href="<?php echo $urlAdminCatalogue  ?>">   Gérer le catalogue</a></li><br>
                    <li><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
<a href="<?php echo $urlAdminNewsletter  ?>">   Créér une nouvelle Newsletter et gérer les contacts</a></li><br>
                    <li><i class="fa fa-shopping-basket" aria-hidden="true"></i>
<a href="<?php echo $urlAdminBoutiques  ?>">   Gérer les boutiques et points de vente</a></li><br>
                    <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="<?php echo $urlLogout ?>">   Logout Admin</a></li>
                </ul>
            </nav>
        </header>
    <main>


