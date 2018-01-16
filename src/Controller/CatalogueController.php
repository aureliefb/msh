<?php

// Controller concernant la Catalogur
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\Allergene;
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
     * @Route("/admin/ajouter-produit", name="ajouter-produit")
     */
    function createProduits (Request $request, Connection $connection, SessionInterface $objetSession){
        $checkLevel  = $objetSession->get("level");
        $checkPseudo = $objetSession->get("pseudo");

		if ($checkLevel >= 9){
			$em = $this->getDoctrine()->getManager();
			$categories = $em->getRepository(Categorie::class)
									->findAll();
			$allergenes = $em->getRepository(Allergene::class)
							 ->findAll();
			if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "valid")){
				// récupère les données du form
				$nomProduit  = $request->get("nom_produit","");
				$description = $request->get("description","");
				$categorieId = $request->get("categorie","");
				$allergeneId = $request->get("allergene","");
				$photo		 = $request->get("photo","");
				// transforme les espaces en tiret et vire les mascules
				$urlProduit  = str_replace(" ","-",$nomProduit);
				$urlProduit  = strtolower($urlProduit);
				// si le nom ou la description est vide
				if (($nomProduit != "") && ($description != "")){
					$produit   = new Produit();
					// va les lier à la BDD avec entity manager
					$em = $this->getDoctrine()->getManager();
					$produit->setNomProduit($nomProduit);
					$produit->setDescription($description);
					$produit->setLabel(0);
					$produit->setActive(1);
					$produit->setPhoto($photo);
					$produit->setUrlProduit($urlProduit);
					// récupère les categories en les cherchant dans le depo
					$categorie = $em->getRepository(Categorie::class)
									->find($categorieId);
					$produit->setCategorie($categorie);
					// récupère les id des allergenes via un tableau
					foreach ($allergeneId as $id){
						$allergene = $em->getRepository(Allergene::class)
										->find($id);
						$produit->setAllergene($allergene);
					}
					// sauve dans la BDD et flush
					$em->persist($produit);
					$em->flush();
				}
				else{
					echo '<p class="KO">erreur.</p>';
				}
			}
            // return $this->render("admin/boutique-ajouter.html.twig", ["form" => $form->createView()]);
			ob_start();
			$path     = $this->getParameter('kernel.project_dir');
			$pathtoTemplate  = "$path/templates";
			$pathtoBack      = "$pathtoTemplate/part-back";
			require_once("$pathtoTemplate/back/produit-ajouter.php");
			$cache = ob_get_clean();
			return new Response($cache);
		}
		else {
		$urlLogin = $this->generateUrl("login");
		return new RedirectResponse($urlLogin);
		}
    }

	/**
	 * @Route("/admin/catalogue", name="admin-catalogue")
	 */
	public function readProduits (Request $request, Connection $connection, SessionInterface $objetSession)
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
    function updateProduits ($id,Request $request, Connection $connection, SessionInterface $objetSession){
		$checkLevel  = $objetSession->get("level");
		$checkPseudo = $objetSession->get("pseudo");

		if ($checkLevel >= 9)
        {
			// récupère l'id
			$em = $this->getDoctrine()->getManager();
			$produit = $em->getRepository(Produit::class)
						  ->find($id);
			$categories = $em->getRepository(Categorie::class)
									->findAll();
			$allergenes = $em->getRepository(Allergene::class)
							->findAll();

			if (isset($_REQUEST["submit"]) && ($_REQUEST["submit"] == "valid")){
				// récupère les données du form
				$nomProduit  = $request->get("nom_produit","");
				$description = $request->get("description","");
				$categorieId = $request->get("categorie","");
				$allergeneId = $request->get("allergene","");
				$photo		 = $request->get("photo","");

				// si le nom ou la description est vide
				if (($nomProduit != "") && ($description != "")){
					// va les lier à la BDD avec entity manager
					$produit->setNomProduit($nomProduit);
					$produit->setDescription($description);
					$produit->setLabel(0);
					$produit->setActive(1);
					$produit->setPhoto($photo);
					// transforme les espaces en tiret et vire les mascules
					$urlProduit  = str_replace(" ","-",$nomProduit);
					$urlProduit  = strtolower($urlProduit);
					$produit->setUrlProduit($urlProduit);
					// récupère les categories en les cherchant dans le depo
					$categorie = $em->getRepository(Categorie::class)
									->find($categorieId);
					$produit->setCategorie($categorie);
					// récupère les id des allergenes via un tableau
					$produit->removeAllergene();
					foreach ($allergeneId as $aId){
						$allergene = $em->getRepository(Allergene::class)
										->find($aId);
						$produit->setAllergene($allergene);
					}
					// sauve dans la BDD et flush
					$em->persist($produit);
					$em->flush();
					return $this->redirect($this->generateUrl("admin-catalogue"));
				}
        	}
			// return $this->render('admin/boutiques.html.twig', ['boutique' => $produit]);
			ob_start();
			$path     = $this->getParameter('kernel.project_dir');
			$pathtoTemplate  = "$path/templates";
			$pathtoBack     = "$pathtoTemplate/part-back";
			require_once("$pathtoTemplate/back/produit-modifier.php");
			$cache = ob_get_clean();
			return new Response($cache);
		}
        else {
            $urlLogin = $this->generateUrl("login");
            return new RedirectResponse($urlLogin);
		}
    }

    /**
     * @Route("admin/supprimer-produit/{id}", name="supprimer-produit")
     */
    function deleteProduits ($id){
        // tout pareil qu'en haut
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)
                       ->find($id);
        // se torche et tire la chasse
        $em->remove($produit);
        $em->flush();
        return $this->redirect($this->generateUrl("admin-catalogue"));
	}

	function getUploadedFile ($nameInput, $request, $path)
    {
        $imagePath = "";
        $objetUploadedFile = $objetRequest->files->get($nameInput);
        if ($objetUploadedFile)
        {
            // IL Y A UN FICHIER UPLOADE
            // EST-CE QUE L'UPLOAD S'EST DEROULE SANS ERREUR
            // EST-CE QUE L'EXTENSION EST AUTORISEE
            // EST-CE QUE LA TAILLE NE DEPASSE PAS LA LIMITE AUTORISEE
            // ON SORT LE FICHIER HORS DE SA QUARANTAINE

            // https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/UploadedFile.html
            // ATTENTION: DOUBLE NIVEAU HERITAGE
            // https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/File.html
            // http://php.net/SplFileInfo

            if ($objetUploadedFile->getError() == 0)
            {
                // OK
                $extensionFichier = $objetUploadedFile->getClientOriginalExtension();
                $extensionFichier = strtolower($extensionFichier);
                if (in_array($extensionFichier, [ "jpg", "jpeg", "png", "gif", "svg" ]))
                {
                    // OK
                    // http://php.net/manual/fr/splfileinfo.getsize.php
                    $tailleFichier = $objetUploadedFile->getSize();
                    if ($tailleFichier <= 200 * 1024) // 200 ko
                    {
                        // OK
                        // https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/UploadedFile.html#method_getClientOriginalName
                        $nomOriginal = $objetUploadedFile->getClientOriginalName();
                        // SORTIR LE FICHIER DE SA QUARANTAINE
                        // ATTENTION: NE PAS OUBLIER DE CREER LE DOSSIER upload...
                        $dossierCible = "$cheminSymfony/public/assets/upload/";
                        // https://api.symfony.com/2.8/Symfony/Component/HttpFoundation/File/UploadedFile.html#method_move
                        $objetUploadedFile->move($dossierCible, $nomOriginal);

                        // POUR LE STOCKAGE DANS SQL
                        $cheminImage = "assets/upload/$nomOriginal";
                    }
                    else
                    {
                        // KO
                        // TAILLE TROP GRANDE
                    }
                }
                else
                {
                    // KO
                    // EXTENSION NON AUTORISEE
                }
            }
            else
            {
                // KO
                // ERREUR TRANSFERT
            }
        }
		return $cheminImage;
	}

	function upload(){
		// Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
		if (null === $this->file) {
		return;
		}

		// On récupère le nom original du fichier de l'internaute
		$name = $this->file->getClientOriginalName();

		// On déplace le fichier envoyé dans le répertoire de notre choix
		$this->file->move($this->getUploadRootDir(), $name);

		// On sauvegarde le nom de fichier dans notre attribut $url
		$this->url = $name;

		// On crée également le futur attribut alt de notre balise <img>
		$this->alt = $name;
	}

	public function getUploadDir()
	{
		// On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
		return 'uploads/img';
	}

	protected function getUploadRootDir()
	{
		// On retourne le chemin relatif vers l'image pour notre code PHP
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
}