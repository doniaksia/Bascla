<?php

namespace basclaBundle\Controller;

use basclaBundle\Entity\Location;
use basclaBundle\Entity\Velolouer;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Velolouer controller.
 *
 */
class VelolouerController extends Controller
{
    /**
     * Lists all velolouer entities.
     *
     */
    public function indexAction()
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();

        $velolouers = $em->getRepository('basclaBundle:Velolouer')->findAll();

        return $this->render('velolouer/index.html.twig', array(
            'velolouers' => $velolouers,
            'nom'=>$user,
        ));
    }
    public function index1Action( Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $user=$session->get('name');

        $dql   = "SELECT a FROM basclaBundle:Velovendre a";
        $query = $em->createQuery($dql);
        $paginator =$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/
        );

        // parameters to template
        return $this->render('Velolouer/index1.html.twig', ['pagination' => $pagination]);


    }
    /**
     * Creates a new velolouer entity.
     *
     */
    public function newAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        $velolouer = new Velolouer();
        $form = $this->createForm('basclaBundle\Form\VelolouerType', $velolouer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('pathPhoto')->getData();

            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {

                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $velolouer->setPathPhoto($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($velolouer);
            $em->flush();

            return $this->redirectToRoute('indexvelolouer', array('id' => $velolouer->getId()));
        }

        return $this->render('velolouer/new.html.twig', array(
            'velolouer' => $velolouer,
            'form' => $form->createView(),
            'nom'=>$user,
        ));
    }

    /**
     * Finds and displays a velolouer entity.
     *
     */
    public function showAction(Velolouer $velolouer)
    {$session = $this->get('session');
        $user=$session->get('name');
        $deleteForm = $this->createDeleteForm($velolouer);

        return $this->render('velolouer/show.html.twig', array(
            'velolouer' => $velolouer,
            'delete_form' => $deleteForm->createView(),
            'nom'=>$user,
        ));
    }

    /**
     * Displays a form to edit an existing velolouer entity.
     *
     */
    public function editAction(Request $request, Velolouer $velolouer)
    {$session = $this->get('session');
        $user=$session->get('name');
        $deleteForm = $this->createDeleteForm($velolouer);
        $editForm = $this->createForm('basclaBundle\Form\VelolouerType', $velolouer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {


            $brochureFile = $editForm->get('pathPhoto')->getData();

            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {

                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $velolouer->setPathPhoto($newFilename);
            }




            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('velolouer_edit', array('id' => $velolouer->getId()));
        }

        return $this->render('velolouer/edit.html.twig', array(
            'velolouer' => $velolouer,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'nom'=>$user,
        ));
    }

    /**
     * Deletes a velolouer entity.
     *
     */
    public function deleteAction(Request $request, Velolouer $velolouer)
    {$session = $this->get('session');
        $user=$session->get('name');
        $form = $this->createDeleteForm($velolouer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($velolouer);
            $em->flush();
        }

        return $this->redirectToRoute('indexvelolouer',array(  'nom'=>$user));
    }

    /**
     * Creates a form to delete a velolouer entity.
     *
     * @param Velolouer $velolouer The velolouer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Velolouer $velolouer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('velolouer_delete', array('id' => $velolouer->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function reserverAction(int $id, Request $request)
    {
        $session = $this->get('session');
        $user=$session->get('name');

        $em = $this->getDoctrine()->getManager();

        $locations = $em->getRepository('basclaBundle:Location')->findBy(array('idlocation'=>$id));

        $location = new Location();
        $form = $this->createForm('basclaBundle\Form\LocationType', $location);
        $form->handleRequest($request);

        $verif=true;

        if ($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();


            foreach ($locations as $value)
            {$v=$value->getdateFin();

                if ($form["dateDebut"]->getData() <= $v  && $form["dateDebut"]->getData() >= $value->getdateDebut() )
                {

                    $verif=false;
                }

                else if ($form["dateFin"]->getData() <= $v  && $form["dateFin"]->getData() >= $value->getdateDebut() )
                {
                    $verif=false;
                }




            }


            if ($verif==true) {
                $em->persist($location);
                $em->flush();
                echo '<script type="text/javascript">alert("ajouté avec succes ")</script>';



                $em1 = $this->getDoctrine()->getManager();

                $velovendre = $em1->getRepository('basclaBundle:Velolouer')->find($id);

                $result = $form["dateDebut"]->getData()->format('Y-m-d H:i:s');
                $result1 = $form["dateFin"]->getData()->format('Y-m-d H:i:s');


                $qrCode = new QrCode();
                $qrCode->setText("bonjour ".$user." votre reservation : "." prix ".$velovendre->getprix()." "." marque ".$velovendre->getmarque()." date debut ".$result."  date fin ".$result1);


                $qrCode->setSize(300);

// Set advanced options
                $qrCode->setWriterByName('png');
                $qrCode->setMargin(10);
                $qrCode->setEncoding('UTF-8');
                $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
                $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
                $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);

// Directly output the QR code
                header('Content-Type: '.$qrCode->getContentType());


// Save it to a file
                $qrCode->writeFile($this->getParameter('brochures_directory')."/qr.png");







                $message = \Swift_Message::newInstance()
                    ->setSubject("Reservation effectué")
                    ->setFrom('mahdibensaid100@gmail.com')
                    ->setTo("mahdibensaid100@gmail.com")
                    ->attach(\Swift_Attachment::fromPath($this->getParameter('brochures_directory')."/qr.png"))
                    ->setBody("Bonjour ".$user." Reservation effectué avec succes numero de reservation est :  ".$request->get("id")."  date debut".$result);

                $this->get('mailer')->send($message);


            }

else{echo '<script type="text/javascript">alert("date non disponible choisir autre date svp")</script>';}

        }

        return $this->render('location/new.html.twig', array(
            'id' => $id,
            'form' => $form->createView(),
            'locations' => $locations,
            'nom'=>$user,



        ));

    }




}
