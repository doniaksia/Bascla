<?php

namespace ShoppingCartBundle\Controller;



use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ShoppingCartBundle\Entity\Order;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;


class OrderController extends Controller
{



    public function trahAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT * FROM `order` ";
        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $a = $stmt->fetchAll();
        return $this->render('@ShoppingCart/ShoppingCart/show.html.twig',array(
            'a' => $a,
        ));
    }
    public function ajouterAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');

        return $this ->render('@ShoppingCart/ShoppingCart/ajout.html.twig',array(
            'nom' => $user,
        ));
    }







    public function ajoutAction(Request $request)
    {
        $order=new Order();
        $form=$this->createFormBuilder($order)
            ->add('name', TextType::class)
            ->add('lastName', TextType::class)
            ->add('email', TextType::class)
            ->add('number', IntegerType::class)

        ->add('Ajouter', SubmitType::class, ['label'=>'Ajouter Order'])
        ->getForm();
         $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $em->persist($order);
        $em->flush();
        return $this ->render('@ShoppingCart/ShoppingCart/ajout.html.twig',array(
            'f' => $form->createView(),
            ));
    }

    public function add_orderAction(Request $request)
    {

        $nom=$request->query->get('nom');
        $pnom=$request->query->get('pnom');
        $mail=$request->query->get('mail');
        $num=$request->query->get('num');

        $sql = "INSERT INTO `order`(`Name`, `Last_Name`, `Email`, `Number`) VALUES (:dom,:dom1,:dom2,:dom3)";
        $params[':dom'] = $nom;
        $params[':dom1'] = $pnom;
        $params[':dom2'] = $mail;
        $params[':dom3'] = $num;
        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $this->redirectToRoute("bill_show");
    }


}

