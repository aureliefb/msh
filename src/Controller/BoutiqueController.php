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
use App\Form\BoutiqueType;
use ORM\EntityManager;

class BoutiqueController extends Controller{
    /**
     * @Route("/admin/ajouter-boutique", name="ajouter-boutique")
     */
    function createBoutique(Request $request, Connection $connection, SessionInterface $objetSession){
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

        if ($checkLevel >= 9){
        // Récupération des données
            $boutique = new Boutique();
            $nomBoutique = $request->get("nom_boutique","");
            $adresse     = $request->get("adresse","");
            $horaires    = $request->get("horaires","");
            $telephone   = $request->get("telephone","");
            // Creation du formulaire
            if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "validB")
            && ($nomBoutique != "") && ($adresse != "") && ($horaires != "") && ($telephone != "")){
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
            // return $this->render("admin/boutique-ajouter.html.twig", ["form" => $form->createView()]);
            ob_start();
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates";
            $pathtoBack     = "$pathtoTemplate/part-back";
            require_once("$pathtoTemplate/back/boutique-ajouter.php");
            $cache = ob_get_clean();
            return new Response($cache);
            }
        else
        {
        $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
    }
}

    /**
     * @Route("/admin/boutiques", name="admin-boutiques")
     */
    function readBoutiques(Request $request, Connection $connection, SessionInterface $objetSession){
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

    /**
     * @Route("admin/modifier-boutique/{id}", name="modifier-boutique")
     */
    function updateBoutique(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $boutique = $em->getRepository(Boutique::class)
                       ->find($id);
        if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "validB")
        && ($nomBoutique != "") && ($adresse != "") && ($horaires != "") && ($telephone != "")){
            // récupère les données
            $boutique = $this->getData();
            // persist et tire la chasse
            $em = $this->getDoctrine()->getManager();
            $em->persist($boutique);
            $em->flush();
        }
        // return $this->render('admin/boutiques.html.twig', ['boutique' => $boutique]);
        ob_start();
        $path     = $this->getParameter('kernel.project_dir');
        $pathtoTemplate  = "$path/templates";
        $pathtoBack     = "$pathtoTemplate/part-back";
        require_once("$pathtoTemplate/back/boutique-modifier.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    /**
     * @Route("admin/supprimer-boutique/{id}", name="supprimer-boutique")
     */
    function deleteBoutique($id){
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