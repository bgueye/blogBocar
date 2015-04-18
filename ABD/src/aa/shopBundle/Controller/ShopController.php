<?php

namespace aa\shopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('aashopBundle:Default:index.html.twig', array('name' => $name));
    }
}
