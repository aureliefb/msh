<?php
// Controle des routes
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    /**
      * @Route("/", name="accueil")
      */
    public function showIndex(Request $objetRequest, Connection $objetConnection){
        ob_start();
        $path           = $this->getParameter("kernel.project_dir");
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/accueil.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    /**
      * @Route("savoirfaire", name="savoirfaire")
      */
    public function showPhilo(){
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/savoirfaire.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    /**
      * @Route("pierre", name="pierre")
      */
    public function showAbout(){
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/pierre.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    /**
      * @Route("contact", name="contact")
      */
      public function showContact(){
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/contact.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    /**
      * @Route("actus", name="actus")
      */
   public function showActus() {
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/actus.php");
        $cache = ob_get_clean();
        return new Response($cache);
   }

	/**
      * @Route("ajax", name="ajax")
      */
      public function ajax(Request $objetRequest, Connection $objetConnection) {
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/ajax.php");
        $cache = ob_get_clean();
        return new Response($cache);
   }
}