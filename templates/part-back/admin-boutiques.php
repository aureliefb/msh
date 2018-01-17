<?php
    $urlAdmin = $this->generateUrl("admin");
?>

<h2>Modifier les boutiques</h2>
<section class="admin-boutiques">
    <a class="add-boutique" href="./ajouter-boutique">+ Ajouter une nouvelle boutique</a>
    <p>Liste des boutiques déjà existantes :</p>

    <table>
        <tbody>
    <?php
        foreach ($listBoutiques as $b) {
            $id          = $b->getId();
            $nomBoutique = $b->getNomBoutique();
            $adresse     = $b->getAdresse();
            $horaires    = $b->getHoraires();
            $telephone   = $b->getTelephone();
            echo '
                <tr class="tr">
                    <td>
                        <strong>'.$nomBoutique.'</strong>
                    </td>
                    <td>
                        <a href="./modifier-produit/'.$id.'">Modifier ?</a>
                    </td>
                    <td>
                        <a href="./supprimer-produit/'.$id.'">Supprimer ?</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">'.$adresse.'</td>
                </tr>
                <tr>
                    <td colspan="3">'.$horaires.'</td>
                </tr>
                <tr>
                    <td colspan="3">'.$telephone.'</td>                  
                </tr>';
        }
        ?>
        </tbody>
    </table>

    <a class= "admin-back-button" href ="<?php echo $urlAdmin?>">Retour page d'accueil ADMIN</a>
</section>