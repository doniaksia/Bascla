<?php

namespace ShoppingCartBundle\Controller;

use ShoppingCartBundle\Entity\Shoppingcart;
use ShoppingCartBundle\Entity\Velovendre;
use ShoppingCartBundle\Form\ShoppingcartType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShoppingCartController extends Controller
{
    public function afficherAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();

        $cart = $em->getRepository('ShoppingCartBundle:Velovendre')->findAll();


        return $this->render('@ShoppingCart/ShoppingCart/cart.html.twig', array(
            'ShoppingCart' => $cart,
            'nom'=>$user,
        ));
    }

    public function addAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        //1-preparation objet vide
        $cart=new Shoppingcart();
        $em=$this->getDoctrine()->getManager();




            //6-creation entity mannager


            $cart->setAmmount(0);

            //7-sauvgarder les donnes dans orm
            $em->persist($cart);
            //8-sauvgarde les donne dans la base de donne
            $em->flush();


        //envoi de notre formaulire au utilisateur
        return $this->render('@ShoppingCart/ShoppingCart/add.html.twig'
        );




        }

    public function AffichAction()
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Velovendre::class)->findAll();

        return $this->render('@ShoppingCart/ShoppingCart/cart.html.twig',array(
            'produit' => $produit,
            'nom'=>$user,
        ));


    }

    public function Affich2Action()
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $sh = $em->getRepository(Shoppingcart::class)->findAll();

        return $this->render('@ShoppingCart/ShoppingCart/show2.html.twig',array(
            'sh' => $sh,
            'nom'=>$user,
        ));


    }


    public function createAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        $shopping = new Shoppingcart();
        $form = $this->createForm(ShoppingcartType::class, $shopping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            $em->persist($shopping);
            $em->flush();

            return $this->redirectToRoute('show2');

        }
        return $this->render('@ShoppingCart/ShoppingCart/add.html.twig', array(
            'f' => $form->createView(),
            'nom'=>$user,

        ));


    }

    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $sh = $em->getRepository(Shoppingcart::class)->find($id);
        $em->remove($sh);
        $em->flush();
        return $this->redirectToRoute("show2");
    }








}