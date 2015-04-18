<?php

namespace aa\pageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('aapageBundle:Default:index.html.twig', array('name' => $name));
    }
}
