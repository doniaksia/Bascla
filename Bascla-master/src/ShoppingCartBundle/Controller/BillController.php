<?php

namespace ShoppingCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BillController extends Controller
{
    public function afficherAction()

    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->container->get('doctrine')->getEntityManager();

        $bill = $em->getRepository('ShoppingCartBundle:Bill')->findAll();


        return $this->render('@ShoppingCart/ShoppingCart/bill.html.twig', array(
            'Bill' => $bill,
            'nom'=>$user,
        ));
    }


}
