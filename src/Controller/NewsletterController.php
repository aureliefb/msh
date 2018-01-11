<?php

// Controller concernant la newsletter
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\Newsletter;
use App\Form\NewsletterType;

class NewsletterController extends Controller{

    /**
     * @Route("/newsletter", name="newsletter")
     */
    function subscribeNewsletter($objetRequest, $objetConnection){
        // Creation du formulaire
        /*$newsletter = new Newsletter();
        $form = $this->createForm(NewsletterType::class,$newsletter)
                     ->handleRequest($request);
        // PHP  if (isset($_REQUEST["submit"]) && ($_REQUEST["valid"] == "submit"))
        if($form->isSubmitted() && $form->isValid()){
            // sauve dans la BDD
            $this->getDoctrine()->getManager()
                 ->persist($newsletter)
                 ->flush();
            // $this->addFlash("success","yay §§§");
        }
        return $this->render("front/newsletter.html.twig", ["form" => $form->createView()]);*/

    
        $email = $objetNewsletterController->get("email", "");       

        if ($email != "")
        {
            $objetConnection->insert("newsletter", [ "email" => $email ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "MERCI DE VOTRE INSCRIPTION AVEC $email";
        }

    }

    /**
     * @Route("admin/envoyer-newsletter", name="creer newsletter")
     */

    function envoyerNewsletter(){
        // écrire une newsletter
        return $this->render("/admin/envoyer-newsletter.html.twig");
    }
}