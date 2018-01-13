<?php

// Controller concernant la newsletter
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Newsletter;
use App\Form\NewsletterType;

class PeterController extends Controller{
    /**
     * @Route("admin", name="admin")
     */
    public function hello()
    {
        return $this->render("back/admin.html.twig");
    }
    /**
     * @Route("newsletter", name="newsletter")
     */
    function subscribeNewsletter(Request $request){
        // Creation du formulaire
        $newsletter = new Newsletter();
        $form = $this->createForm(NewsletterType::class,$newsletter)
                     ->handleRequest($request);
        // PHP  if (isset($_REQUEST["submit"]) && ($_REQUEST["valid"] == "submit"))
        if($form->isSubmitted() && $form->isValid()){
            // sauve dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletter);
            $em->flush();
            $this->addFlash('success', $translator->trans('Form is submitted.'));
        }
        return $this->render("front/newsletter.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route("admin/envoyer-newsletter", name="creer newsletter")
     */

    function envoyerNewsletter(){
        // écrire une newsletter
        return $this->render("/admin/envoyer-newsletter.html.twig");
    }
}