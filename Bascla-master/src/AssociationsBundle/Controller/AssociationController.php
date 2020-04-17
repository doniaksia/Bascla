<?php

namespace AssociationsBundle\Controller;

use AssociationsBundle\Entity\Association;
use AssociationsBundle\Form\AssociationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;


class AssociationController extends Controller
{
    public function ajouterAssociationAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        $assocation = new Association();
        $form = $this->createForm(AssociationType::class,$assocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            $brochureFile = $form->get('logo')->getData();

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
                $assocation->setLogo($newFilename);
            }












            $em = $this->getDoctrine()->getManager();


            $em-> persist($assocation);
            $em -> flush();
            return $this->redirectToRoute('associations_afficherAssociation');
        }
        return $this -> render("@Associations/Association/ajoutA.html.twig",array('form'=>$form->createView()));

    }

    public function afficherAssociationAction()
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository("AssociationsBundle:Association")->findAll();
        return $this->render("@Associations/Association/afficheA.html.twig",array('association'=>$association));
    }

    public function afficherAssociationClientAction()
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository("AssociationsBundle:Association")->findAll();
        return $this->render("@Associations/Association/afficheAClient.html.twig",array('association'=>$association ,'nom'=>$user,));
    }

    public function modifierAssociationAction(Request $request, $id)
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $p =$em->getRepository('AssociationsBundle:Association')->find($id);
        $form = $this->createForm(AssociationType::class,$p);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {

            $brochureFile = $form->get('logo')->getData();

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
                $p->setLogo($newFilename);}

            $em-> persist($p);
            $em -> flush();
            return $this->redirectToRoute('associations_afficherAssociation');
        }
        return $this -> render("@Associations/Association/modifA.html.twig",array('form'=>$form->createView()));

    }

    public function supprimerAssociationAction($id)
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this -> getDoctrine() -> getManager();
        $association = $this -> getDoctrine() -> getRepository(Association::class) -> find($id);
        $em -> remove($association);
        $em -> flush();
        return $this -> redirectToRoute("associations_afficherAssociation");
    }

    public function showDetailsAction($id){$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $p=$em->getRepository('AssociationsBundle:Association')->find($id);
        return $this->render('@Associations/Association/detailA.html.twig',array(
            'name'=>$p->getName(),
            'description'=>$p->getDescription(),
            'logo'=>$p->getLogo(),
            'location'=>$p->getLocation(),
            'website'=>$p->getWebsite(),
            'id'=>$p->getId()
        ));
    }

    public function showDetailsAdminAction($id){
        $session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();
        $p=$em->getRepository('AssociationsBundle:Association')->find($id);
        return $this->render('@Associations/Association/detailsAadmin.html.twig',array(
            'name'=>$p->getName(),
            'description'=>$p->getDescription(),
            'logo'=>$p->getLogo(),
            'location'=>$p->getLocation(),
            'website'=>$p->getWebsite(),
            'id'=>$p->getId(),
             'nom'=>$user,
        ));
    }
}
