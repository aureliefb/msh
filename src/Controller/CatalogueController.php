<?php

// Controller concernant la Catalogur
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\Categorie;
use App\Entity\Produit;
use App\Repository\ProduitRepository;

use ORM\EntityManager;

class CatalogueController extends Controller{


    /**
    * @Route("catalogue", name="catalogue")
    */   
    public function showCatalogue(Request $objetRequest, Connection $objetConnection) {
        ob_start();       
        $path           = $this->getParameter('kernel.project_dir');
        $pathtoTemplate = "$path/templates";
        $pathtoFront    = "$pathtoTemplate/part-front";
        require_once("$pathtoTemplate/front/catalogue.php");
        $cache = ob_get_clean();
        return new Response($cache);
        }



    /**
     * @Route("/admin/ajouter-produit", name="ajouter-boutique")
     */
    function createCatalogue(Request $request, Connection $connection, SessionInterface $objetSession){
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

        if ($checkLevel >= 9){
        // Récupération des données
            $produit = new Boutique();
            $nomProduit  = $request->get("nom_produit","");
            $description = $description->get("description","");
            // Creation du formulaire
            if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "valid")
            && ($nomProduit != "") && ($description != "")){
                $produit->setNomProduit($nomProduit);
                $produit->setDescription($description);
                // sauve dans la BDD
                $em = $this->getDoctrine()->getManager();
                $em->persist($produit);
                $em->flush();
            }
            // return $this->render("admin/boutique-ajouter.html.twig", ["form" => $form->createView()]);
            ob_start();
            $path     = $this->getParameter('kernel.project_dir');
            $pathtoTemplate  = "$path/templates";
            $pathtoBack     = "$pathtoTemplate/part-back";
            require_once("$pathtoTemplate/back/produit-ajouter.php");
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
     * @Route("admin/catalog", name="admin-cata")
     */
    function xreadCatalogue(){
        // entity manager
		$em   = $this->getDoctrine()->getManager();
		$repo = $this->getDoctrine()->getRepository(Produit::class);
         // lie à la bdd Boutique dans le repository
        $listProduits = $em->getRepository(Produit::class)
							->findAll();
		// $categorie	 = $em->getRepository(Categorie::class)
		// 		xreadCatalogue		  ->findBy("id");
        ob_start();
        $path     = $this->getParameter('kernel.project_dir');
        $pathtoTemplate  = "$path/templates";
        $pathtoBack     = "$pathtoTemplate/part-back";
        require_once("$pathtoTemplate/back/catalogue.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

         /**
		 * @Route("/admin/catalogue", name="admin-catalogue")
		*/
	public function readCatalogue (Request $request, Connection $connection, SessionInterface $objetSession)
	{
		$checkLevel  = $objetSession->get("level");
		$checkPseudo = $objetSession->get("pseudo");

		if ($checkLevel >= 9)
		{
			// entity manager
			$em = $this->getDoctrine()->getManager();
			// lie à la bdd Boutique dans le repository
			$repo = $this->getDoctrine()->getRepository(Produit::class);
			$listProduits = $em->getRepository(Produit::class)
							   ->findBy([], ["nomProduit" => "ASC"]);
			$categorie	  = $em->getRepository(Categorie::class);
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
     * @Route("admin/modifier-produit/{id}", name="modifier-produit")
     */
    function updateCatalogue(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)
                       ->find($id);
        if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "validB")
        && ($nomProduit != "") && ($adresse != "") && ($horaires != "") && ($telephone != "")){
            // récupère les données
            $produit = $this->getData();
            // persist et tire la chasse
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
        }
        // return $this->render('admin/boutiques.html.twig', ['boutique' => $produit]);
        ob_start();
        $path     = $this->getParameter('kernel.project_dir');
        $pathtoTemplate  = "$path/templates";
        $pathtoBack     = "$pathtoTemplate/part-back";
        require_once("$pathtoTemplate/back/boutique-modifier.php");
        $cache = ob_get_clean();
        return new Response($cache);
    }

    /**
     * @Route("admin/supprimer-produit/{id}", name="supprimer-produit")
     */
    function deleteCatalogue($id){
        // tout pareil qu'en haut
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)
                       ->find($id);
        // se torche et tire la chasse
        $em->remove($produit);
        $em->flush();
        return $this->redirect($this->generateUrl("admin-boutiques"));
    }
}