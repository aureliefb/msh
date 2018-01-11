<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoginRepository")
 */
class Login
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $password;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;
    
    // METHODES GETTER ET SETTER
    function getPassword ()
    {
        return $this->password;
    }

    function getLevel ()
    {
        return $this->level;
    }


    function getPseudo ()
    {
        return $this->pseudo;
    }
    
  
}
