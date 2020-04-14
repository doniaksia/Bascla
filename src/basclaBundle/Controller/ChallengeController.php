<?php

namespace basclaBundle\Controller;

use basclaBundle\Form\PostChallengeType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use basclaBundle\Entity\Event;
use basclaBundle\Entity\Notification;
use basclaBundle\Entity\Participant;
use basclaBundle\Entity\User;
use basclaBundle\Entity\Challenge;
use basclaBundle\Entity\PostChallenge;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;



class ChallengeController extends Controller
{


    public function weeklypostsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $Clubs = $this ->getDoctrine()->getRepository(Challenge :: class)->weeklypost();
        $pp = $this ->getDoctrine()->getRepository(PostChallenge :: class)->findAll();

        $user = $this->getUser();
        $club = new PostChallenge();
        $form = $this -> createForm( PostChallengeType::class, $club);

        $form =  $form ->handleRequest($request);

        if ($form->isSubmitted()    )
        {
            $brochureFile = $form->get('image')->getData();

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

                $club->setImage($newFilename);
                $em  = $this->getDoctrine()->getManager();
                $em->persist($club);
                $em->flush();
                $notification = new Notification();
                $notification
                    ->setTitle("A post is available go vote : ".$club->getTitle())
                    ->setDescription($club->getDescription())
                    ->setRoute("detailEvent")
                    ->setParameters(array('id' => $club->getId()));
                $em->persist($notification);
                $em->flush();
                $pusher = $this->get('mrad.pusher.notificaitons');
                $pusher->trigger($notification);



                return $this->redirectToRoute('weeklypost');}}




        return $this->render('@bascla\Events\weeklyposts.html.twig' , array('Clubs' => $Clubs , 'f'=> $form ->createView() ,  'user' => $user , 'pp' =>$pp));
    }
}
