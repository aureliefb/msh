<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id = $id;
    }

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $nomCategorie;
    public function getNomCategorie(){
        return $this->nomCategorie;
    }
    public function setNomCategorie($nomCategorie){
        return $this->nomCategorie = $nomCategorie;
    }
}
