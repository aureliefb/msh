<h2>Ajouter une nouvelle boutique</h2>
<form action="">
    <label>Nom</label>
        <input required type="text" name="nom_boutique">
        <label>Adresse</label>
        <textarea required name="adresse"></textarea>
        <label>Horaires</label>
        <textarea required name="horaires"></textarea>
        <label>Telephone</label>
        <input required type="tel" name="telephone">
        <button type="submit" name="submit" value="valid">Ajouter</button>
</form>

<a src="<?php echo $this->generateUrl("accueil"); ?>" >Retour</a>