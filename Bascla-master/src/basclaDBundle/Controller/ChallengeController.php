<?php

namespace basclaDBundle\Controller;

use basclaDBundle\Form\PostChallengeType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use basclaDBundle\Entity\Event;
use basclaDBundle\Entity\Notification;
use basclaDBundle\Entity\Participant;
use basclaDBundle\Entity\User;
use basclaDBundle\Entity\Challenge;
use basclaDBundle\Entity\PostChallenge;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;



class ChallengeController extends Controller
{
public function likeAction($id)
{

   $this ->getDoctrine()->getRepository(PostChallenge :: class)->likeme($id);

    return $this->redirectToRoute('weeklypost');
}

    public function weeklypostsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $session = $this->get('session');
        $user1=$session->get('name');
        $Clubs = $this ->getDoctrine()->getRepository(Challenge :: class)->weeklypost();
        $ppb = $this ->getDoctrine()->getRepository(PostChallenge :: class);
        $app = $ppb->count();
        $pp = $this ->getDoctrine()->getRepository(PostChallenge :: class)->findAll();

        $c = $this ->getDoctrine()->getRepository(PostChallenge :: class)->count();


        $user = $this->getUser();
        $club = new PostChallenge();
        $form = $this -> createForm( PostChallengeType::class, $club);
        $club->setIdClient($user->getId());
        $club->setIdCh($Clubs->getIdCh());
        $desc = $request->request->get('desc');
        $club->setDescPc($desc);
        $club->setNmbReaction(0);
        $club->setNomClient($user->getUsername());
        $form =  $form ->handleRequest($request);
     if ($form->isSubmitted())
     {   if ( $app <= $Clubs->getNbrMaxPub())
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
                    ->setTitle("A post is available go vote : ".$club->getNomClient())
                    ->setDescription("nombre de reaction actuel : ".$club->getNmbReaction());
                $em->persist($notification);
                $em->flush();
                $pusher = $this->get('mrad.pusher.notificaitons');
                $pusher->trigger($notification);



                return $this->redirectToRoute('weeklypost');}}
     else {

           $this->addFlash('warning', 'The maximum number of posts has been reached');}}






        return $this->render('@basclaD\Events\weeklyposts.html.twig' , array('Clubs' => $Clubs , 'f'=> $form ->createView() ,  'user' => $user , 'pp' =>$pp,'nom' => $user1));
    }
}
