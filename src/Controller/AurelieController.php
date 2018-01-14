<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AurelieController extends Controller{

    /**
      * @Route("mentionslegales", name="mentionslegales")
      */   
   public function showMentionsLegales(Request $objetRequest, Connection $objetConnection) {
        ob_start();       
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/mentionslegales.php");
        $cache = ob_get_clean();
        return new Response($cache);
   }




}