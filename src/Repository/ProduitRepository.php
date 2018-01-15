<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Produit::class);
    }

    // compte compte le nombre de produits dans la BDD
    public function compterLigne ($nomTable, $connection) {
        $requeteSQL = "SELECT COUNT(*) AS nbProduits FROM $nomTable";

        $objetStatement = $connection->prepare($requeteSQL, []);
        $objetStatement->execute();

        $nbProduits = 0;
        foreach($objetStatement as $tabLigne) {
        // VA ME FOURNIR LA VALEUR DANS LA VARIABLE $nbLigne
        // extract($tabLigne);
        $nbProduits = $tabLigne["nbProduits"];
        }
    return $nbProduits;
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
