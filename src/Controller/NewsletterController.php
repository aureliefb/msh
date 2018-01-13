<?php

// Controller concernant la newsletter
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Newsletter;

class NewsletterController extends Controller{
    /**
     * @Route("newsletter", name="newsletter")
     */
    function subscribeNewsletter(Request $request){
        // Récupération de l'email
        $newsletter = new Newsletter();
        $email = $request->get("email","");
        // Creation du formulaire
        if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "validNL")){
        // sauve dans la BDD
        $newsletter->setEmail($email);
        $em = $this->getDoctrine()->getManager();
        $em->persist($newsletter);
        $em->flush();
        echo "<p>vous êtes inscrit avec $email.</p>";
        }
        // affiche dans $page.php
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/newsletter.php");
        $cache = ob_get_clean();
		return new Response($cache);
        }

    /**
     * @Route("admin/envoyer-newsletter", name="creer newsletter")
     */

    function envoyerNewsletter(){
        // écrire une newsletter
        return $this->render("/admin/envoyer-newsletter.html.twig");
    }
}