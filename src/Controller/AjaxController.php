<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Produit;
use App\Entity\Categorie;

class AjaxController extends Controller{

    /**
      * @Route("ajax", name="ajax")
      */   
   public function ajax (Request $objetRequest, Connection $objetConnection) {
        ob_start();       
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/ajax.php");
        $cache = ob_get_clean();
        return new Response($cache);
   }




}