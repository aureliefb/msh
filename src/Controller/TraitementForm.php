<?php

namespace App\Controller;


class TraitementForm
{
    
    function __construct ()
    {
        echo "[TraitementForm::__construct]";
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
            $objectConnection->insert("contact", ["email" => $email, "name" => $name,"date_message" => $dateMessage, "message" => $message]);
            
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
                    $pseudo = $objectUser->getPseudo();
                    $level  = $objectUser->getLevel();
                    $id     = $objectUser->getId();
                    echo "WELCOME $pseudo (level=$level)";
                    
                   
                    $objectSession->set("level", $level);
                    $objectSession->set("pseudo", $pseudo);
                    $objectSession->set("id",  $id);
                    
                 
                    
                }
                else 
                {
                    echo "PASSWORD INCORRECT";
                }
            }
            else 
            {
                // KO
                //DEBUG
                echo "EMAIL UNKNOWN";
            }
        }
    }
}