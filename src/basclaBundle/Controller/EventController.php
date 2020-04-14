<?php

namespace basclaBundle\Controller;

use basclaBundle\Entity\Event;
use basclaBundle\Entity\Notification;
use basclaBundle\Entity\Participant;
use basclaBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use basclaBundle\Form\EventType;



/**
 * Event controller.
 *
 */
class EventController extends Controller
{
    /**
     * Lists all event entities.
     *
     */
    public function CatalogueEventsAction(Request $request)
    {
        $Clubs = $this ->getDoctrine()->getRepository(Event :: class)->findAll();
        $pp = $this ->getDoctrine()->getRepository(Participant :: class)->findAll();
        $this->addFlash('in', 'Please check the time you entered');

        $user = $this->getUser();
        return $this->render('@bascla/Events/CatalogueEvents.html.twig' , array('Clubs' => $Clubs , 'user' => $user , 'pp' =>$pp));

    }
    public function afficherEventAction(Request $request)
    {
 $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT a FROM basclaBundle:Event a";
        $query = $em->createQuery($dql);        /**
         * @ var $paginator  \Knp\Component\Pager\Paginator
         */

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*page number*/
        );
        return $this->render('@bascla/Events/afficherEvent.html.twig' , array('Clubs' => $pagination));
    }
    public function confirmerParticAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT a FROM basclaBundle:Participant a";
        $query = $em->createQuery($dql);/**
         * @ var $paginator  \Knp\Component\Pager\Paginator
         */

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*page number*/
        );
        return $this->render('@bascla/Events/comfirmerPartic.html.twig' , array('Clubs' => $pagination));
    }
