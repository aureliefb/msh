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

    function envoyerNewsletter($name, \Swift_Mailer $mailer){
        // écrire une newsletter
            $subscribers = $db->query("SELECT FROM newsletter");
            $sql = $db->prepare("INSERT INTO newsletter (sujet,contenu) VALUE (:sujet,:contenu)");
            $sql->execute([
                ":sujet" => htmlentities($_POST["sujet"]),
                ":contenu" => htmlentities($_POST["contenu"]),
                ]);
            $subject = "";
            $body = "";
            $message    = (new \Swift_Message('Hello Email'))
                ->setFrom(["peter@languedepute.fr" => "Peter"])
                ->setTo($subscriber);
          //      ->setSubject($subject);
           //     ->setBody($body);
                    // $this->renderView(
                    //     // templates/emails/registration.html.twig
                    //     'emails/registration.html.twig',array('name' => "Peter")),'text/html');
                /*
                * If you also want to include a plaintext version of the message
                ->addPart(
                    $this->renderView(
                        'emails/registration.txt.twig',
                        array('name' => $name)
                    ),
                    'text/plain'
                )
                */
            $mailer->send($message);
            return new Response("Mail envoyé");
            // return $this->render("...");
        return $this->render("/admin/envoyer-newsletter.html.twig");
    }
}