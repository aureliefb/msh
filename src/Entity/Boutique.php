<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BoutiqueRepository")
 */
class Boutique
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
     * @ORM\Column(type="string", length=64)
     */
    private $nomBoutique;
    public function getNomBoutique(){
        return $this->nomBoutique;
    }
    public function setNomBoutique($nomBoutique){
        return $this->nomBoutique = $nomBoutique;
    }

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $adresse;
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        return $this->adresse = $adresse;
    }

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $horaires;
    public function getHoraires(){
        return $this->horaires;
    }
    public function setHoraires($horaires){
        return $this->horaires = $horaires;
    }

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;
    public function getTelephone(){
        return $this->telephone;
    }
    public function setTelephone($telephone){
        return $this->telephone = $telephone;
    }
}
