<h2>Modifier boutique</h2>
<form action="">
    <label>Nom</label>
        <input required type="text" name="nom_boutique" value="<?php echo $boutique->getNomBoutique(); ?>">
        <label>Adresse</label>
        <textarea required name="adresse"><?php echo $boutique->getAdresse(); ?></textarea>
        <label>Horaires</label>
        <textarea required name="horaires"><?php echo $boutique->getHoraires(); ?></textarea>
        <label>Telephone</label>
        <input required type="tel" name="telephone" value="<?php echo $boutique->getTelephone(); ?>">
        <button type="submit" name="submit" value="valid">Modifier</button>
</form>

<a href="../boutiques">Retour</a>