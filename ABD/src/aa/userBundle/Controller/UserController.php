<?php

namespace aa\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('aauserBundle:Default:index.html.twig', array('name' => $name));
    }
}
