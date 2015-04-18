<?php

namespace aa\annonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        return $this->render('aaannonceBundle:Default:index.html.twig');
    }
}
