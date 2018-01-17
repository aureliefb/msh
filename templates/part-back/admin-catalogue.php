<h2>Gestion du catalogue</h2>

<section class="admin-catalogue">
    <p>
        <a class="add-produit" href="./ajouter-produit"> + Ajouter un nouveau produit</a>
    </p>
    
    <table>
                    <tbody>
<?php
$nbProduits = $repo->compterLigne("produit", $connection);
echo "Il y a $nbProduits produits dans le catalogue";
    foreach ($listProduits as $p){
        $id          = $p->getId();
        $nomProduit  = $p->getNomProduit();
        $categorie   = $p->getCategorie();
        $urlProduit  = $p->getUrlProduit();
        $urlProduit  = $this->generateUrl("admin-catalogue", [ "nomCategorie" => $categorie, "nomProduit" => $urlProduit ]);

            echo '
                <tr>
                    <td>
                        <strong>'.$nomProduit.'</strong>
                    </td>
                    <td>
                        <a href="./modifier-produit/'.$id.'">Modifier ?</a>
                    </td>
                    <td>
                        <a href="./supprimer-produit/'.$id.'">Supprimer ?</a>
                    </td>
                </tr>';
        }
        ?>
        </tbody>
    </table>
    <a class= "admin-back-button" href ="<?php echo $urlAdmin?>">Retour page d'accueil ADMIN</a>
</section>