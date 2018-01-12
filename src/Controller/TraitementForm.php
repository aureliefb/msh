<?php

namespace App\Controller;


class TraitementForm
{
    
    function __construct ()
    {
        
    }
    
    function traiterNewsletter ($objetRequest, $objetConnection)
    {
      
        $email = $objetRequest->get("email", "");
    
        
    
        if ($email != "")
        {
            
            $objetConnection->insert("newsletter", ["email" => $email]);
            
            echo "Merci pour votre inscription!";
        }
        
    }
    
    function traiterContact ($objetRequest, $objetConnection)
    {
           
        $email = $objetRequest->get("email", "");
        $name = $objetRequest->get("name", "");
        $message = $objetRequest->get("message", "");
       
      
        if (($email != "") && ($name != "") && ($message != ""))
        {
            
            $dateMessage = date("Y-m-d H:i:s"); 
            $objetConnection->insert("contact", ["email" => $email, "name" => $name,"date_message" => $dateMessage, "message" => $message]);
            
            echo "Merci pour votre message!";
        }
    }
      
    
    function traiterLogin ($objetRequest, $objetConnection, $objetRepository, $objetSession)
    {
      
        $pseudo     = $objetRequest->get("pseudo",       "");
        $password   = $objetRequest->get("password",    "");
        
      
        if ( ($pseudo != "") && ($password != ""))
        {
         
            $objetUser  = $objetRepository->findOneBy([ "pseudo" => $pseudo]);
            if ($objetUser)
            {
                $passwordHash = $objetUser->getPassword();
                
                if (password_verify($password, $passwordHash))
                {
                    $pseudo = $objetUser->getPseudo();
                    $level  = $objetUser->getLevel();
                    $id     = $objetUser->getId();
                    echo "WELCOME $pseudo (level=$level)";
                    
                   
                    $objetSession->set("level", $level);
                    $objetSession->set("pseudo", $pseudo);
                    $objetSession->set("id",  $id);
                    
                 
                    
                }
                else 
                {
                    echo "Identifiants de connexion incorrects.";
                }
            }
            else 
            {
                // KO
                //DEBUG
                echo "Identifiants de connexion incorrects.";
            }
        }
    }
}