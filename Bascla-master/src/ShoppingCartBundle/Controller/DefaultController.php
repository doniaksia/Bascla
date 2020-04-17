<?php

namespace ShoppingCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShoppingCartBundle:Default:index.html.twig');
    }
}
