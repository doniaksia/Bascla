<?php

namespace basclaBundle\Controller;

use basclaBundle\Entity\Event;
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
    public function CatalogueEventsAction()
    {
        $Clubs = $this ->getDoctrine()->getRepository(Event :: class)->findAll();
        return $this->render('@bascla/Events/CatalogueEvents.html.twig' , array('Clubs' => $Clubs));

    }
    public function afficherEventAction()
    {

        $Clubs = $this ->getDoctrine()->getRepository(Event :: class)->findAll();
        return $this->render('@bascla/Events/afficherEvent.html.twig' , array('Clubs' => $Clubs));
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
    public function getRealEntities($posts){
        foreach ($posts as $posts){
            $realEntities[$posts->getId()] = [$posts->getTitle(),$posts->getDate()];

        }
        return $realEntities;
    }
    public function detailEventAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Event::class)->find($id);
        $Clubs = $this ->getDoctrine()->getRepository(Event :: class)->findAll();
        return $this->render( '@bascla/Events/detailEvent.html.twig', array('f' => $club , 'F' => $Clubs));
    }


    public function ajouterEventAction(Request $request)
    {
        $club = new Event();
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
            $em->persist($club);
            $em->flush();
            return $this->redirectToRoute('homeAdmin');
        }}
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
        $club = $em ->getRepository(Event :: class)->find($id);
        $em ->remove($club);
        $em->flush();

        return $this->redirectToRoute('afficherEvent');

    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param Event $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */

}
