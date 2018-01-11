
            <section>
                <h3>SECTION CONTACT</h3>
                <form method="GET" action="">
                    <input type="email" name="email" required placeholder="VOTRE EMAIL">
                    <input type="text" name="nom" required placeholder="VOTRE NOM">
                    <textarea type="text" name="message" required placeholder="VOTRE MESSAGE" rows="6" cols="60"></textarea>
                    <button type="submit">ENVOYER LE MESSAGE</button>
                    <input type="hidden" name="codebarre" value="contact">
                    <div class="response">
<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND JE RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "contact")
{
    $objetTraitementForm = new App\Controller\TraitementForm;
    $objetTraitementForm->traiterContact($objetRequest, $objetConnection);
}
?>
                    </div>
                </form>
            </section>
