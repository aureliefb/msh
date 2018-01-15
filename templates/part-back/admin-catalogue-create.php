<form method="POST">
        <fieldset>
            <legend><strong>Ajouter un nouveau produit</strong></legend>
            <input type="text" name="produit" placeholder="Nouveau produit">
            <select name="categorie">
                <option value="1" name="categorie[]">Pain</option>
                <option value="2" name="categorie[]">Viennoiserie</option>
                <option value="3" name="categorie[]">Cake</option>
                <option value="4" name="categorie[]">Saisonnier</option>
                <option value="4" name="categorie[]">Cakes</option>
                <option value="4" name="categorie[]">Gâteaux</option>
                <option value="4" name="categorie[]">Focaccia</option>
                <option value="4" name="categorie[]">Autres</option>
            </select><br />
            <input type="checkbox" value="4" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/arachides.png" alt="Allerges arachides">
            <input type="checkbox" value="6" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/avoine.png" alt="Allerges avoines">
            <input type="checkbox" value="1" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/cereales-gluten.png" alt="Allerges cereales">
            <input type="checkbox" value="10" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/crustaces.png" alt="Allerges crustaces">
            <input type="checkbox" value="8" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/lait.png" alt="Allerges lactose">
            <input type="checkbox" value="9" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/mais.png" alt="Allerges mais">
            <input type="checkbox" value="2" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/cereales-sans-gluten.png" alt="Allerges sans gluten">
            <input type="checkbox" value="3" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/fruits-coques.png" alt="Allerges noix">
            <input type="checkbox" value="5" name="allergene[]"><img class="allergene"  src="./img/icones-allergenes/oeufs.png" alt="Allerges oeufs">
            <input type="checkbox" value="11" name="allergene[]"><img class="allergene" src="./img/icones-allergenes/poissons.png" alt="Allerges poissons">
            <input type="checkbox" value="7" name="allergene[]"><img class="allergene" src="./img/icones-allergenes/sesame.png" alt="Allerges sesames">
            <input type="checkbox" value="12" name="allergene[]"><img class="allergene" src="./img/icones-allergenes/soja.png" alt="Allerges sojas"><br />
            <input type="file"><br />
            <button type="submit" name="submit" value="valid">Valider</button>
        </fieldset>
    </form>