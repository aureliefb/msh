<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

use ORM\EntityManager;
use App\Entity\Article; 


class AdminController extends Controller{

    /**
      * @Route("login", name="login")
      */   
   public function loginAdmin(Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession) {
       
       ob_start();
       
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoBack    = "$pathtoTemplate/part-back";
        require_once("$pathtoTemplate/back/login.php");
        
        $hiddenContent = ob_get_clean();
        
        $checkLevel = $objetSession->get("level");
        if ($checkLevel >= 9)
        {
            
            $urlAdmin = $this->generateUrl("admin");
            return new RedirectResponse($urlAdmin);
        }
        else
        {
           
            return new Response($hiddenContent);
        }
  
   }
   
      /**
      * @Route("/logout", name="logout")
      */   
   public function logout (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
   {
        // delete session
        $objetSession->set("level", 0);
        $objetSession->set("pseudo", "");
        $objetSession->set("email",  "");
        
        // redirection
        $urlLogin = $this->generateUrl("login");
        return new RedirectResponse($urlLogin);

   }
    /**
      * @Route("/admin", name="admin")
      */   
   public function showAdmin (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
   {
      
        $checkLevel = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");
        
        if ($checkLevel >= 9)
        {
            
            ob_start();
            
                 
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates"; 
            $pathtoBack     = "$pathtoTemplate/part-back"; 
            require_once("$pathtoTemplate/back/admin.php");
            
        
            $hiddenContent = ob_get_clean();
            
        
            return new Response($hiddenContent);
        }
        else
        {
          
            $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
            
        }
        
        
   }
   
   
  /**
      * @Route("/admin/newsletter", name="admin-newsletter")
      */   
   public function showAdminNewsletter (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
   {
      
        $checkLevel = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");
        
        if ($checkLevel >= 9)
        {
            
            ob_start();
            
                 
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates"; 
            $pathtoBack     = "$pathtoTemplate/part-back"; 
            require_once("$pathtoTemplate/back/newsletter.php");
            
        
            $hiddenContent = ob_get_clean();
            
        
            return new Response($hiddenContent);
        }
        else
        {
          
            $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
            
        }
        
        
   }
   
     /**
      * @Route("/admin/catalogue", name="admin-catalogue")
      */   
   public function showAdminCatalogue (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
   {
      
        $checkLevel = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");
        
        if ($checkLevel >= 9)
        {
            
            ob_start();
            
                 
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates"; 
            $pathtoBack     = "$pathtoTemplate/part-back"; 
            require_once("$pathtoTemplate/back/catalogue.php");
            
        
            $hiddenContent = ob_get_clean();
            
        
            return new Response($hiddenContent);
        }
        else
        {
          
           $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
            
        }
        
        
   }
   
   
     /**
      * @Route("/admin/boutique", name="admin-boutique")
      */   
   public function showAdminBoutique (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
   {
      
        $checkLevel = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");
        
        if ($checkLevel >= 9)
        {
            
            ob_start();
            
                 
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates"; 
            $pathtoBack     = "$pathtoTemplate/part-back"; 
            require_once("$pathtoTemplate/back/boutique.php");
            
        
            $hiddenContent = ob_get_clean();
            
        
            return new Response($hiddenContent);
        }
        else
        {
          
           $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
            
        }
        
        
   }
   
   
   

 




}