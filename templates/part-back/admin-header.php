<?php

// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil     = $this->generateUrl("accueil");
// $urlLogin       = $this->generateUrl("login");
$urlAdmin       = $this->generateUrl("admin");
$urlLogout      = $this->generateUrl("logout");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MON SITE SYMFONY</title>
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/style.css" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

    </head>
    <body>
            <div class="page">
        <header>
            <h1>MON SITE SYMFONY</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo $urlAdmin ?>">Admin</a></li>
                    <li><a href="<?php echo $urlLogout ?>">Logout</a></li>
                </ul>
            </nav>
        </header>
        <main>
