<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
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

    /**
     * @ORM\Column(type="string", length=64)
     */

    private $nom;
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        return $this->nom = $nom;
    }

    /**
     * @ORM\Column(type="string", length=64)
     */

    private $email;
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }

    /**
     * @ORM\Column(type="string", length=128)
     */

    private $sujet;
    public function getSujet(){
        return $this->sujet;
    }
    public function setSujet($sujet){
        return $this->sujet = $sujet;
    }

    /**
     * @ORM\Column(type="text", length=2048)
     */

    private $message;
    public function getMessage(){
        return $this->message;
    }
    public function setMessage($message){
        return $this->message = $message;;
    }
}
