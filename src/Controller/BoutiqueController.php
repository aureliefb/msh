<?php

// Controller concernant la Boutique
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\Boutique;
use App\Entity\Contact;
use ORM\EntityManager;

class BoutiqueController extends Controller{
    /**
      * @Route("boutiques", name="boutiques")
      */
      public function showBoutique(Request $request, \Swift_Mailer $mailer){
        // entity manager
        $em = $this->getDoctrine()->getManager();
        // lie à la bdd Boutique dans le repository
        $listBoutiques = $em->getRepository(Boutique::class)
                            ->findAll();
        $this->contact($request, $mailer);
        ob_start();
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/boutiques.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    function contact(Request $request, \Swift_Mailer $mailer) {
        if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "validC")){
            // Récupération des données
            $nom	 = $request->get("nom","");
            $email	 = $request->get("email","");
            $sujet   = $request->get("sujet","");
            $message = $request->get("message","");
            
            // if (($nom != "") && ($email != "") && ($sujet != "") && ($message != "")){
                // $contact = new Contact();
                // $contact->setNom($nom);
                // $contact->setEmail($email);
                // $contact->setSujet($sujet);
                // $contact->setMessage($message);
                // // sauve dans la BDD
                // $em = $this->getDoctrine()->getManager();
                // $em->persist($contact);
                // $em->flush();

                // envoie le mail
                $courriel = (new \Swift_Message($sujet));
                $courriel->setFrom([$email => $nom])
                         ->setBody($message)
                         ->setTo("rukawa@ecchi.fr");
                $mailer->send($courriel);
                // }
            }
            return $this->redirect($this->generateUrl("boutiques"));
        }

    /**
     * @Route("/admin/ajouter-boutique", name="ajouter-boutique")
     */
    function createBoutique(Request $request, Connection $connection, SessionInterface $objetSession){
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

        if ($checkLevel >= 9){
            if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "valid")){
                // Récupération des données
                $nomBoutique = $request->get("nom_boutique","");
                $adresse     = $request->get("adresse","");
                $horaires    = $request->get("horaires","");
                $telephone   = $request->get("telephone","");
                if (($nomBoutique != "") && ($adresse != "") && ($horaires != "") && ($telephone != "")){
                    $boutique = new Boutique();
                    $boutique->setNomBoutique($nomBoutique);
                    $boutique->setAdresse($adresse);
                    $boutique->setHoraires($horaires);
                    $boutique->setTelephone($telephone);
                    // sauve dans la BDD
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($boutique);
                    $em->flush();
                    $this->addFlash("success","yay §§§");
                }
                echo '<p class="KO">erreur.</p>';
            }
            // return $this->render("admin/boutique-ajouter.html.twig", ["form" => $form->createView()]);
            ob_start();
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates";
            $pathtoBack     = "$pathtoTemplate/part-back";
            require_once("$pathtoTemplate/back/boutique-ajouter.php");
            $cache = ob_get_clean();
            return new Response($cache);
        }
        else {
        $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
        }
    }

    /**
     * @Route("/admin/boutiques", name="admin-boutiques")
     */
    function readBoutiques(Request $request, Connection $connection, SessionInterface $objetSession){
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

        if ($checkLevel >= 9){
            // entity manager
            $em = $this->getDoctrine()->getManager();
            // lie à la bdd Boutique dans le repository
            $listBoutiques = $em->getRepository(Boutique::class)
                                ->findAll();
        // return $this->render("admin/boutiques.html.twig", ["listBoutiques" => $listBoutiques]);
        ob_start();
        $path     = $this->getParameter('kernel.project_dir');
        $pathtoTemplate  = "$path/templates";
        $pathtoBack     = "$pathtoTemplate/part-back";
        require_once("$pathtoTemplate/back/boutique-admin.php");
        $cache = ob_get_clean();
        return new Response($cache);
        }
        else {
            $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
        }
    }

    /**
     * @Route("admin/modifier-boutique/{id}", name="modifier-boutique")
     */
    function updateBoutique ($id,Request $request, Connection $connection, SessionInterface $objetSession)
    {
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

        if ($checkLevel >= 9)
        {
            // récupère l'id
            $em = $this->getDoctrine()->getManager();
            $boutique = $em->getRepository(Boutique::class)
                           ->find($id);
            if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "valid"))
            {
                // récupère les données
                $nomBoutique = $request->get("nom_boutique","");
                $adresse     = $request->get("adresse","");
                $horaires    = $request->get("horaires","");
                $telephone   = $request->get("telephone","");
                    if (($nomBoutique != "") && ($adresse != "") && ($horaires != "") && ($telephone != ""))
                    {
                    // envoie les données
                    $boutique->setNomBoutique($nomBoutique);
                    $boutique->setAdresse($adresse);
                    $boutique->setHoraires($horaires);
                    $boutique->setTelephone($telephone);
                    // sauve dans la BDD
                    $em->persist($boutique);
                    $em->flush();
                    return $this->redirect($this->generateUrl("admin-boutiques"));
                }
            }
            ob_start();
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates";
            $pathtoBack     = "$pathtoTemplate/part-back";
            require_once("$pathtoTemplate/back/boutique-modifier.php");
            $cache = ob_get_clean();
            return new Response($cache);
        }
        else {
            $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
        }
    }

    /**
     * @Route("admin/supprimer-boutique/{id}", name="supprimer-boutique")
     */
    function deleteBoutique($id, SessionInterface $objetSession){
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

        if ($checkLevel >= 9){
            // tout pareil qu'en haut
            $em = $this->getDoctrine()->getManager();
            $boutique = $em->getRepository(Boutique::class)
                        ->find($id);
            // se torche et tire la chasse
            $em->remove($boutique);
            $em->flush();
            return $this->redirect($this->generateUrl("admin-boutiques"));
        }
    }
}