<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class securityController extends Controller
{
    /**
     * @Route("/redirect")
     */
    public function redirectAction(Request $request)
    {
       $auto=$this->container->get('security.authorization_checker');
       if($auto->isGranted('ROLE_ADMIN'))
       {
           return $this->render('@bascla/Default/index.html.twig');


       }
       else if($auto->isGranted('ROLE_USER'))
       {return $this->render('@bascla/Default/indexAdmin.html.twig');}
       else
       {
           return$this->render('@FOSUser/Security/login.html.twig');
       }
    }
}
