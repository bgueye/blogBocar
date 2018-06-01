<?php
// src/gueye/BlogBundle/Beta/BetaListener.php
namespace gueye\blogBundle\Beta;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class BetaListener
{
	// La date de fin de la version bêta :
	// - Avant cette date, on affichera un compte à rebours (J-3 par exemple)
	// - Après cette date, on n'affichera plus le « bêta »
	protected $dateFin;
	
	public function __construct($dateFin)
	{
		$this->dateFin = new \Datetime($dateFin);
	}

	// Méthode pour ajouter le « bêta » à une réponse
	protected function displayBeta(Response $reponse, $joursRestant)
	{
		$content = $reponse->getContent();
		// Code à rajouter
		$html = '<span style="color: red; font-size: 0.5em;"> Beta J - '.(int) $joursRestant.' !</span>';
		// Insertion du code dans la page, dans le <h1> du header
		$content = preg_replace('#<h1>(.*?)</h1>#iU',
								'<h1>$1'.$html.'</h1>',
								$content,
								1);
		// Modification du contenu dans la réponse
		$reponse->setContent($content);
		return $reponse;
	}

	public function onKernelResponse(FilterResponseEvent $event)
	{
		// On teste si la requête est bien la requête principale
		if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType()) {
			return;
		}
		// On récupère la réponse que le noyau a insérée dans l'évènement
		$reponse = $event->getResponse();

		$joursRestant = $this->dateFin->diff(new \Datetime())->days;
		if ($joursRestant > 0) {
			// On utilise notre méthode « reine »
			$reponse = $this->displayBeta($event->getResponse(), $joursRestant);
		}
		// Puis on insère la réponse modifiée dans l'évènement
		$event->setResponse($reponse);
	}
}