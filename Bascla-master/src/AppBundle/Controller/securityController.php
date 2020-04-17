<?php

namespace AppBundle\Controller;
 use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class securityController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('basclaBundle:security:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/redirect")
     */
    public function redirectAction()
    {
        $session = $this->get('session');
       $session->start();

// set and get session attributes
        $user=$session->set('name', $this->container->get('security.token_storage')->getToken()->getUser());
        $session->set('id', $this->container->get('security.token_storage')->getToken()->getUser()->getid());
        $user=$session->get('name');



        $auto=$this->container->get('security.authorization_checker');
        if ($auto->isGranted('ROLE_ADMIN')) {
            return $this->render('base2.html.twig', array(
                'nom' =>$user,

            ));
        }
        else if($auto->isGranted('ROLE_USER'))           { return $this->render('base.html.twig', array(
            'nom' => $user,

        ));}
        else{
        return $this->render('@FOSUser/Security/login.html.twig');
        }

    }

}
