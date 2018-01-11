<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AllergeneRepository")
 */
class Allergene
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
    private $nomAllergene;
    public function getNomAllergene(){
        return $this->nomAllergene;
    }
    public function setNomAlergene($nomAllergene){
        return $this->nomAllergene = $nomAllergene;
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
     * @ORM\Column(type="string", length=64)
     */
    private $icone;
    public function getIcone(){
        return $this->icone;
    }
    public function setIcone($icone){
        return $this->icone = $icone;
    }
}
