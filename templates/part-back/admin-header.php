<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Maison Saint Honoré Admin</title>
        <link rel="stylesheet" href="<?php echo $this->generateUrl("accueil"); ?>/css/styleBack.css"/>
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
            <div class="page">
        <header>
            <div class="admin-header">
            <img class="logoadmin" src="<?php echo $this->generateUrl("accueil"); ?>/img/logolighthoriz.png">
            <h1>PAGE ADMIN</h1>
            </div>
            <h4>Bienvenue <span class="admin-user"><?php echo $objetSession->get("pseudo");?></span></h4>

            <nav>
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i>
                        <a href="<?php echo $this->generateUrl("accueil"); ?>">Retour au site</a>
                    </li>
                    <li><i class="fa fa-lock" aria-hidden="true"></i>
                        <a href="<?php echo $this->generateUrl("admin"); ?>">Admin Page Principale</a>
                    </li>
                    <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <a href="<?php echo $this->generateUrl("admin-catalogue");  ?>">Gérer le catalogue</a>
                    </li>
                    <li><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        <a href="<?php echo $this->generateUrl("admin-newsletter");  ?>">Créér une nouvelle Newsletter et gérer les contacts</a></li>
                    <li><i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <a href="<?php echo $this->generateUrl("admin-boutiques");  ?>">Gérer les boutiques et points de vente</a></li>
                    <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="<?php echo $this->generateUrl("logout"); ?>">   Logout Admin</a>
                </li>
                </ul>
            </nav>
        </header>
    <main>


