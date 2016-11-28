<?php

namespace FormArmorBundle\Controller;

use FormArmorBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationsController extends Controller
{
    public function listeAction($page)
    {
		if ($page < 1)
		{
			throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}

		// On peut fixer le nombre de lignes avec la ligne suivante :
		// $nbParPage = 4;
		// Mais bien sûr il est préférable de définir un paramètre dans "app\config\parameters.yml", et d'y accéder comme ceci :
		$nbParPage = $this->container->getParameter('nb_par_page');
		
		
		// On récupère l'objet Paginator
		$manager = $this->getDoctrine()->getManager();
		$rep = $manager->getRepository('FormArmorBundle:Formation');
		$lesFormations = $rep->listeFormations($page, $nbParPage);
		
		// On calcule le nombre total de pages grâce au count($lesFormations) qui retourne le nombre total de formations
		$nbPages = ceil(count($lesFormations) / $nbParPage);
		
		// Si la page n'existe pas, on retourne une erreur 404
		if ($page > $nbPages)
		{
			throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
		
		// On donne toutes les informations nécessaires à la vue
		return $this->render('FormArmorBundle:Formations:index.html.twig', array(
		  'lesFormations' => $lesFormations,
		  'nbPages'     => $nbPages,
		  'page'        => $page,
		));
		
    }
}
