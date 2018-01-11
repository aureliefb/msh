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




    public function trouverArticleUser ($objetConnection) {
        
        $requeteSQL =
<<<CODESQL
SELECT *
FROM produits
WHERE cat = '2'
ORDER BY produit
CODESQL;

        $objetStatement = $objetConnection->prepare($requeteSQL);
        $objetStatement->execute();
        
        return $objetStatement;
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
