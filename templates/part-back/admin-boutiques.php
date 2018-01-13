<h2>Modifier les boutiques</h2>
<a href="./ajouter-boutique">Ajouter une nouvelle boutique</a>
<p>Liste des boutiques déjà existantes :</p>
<table>
<?php
    foreach ($listBoutiques as $b) {
        $id          = $b->getId();
        $nomBoutique = $b->getNomBoutique();
        $adresse     = $b->getAdresse();
        $horaires    = $b->getAdresse();
        $telephone   = $b->getTelephone();
        echo '
        <thead>
            <tr>
                <th>
                <strong>'.$nomBoutique.'</strong> (<a href="./modifier-boutique/'.$id.'">Editer ?</a>) (<a href="./supprimer-boutique/'.$id.'">Supprimer ?</a>)
                </th>
            </tr>
        </thead>
        <tr><td>'.$adresse.'</td></tr>
        <tr><td>'.$horaires.'</td></tr>
        <tr><td>'.$telephone.'</td></tr>';
    }
    ?>
</table>

<a href=".">Retour</a>