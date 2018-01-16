<form method="POST">
    <fieldset>
        <legend><strong>Modifier un produit</strong></legend>
        <input type="text" name="nom_produit" placeholder="Nom du produit" value="<?php echo $produit->getNomProduit(); ?>">
        <select name="categorie">
            <?php
            foreach ($categories as $c) {
                echo '<option value="'.$c->getId().'" name="categorie">'.$c->getNomCategorie().'</option>';
            }
            ?>
        </select><br />
        <textarea name="description" cols="40" rows="10" placeholder="Description du produit"></textarea><br />
        <?php
        foreach ($allergenes as $a){
            echo '<input type="checkbox" value="'.$a->getId().'" name="allergene[]"><img class="allergene"  src="../../img/icones-allergenes/'.$a->getIcone().'" alt="'.$a->getDescription().'">';
        }
        ?>
        <input type="text" name="photo">
        <button type="submit" name="submit" value="valid">Modifier</button>
    </fieldset>
</form>