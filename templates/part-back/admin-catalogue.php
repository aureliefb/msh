<h2>ADMIN CATALOGUE</h2>

<section class="page-catalogue">
    <p><a href="./ajouter-produit">Ajouter un nouveau produit</a></p>

    <p>Liste des Produits du Catalogue :</p>
<table>
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
        <thead>
            <tr>
                <th>
                <strong>'.$nomProduit.'</strong> (<a href="./modifier-produit/'.$id.'">Editer ?</a>) (<a href="./supprimer-produit/'.$id.'">Supprimer ?</a>)
                </th>
            </tr>
        </thead>';
    }
    ?>
</table>