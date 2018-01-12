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


    // COMPTE TOUTES LES LIGNES D'UNE TABLE
    // TODO: 
    // IL FAUDRAIT POUVOIR SELECTIONNER SEULEMENT UN CERTAIN NOMBRE DE LIGNE 
    // (ET PAS TOUTES...)
    public function compterLigne ($nomTable, $objetConnection) {
        
        $requeteSQL =
<<<CODESQL
SELECT COUNT(*) AS nbLigne FROM $nomTable
CODESQL;

        $objetStatement = $objetConnection->prepare($requeteSQL);
        $objetStatement->execute();
        $nbLigne = 0;
        foreach($objetStatement as $tabLigne) {
        // VA ME FOURNIR LA VALEUR DANS LA VARIABLE $nbLigne
        // extract($tabLigne);
        $nbLigne = $tabLigne["nbLigne"];
    }
    
    return $nbLigne;
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
