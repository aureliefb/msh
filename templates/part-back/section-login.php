
            <section>
                <h3>SECTION LOGIN</h3>
                <form method="POST" action="">
                    <input type="email" name="email" required placeholder="VOTRE EMAIL">
                    <input type="password" name="password" required placeholder="VOTRE PASSWORD">
                    <button type="submit">LOGIN</button>
                    <input type="hidden" name="codebarre" value="login">
                    <div class="response">
<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND JE RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "login")
{
    $objetTraitementForm = new App\Controller\TraitementForm;
    $objetRepository = $this->getDoctrine()->getRepository(App\Entity\User::class);

    $objetTraitementForm->traiterLogin( $objetRequest, 
                                        $objetConnection, 
                                        $objetRepository, 
                                        $objetSession );
}

?>
                    </div>
                </form>
            </section>
