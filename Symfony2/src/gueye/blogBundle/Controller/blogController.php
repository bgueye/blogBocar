<?php
namespace gueye\blogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use gueye\blogBundle\Form\ArticleType;
use gueye\blogBundle\Form\ArticleEditType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

use gueye\blogBundle\Entity\Article;
use gueye\blogBundle\Entity\Image;
use gueye\blogBundle\Entity\Commentaire;
use gueye\blogBundle\Entity\ArticleCompetence;
use gueye\blogBundle\Entity\categorie;


class BlogController extends Controller
{
    public function traductionAction($name)
	{
		return $this->render('gueyeblogBundle:Blog:traduction.html.twig', array(
			'name' => $name
			));
	}

    public function indexAction($page)
	{
	// On récupère l'EntityManager
		$articles= $this->getDoctrine()
						->getManager()
		 				->getRepository('gueyeblogBundle:Article')
		 				->GetArticles(3, $page); 
		 				// 3 articles par page: c'est totalement arbitraire !
	
	return $this->render('gueyeblogBundle:Blog:index.html.twig', array(
		'articles' => $articles,
		'page' => $page,
		'nombrePage' => ceil(count($articles)/3)
	));
	}

    public function voirAction(Article $article)
	{
		// À ce stade, la variable $article contient une instance de la classe Article
		// Avec l'id correspondant à l'id contenu dans la route !
		// On récupère ensuite les articleCompetence pour l'article $article
		// On doit le faire à la main pour l'instant, car la relation est unidirectionnelle
		// C'est-à-dire que $article->getArticleCompetences() n'existe pas !
		// $article est donc une instance de gueye\BlogBundle\Entity\Article
		// Ou null si aucun article n'a été trouvé avec l'id $id
		
		// On récupère les articleCompetence pour l'article $article
		$liste_articleCompetence = $this->getDoctrine()
										->getManager()
										->getRepository('gueyeblogBundle:ArticleCompetence')
										->findByArticle($article->getId());

		// Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
		return $this->render('gueyeblogBundle:Blog:voir.html.twig', array(
			'article' => $article,
			'liste_articleCompetence' => $liste_articleCompetence
		));
	}
   

    public function ajouterAction()
	{
		// On teste que l'utilisateur dispose bien du rôle ROLE_AUTEUR
		// if (!$this->get('security.context')->isGranted('ROLE_AUTEUR')) {
		// 	// Sinon on déclenche une exception « Accès interdit »
		// 	throw new AccessDeniedHttpException('Accès limité aux auteurs');
		// }
		// else{
			// Creation de l'entité Article
			$article = new Article();
			$form = $this->createForm(new ArticleType, $article);
			// On récupère la requête
			$request = $this->get('request');
			// On vérifie qu'elle est de type POST
			if ($request->getMethod() == 'POST') 
			{
				// On fait le lien Requête <-> Formulaire
				// À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
				$form->bind($request);
				// On vérifie que les valeurs entrées sont correctes
				// (Nous verrons la validation des objets en détail dans le	prochain chapitre)
				if ($form->isValid()) 
				{
					// On l'enregistre notre objet $article dans la base de	données
					$em = $this->getDoctrine()->getManager();
					$em->persist($article);
					$em->flush();
					// On redirige vers la page de visualisation de l'article nouvellement créé
					return $this->redirect($this->generateUrl('gueyeblog_voir', array(
						'slug' => $article->getSlug()
					)));
				}
			}
			// À ce stade :
			// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
			// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
			// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
			return $this->render('gueyeblogBundle:Blog:ajouter.html.twig', array(
				'form' => $form->createView(),
			));
		//}
	}
	public function modifierAction(Article $article)
	{
		// On crée le FormBuilder grâce à la méthode du contrôleur
		$form = $this->createForm(new ArticleEditType, $article);
		// On récupère la requête
		$request = $this->get('request');
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') 
		{
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le	prochain chapitre)
			if ($form->isValid()) 
			{
				// On l'enregistre notre objet $article dans la base de	données
				$em = $this->getDoctrine()->getManager();
				$em->persist($article);
				$em->flush();
				// On redirige vers la page de visualisation de l'article nouvellement modifiée
				return $this->redirect($this->generateUrl('gueyeblog_voir', array(
					'slug' => $article->getSlug()
				)));
			}
		}
		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('gueyeblogBundle:Blog:modifier.html.twig', array(
			'form' => $form->createView(),
			'article'=>$article
		));
	}
	public function supprimerAction(Article $article)
	{
		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'article contre cette faille
		$form = $this->createFormBuilder()->getForm();
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				// On supprime l'article
				$em = $this->getDoctrine()->getManager();
				$em->remove($article);
				$em->flush();
				// On définit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
				// Puis on redirige vers l'accueil
				return $this->redirect($this->generateUrl('gueyeblog_Accueil'));
			}
		}
		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('gueyeblogBundle:Blog:supprimer.html.twig', array(
			'article' => $article,
			'form' 	  => $form->createView()
		));
	}

	public function menuAction()
	{
	$em = $this->getDoctrine()->getManager();
		//On récupère l'entité correspondant à l'id $id
		$listes = $em->getRepository('gueyeblogBundle:Article')->GetArticlesMenu();
	// Les articles :
	if($listes === null)
	{
		throw $this->createNotFoundException('Pas d\'article.');
	}
	return $this->render('gueyeblogBundle:Blog:menu.html.twig', array(
		'liste_articles' => $listes
	// C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
	));
	}

	public function modifierImageAction($id_article)
	{
	$em = $this->getDoctrine()->getManager();
	// On récupère l'article
	$article = $em->getRepository('gueyeblogBundle:Article')->find($id_article);
	// On modifie l'URL de l'image par exemple
	$article->getImage()->setUrl('test.png');
	// On n'a pas besoin de persister notre article (si vous le faites, aucune erreur n'est déclenchée, Doctrine l'ignore)
	// Rappelez-vous, il l'est automatiquement car on l'a récupéré depuis Doctrine
	// Pas non plus besoin de persister l'image ici, car elle est également récupérée par Doctrine
	// On déclenche la modification
	$em->flush();
	return new Response('OK');
	}


}