public function okAction($id)
{
    $em  = $this->getDoctrine()->getManager();
    $club = $em->getRepository(Participant::class)->find($id);
    $club->setEtat(1);

    $em->flush();
    return $this->redirectToRoute('confirmerP');

}
    public function nonAction($id)
    {
        $em = $this ->getDoctrine()->getManager();
        $club = $em ->getRepository(Participant::class)->find($id);
        $em ->remove($club);
        $em->flush();

        return $this->redirectToRoute('confirmerP');
    }

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
            $posts =  $em->getRepository('basclaBundle:Event')->findEntitiesByString($requestString);
        if(!$posts) {
            $result['posts']['error'] = "Event Not found :( ";
        } else {
            $result['posts'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
    }
    public function pdfAction($id)
    {
        $em  = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Event::class)->find($id);
        $em  = $this->getDoctrine()->getManager();
        $clubs = $em->getRepository(Participant::class)->findAll();
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('@bascla/Events/pdf.html.twig', array(
            'club' => $club , 'clubs' => $clubs
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    public function getRealEntities($posts){
        foreach ($posts as $posts){
            $realEntities[$posts->getId()] = [$posts->getTitle(),$posts->getDate()];

        }
        return $realEntities;
    }
    public function displayAction()
    {
        $notification = $this->getDoctrine()->getManager()->getRepository(Notification::class)->findbydate();

        return $this->render('@bascla/Events/notification.html.twig',array('notifications' => $notification));
    }
    public function detailEventAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Event::class)->find($id);
        $Clubs = $this ->getDoctrine()->getRepository(Event :: class)->findAll();
        $pp = $this ->getDoctrine()->getRepository(Participant :: class)->findAll();
        $user = $this->getUser();

        return $this->render( '@bascla/Events/detailEvent.html.twig', array('f' => $club , 'F' => $Clubs , 'pp' => $pp , 'user' => $user));
    }


    public function ajouterEventAction(Request $request)
    {
        $club = new Event();
        $form = $this -> createForm( EventType::class, $club);

        $form =  $form ->handleRequest($request);
        $now=new \DateTime('now');
        $D = True ;
        $HDEB = True ;
        $HFIN = True ;
        $Deb=new \DateTime($club->getHeurDeb());
        $Fin=new \DateTime($club->getHeureFin());

        $date = new \DateTime($club->getDate());
        if ($form->isSubmitted()    )
        {
               if ($now > $date )
               {
                   $D = false;
               }
               if ($Fin <= $Deb)
               {
                   $HDEB = false;
               }
               if ($HDEB and $D)
               { $brochureFile = $form->get('pic')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                try {
                    $brochureFile->move(
                        $this->getParameter('images'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $club->setPic($newFilename);
            $em  = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            $notification = new Notification();
            $notification
                ->setTitle($club->getTitle())
                ->setDescription("An event is available : ".$club->getDescription())
                ->setRoute("detailEvent")
                ->setParameters(array('id' => $club->getId()));
            $em->persist($notification);
            $em->flush();
            $pusher = $this->get('mrad.pusher.notificaitons');
            $pusher->trigger($notification);



                return $this->redirectToRoute('homeAdmin');}}
            else
            {
if (!$D)
               {$this->addFlash('info', 'Please check the date you entered');}
if (!$HDEB)
{
    {$this->addFlash('info', 'Please check the time you entered');}

}


            }
        }
        return $this->render( '@bascla/Events/ajouterEvent.html.twig', array('fo' => $form ->createView()));
    }

    public function modifierEventAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Event::class)->find($id);
        $form = $this -> createForm( EventType::class, $club);
        $form =  $form ->handleRequest($request);


        if ($form->isSubmitted())
        {
            $brochureFile = $form->get('pic')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                try {
                    $brochureFile->move(
                        $this->getParameter('images'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $club->setPic($newFilename);
            $em  = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('homeAdmin');
        }}
        return $this->render( '@bascla/Events/modifierEvent.html.twig', array('fo' => $form ->createView()));
    }


    public function supprimerEventAction($id){
        $em = $this ->getDoctrine()->getManager();
        $emm = $this ->getDoctrine()->getManager();

        $club = $em ->getRepository(Event :: class)->find($id);
        $part = $emm ->getRepository( Notification :: class)->deletenotif($club->getTitle());

        $em ->remove($club);
        $emm ->remove($part);

        $em->flush();

        return $this->redirectToRoute('afficherEvent');

    }
    public function annulerAction($id , $ev)
    {
        $em = $this ->getDoctrine()->getManager();
        $club = $em ->getRepository(Participant :: class)->annulation($id,$ev);
        $em->flush();

        return $this->redirectToRoute('CatalogueEvents');
    }
    public function annulerDetailAction($id , $ev)
    {
        $em = $this ->getDoctrine()->getManager();
        $club = $em ->getRepository(Participant :: class)->annulation($id,$ev);
        $em->flush();

        return $this->redirectToRoute('detailEvent');
    }
    public function participerAction($id , $ev){
        $par = new Participant();
        $em = $this ->getDoctrine()->getManager();
        $cl = $em ->getRepository(User :: class)->find($id);
        $em = $this ->getDoctrine()->getManager();
        $event = $em ->getRepository(Event :: class)->find($ev);

        $par->setIdClient($id);
        $par->setIdEvent($ev);
        $par->setEtat(0);
        $par->setType($event->getType());
        $par->setNome($event->getTitle());
        $par->setNomp($cl->getUsername());
        $em = $this ->getDoctrine()->getManager();
       $em ->persist($par);

           $em->flush();
        $now = new \DateTime('now');

        $date = new \DateTime($event->getDate());
        $notification = new Notification();
        $notification
            ->setTitle($event->getTitle())
            ->setDescription("Are you ready for  ".$event->getDescription())
            ->setRoute("detailEvent")
            ->setParameters(array('id' => $event->getId()))
            ->setDate($date)
            ->setIcon("partic");

        $em->persist($notification);
        $em->flush();
        $pusher = $this->get('mrad.pusher.notificaitons');
        $pusher->trigger($notification);


        return $this->redirectToRoute('CatalogueEvents');

    }
    public function participerDetailAction($id , $ev){
        $par = new Participant();
        $em = $this ->getDoctrine()->getManager();
        $cl = $em ->getRepository(User :: class)->find($id);
        $em = $this ->getDoctrine()->getManager();
        $event = $em ->getRepository(Event :: class)->find($ev);

        $par->setIdClient($id);
        $par->setIdEvent($ev);
        $par->setEtat(0);
        $par->setType($event->getType());
        $par->setNome($event->getTitle());
        $par->setNomp($cl->getUsername());
        $em = $this ->getDoctrine()->getManager();
        $em ->persist($par);

        $em->flush();




        return $this->redirectToRoute('detailEvent');

    }
    public function errorAction(){
        return $this->render('@bascla\Events\test.html.twig');


    }
    public function modalAction(){
        return $this->render('@bascla\Events\test3.html.twig');


    }
    public function errorDetailAction(){
        return $this->render('@bascla\Events\test.html.twig');


    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param Event $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */

}
