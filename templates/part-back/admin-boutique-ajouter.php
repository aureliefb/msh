<form method="POST" action="">
	   <fieldset>
	        <legend>
	            <strong>Ajouter une nouvelle boutique</strong>
	        </legend>
	        <input  type="text" name="nom_boutique" class="select" placeholder="Nom de la boutique">
	        <textarea name="adresse" class="select" placeholder="Adresse"></textarea>
	        <textarea name="horaires" class="select" placeholder="Horaires"></textarea>
	        <input  type="tel" name="telephone" class="select" placeholder="Numéro sans espace">
	    	<button type="submit" name="submit" value="valid">Ajouter</button>

    	<div class="response"></div>
	</fieldset>
</form>

<a href="<?php echo $this->generateUrl("admin"); ?>">Retour</a>