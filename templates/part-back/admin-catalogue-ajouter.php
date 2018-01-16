<form method="POST">
    <fieldset>
        <legend>
            <strong>Ajouter un nouveau produit</strong>
        </legend>
        <input type="text" name="nom_produit" class="select" placeholder="Nom du produit">
        <select name="categorie">
            <?php
            foreach ($categories as $c) {
                echo '<option value="'.$c->getId().'" name="categorie">'.$c->getNomCategorie().'</option>';
            }
            ?>
        </select>

        <textarea name="description" cols="40" rows="10" class="select" placeholder="Description du produit"></textarea>
        <?php
        foreach ($allergenes as $a){
            echo '<input type="checkbox" value="'.$a->getId().'" name="allergene[]"><img class="allergene"  src="../img/icones-allergenes/'.$a->getIcone().'" alt="'.$a->getDescription().'">';
        }
        ?>
        <input type="text" name="photo" class="select" placeholder="Photo du produit">
        <button type="submit" name="submit" value="valid">Ajouter</button>
    </fieldset>
</form>