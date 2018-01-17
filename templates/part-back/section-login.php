<?php

    $urlAccueil = $this->generateUrl("accueil");

?>

            <section>
                <h3>SECTION LOGIN</h3>
                <form method="POST" action="" class="form-login">
                    <input type="text" name="pseudo" class="select" required placeholder="VOTRE IDENTIFIANT">
                    <input type="password" name="password" class="select" required placeholder="VOTRE PASSWORD">
                    <button type="submit">LOGIN</button>
                    <input type="hidden" name="codebarre" value="login">
                     
<?php

if ($objetRequest->get("codebarre", "") == "login") {
    $objetTraitementForm = new App\Controller\TraitementForm;
    $objetRepository = $this->getDoctrine()->getRepository(App\Entity\Login::class);

    $objetTraitementForm->traiterLogin( $objetRequest, 
                                        $objetConnection, 
                                        $objetRepository, 
                                        $objetSession );
}

?>
                </form>

                <a class= "admin-back-button" href ="<?php echo $urlAccueil?>">RETOUR SUR LA PAGE PRINCIPALE</a>
            </section>
