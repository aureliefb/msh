<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    public function __construct(){
        $this->allergene = new ArrayCollection();
    }
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
    private $nomProduit;
    public function getNomProduit(){
        return $this->nomProduit;
    }
    public function setNomProduit($nomProduit){
        return $this->nomProduit = $nomProduit;
    }

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $description;
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        return $this->description = $description;
    }

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
    public function getCategorie(): Categorie {
        return $this->categorie;
    }

    public function setCategorie(Categorie $categorie) {
        $this->categorie = $categorie;
    }

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Allergene")
     * @ORM\JoinColumn(nullable=false)
     */
    private $allergene;
    public function getAllergene(): Allergene {
        return $this->allergene;
    }

    public function removeAllergene(){
        $this->allergene = new ArrayCollection();
    }

    public function setAllergene(Allergene $allergene) {
        if ($this->allergene->contains($allergene)) {
            return;
        }
        $this->allergene[] = $allergene;
    }

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $photo;
    public function getPhoto(){
        return $this->photo;
    }
    public function setPhoto($photo){
        return $this->photo  = $photo;
    }

    /**
     * @ORM\Column(type="integer")
     */
     private $label;
     public function getLabel(){
        return $this->label;
    }
     public function setLabel($label){
         return $this->label = $label;
     }

     /**
     * @ORM\Column(type="integer")
     */
    private $active;
    public function getActive(){
        return $this->active;
    }
    public function setActive($active){
        return $this->active = $active;
    }

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $urlProduit;
    public function getUrlProduit(){
        return $this->urlProduit;
    }
    public function setUrlProduit($urlProduit){
        return $this->urlProduit = $urlProduit;
    }
}