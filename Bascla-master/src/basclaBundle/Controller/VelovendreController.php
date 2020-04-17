<?php

namespace basclaBundle\Controller;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;

use Symfony\Component\HttpFoundation\Response;
use clubBundle\Entity\Formation;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\Filesystem\Filesystem;
use basclaBundle\Entity\Velovendre;
use basclaBundle\Entity\Views;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\BarChart;
/**
 * Velovendre controller.
 *
 */
class VelovendreController extends Controller
{
    /**
     * Lists all velovendre entities.
     *
     */
    public function indexAction( Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');


        $em=$this->getDoctrine()->getManager();
        $velovendres=$em->getRepository('basclaBundle:Velovendre')->findAll();

        foreach($velovendres as $classe) {
            $classe->setverif(0);
            $em->flush();

        }

        if($request->isMethod('post'))
        {


            $velovendres=$em->getRepository('basclaBundle:Velovendre')->findBy(array('marque'=>$request->get("titree")));
        }
        $query = $em->createQuery('SELECT avg(a.views)  FROM basclaBundle:Velovendre a  ');
        $users = $query->getSingleScalarResult();
        return $this->render('velovendre/index.html.twig', array(
            'velovendres' => $velovendres,
            'avg' => $users,
            'nom'=>$user,

        ));



    }
    public function index1Action( Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');


        $em=$this->getDoctrine()->getManager();
        $velovendres=$em->getRepository('basclaBundle:Velovendre')->findAll();


        if($request->isMethod('post'))
        {


            $velovendres=$em->getRepository('basclaBundle:Velovendre')->findBy(array('marque'=>$request->get("titree")));
        }

        return $this->render('velovendre/index1.html.twig', array(
            'velovendres' => $velovendres,
            'nom'=>$user,

        ));



    }
    public function indexeqAction( Request $request)
    {
        $session = $this->get('session');
        $user=$session->get('name');

        $em=$this->getDoctrine()->getManager();
        $velovendres=$em->getRepository('basclaBundle:Velovendre')->findAll();


        if($request->isMethod('post'))
        {


            $velovendres=$em->getRepository('basclaBundle:Velovendre')->findBy(array('marque'=>$request->get("titree")));
        }

        return $this->render('velovendre/indexeq.html.twig', array(
            'velovendres' => $velovendres,
            'nom'=>$user,

        ));



    }

    /**
     * Creates a new velovendre entity.
     *
     */
    public function newAction(Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        $velovendre = new Velovendre();
        $form = $this->createForm('basclaBundle\Form\VelovendreType', $velovendre);
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
                $velovendre->setPathPhoto($newFilename);
            }








            $em = $this->getDoctrine()->getManager();
            $em->persist($velovendre);
            $em->flush();

            return $this->redirectToRoute('indexvelovendre', array('id' => $velovendre->getId()));
        }

        return $this->render('velovendre/new.html.twig', array(
            'velovendre' => $velovendre,
            'form' => $form->createView(),
            'nom'=>$user,

        ));
    }

    /**
     * Finds and displays a velovendre entity.
     *
     */
    public function showAction(Velovendre $velovendre)
    {$session = $this->get('session');
        $user=$session->get('name');
        $deleteForm = $this->createDeleteForm($velovendre);
        $em = $this->getDoctrine()->getManager();

$verif=true;


        $views=$em->getRepository('basclaBundle:Views')->findAll();
        foreach($views as $classe) {
            if($classe->getUser()==$session->get('id') && $classe->getVelo()==$velovendre->getId())
            {

                $verif=false;
            }

        }


if($verif==true) {


    $velovendres = $em->getRepository('basclaBundle:Velovendre')->find($velovendre->getId());
    $i = $velovendres->getViews() + 1;
    $velovendres->setViews($i);
    $em->flush();

}
        $views=new Views();
        $views->setUser($session->get('id'));
        $views->setVelo($velovendre->getId());
        $em->persist($views);
        $em->flush();



        return $this->render('velovendre/show.html.twig', array(
            'velovendre' => $velovendre,
            'delete_form' => $deleteForm->createView(),
            'nom'=>$user,

        ));
    }

    public function qrAction(int $id, Request $request)
    {$session = $this->get('session');
        $user=$session->get('name');
        $em = $this->getDoctrine()->getManager();

        $velovendre = $em->getRepository('basclaBundle:Velovendre')->find($id);

        $qrCode = new QrCode();
        $qrCode->setText("Facture : "."prix ".$velovendre->getprix()." "."marque ".$velovendre->getmarque()." "."type"." ".$velovendre->gettype());


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



// Create a response object




        $message = \Swift_Message::newInstance()
            ->setSubject("achat effectué")
            ->setFrom('mahdibensaid100@gmail.com')
            ->setTo("mahdibensaid100@gmail.com")
            ->attach(\Swift_Attachment::fromPath($this->getParameter('brochures_directory')."/qr.png"))

            ->setBody("Achat Effectué Avec Succesde l article ".$velovendre->getmarque());

        $this->get('mailer')->send($message);
        return $this->render('velovendre/qr.html.twig',array('velovendre' => $velovendre,'nom'=>$user,));


    }




    /**
     * Displays a form to edit an existing velovendre entity.
     *
     */
    public function editAction(Request $request, Velovendre $velovendre)
    {$session = $this->get('session');
        $user=$session->get('name');
        $deleteForm = $this->createDeleteForm($velovendre);
        $editForm = $this->createForm('basclaBundle\Form\VelovendreType', $velovendre);
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
                $velovendre->setPathPhoto($newFilename);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('velovendre_edit', array('id' => $velovendre->getId()));
        }

        return $this->render('velovendre/edit.html.twig', array(
            'velovendre' => $velovendre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'nom'=>$user,
        ));
    }

    /**
     * Deletes a velovendre entity.
     *
     */
    public function deleteAction(Request $request, Velovendre $velovendre)
    {
        $session = $this->get('session');
        $user=$session->get('name');
        $form = $this->createDeleteForm($velovendre);
        $form->handleRequest($request);

        $filesystem = new Filesystem();

        if ($form->isSubmitted() && $form->isValid()) {


            $filesystem->remove('images/'.$velovendre->getPathPhoto());

            $em = $this->getDoctrine()->getManager();
            $em->remove($velovendre);
            $em->flush();
        }

        return $this->redirectToRoute('indexvelovendre');
    }

    /**
     * Creates a form to delete a velovendre entity.
     *
     * @param Velovendre $velovendre The velovendre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Velovendre $velovendre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('velovendre_delete', array('id' => $velovendre->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function rechercheformationAction ( Request $request )
    {$session = $this->get('session');
        $user=$session->get('name');

        $em=$this->getDoctrine()->getManager();
        $velovendres=$em->getRepository('basclaBundle:Velovendre')->findAll();
        foreach($velovendres as $classe) {
            $classe->setverif(0);
            $em->flush();

        }

        if($request->isMethod('post'))
        {
            $this->addFlash("success", "This is a success message");

            $velovendres=$em->getRepository('basclaBundle:Velovendre')->findBy(array('marque'=>$request->get("titree")));
        }
        $query = $em->createQuery('SELECT avg(a.views)  FROM basclaBundle:Velovendre a  ');
        $users = $query->getSingleScalarResult();
        return $this->render('velovendre/index.html.twig', array(
            'velovendres' => $velovendres,
            'avg' => $users,
            'nom'=>$user,
        ));


    }

    public function ranknigAction ( Request $request )
    {
        $session = $this->get('session');
        $user=$session->get('name');


        return $this->render('velovendre/ranking.html.twig', array(
            'velovendres' => $request,
            'nom'=>$user,
        ));


    }

    public function chartAction()
    {   $session = $this->get('session');
        $user=$session->get('name');
        $pieChart = new PieChart();
        $em= $this->getDoctrine();
        $classes = $em->getRepository(velovendre::class)->findAll();
        $totalEtudiant=0;
        foreach($classes as $classe) {
            $totalEtudiant=$totalEtudiant+$classe->getnombre();

        }

        $data= array();
        $stat=['marque', 'prix'];
        $nb=0;
        array_push($data,$stat);
        foreach($classes as $classe) {
            $stat=array();

            $stat=[$classe->getmarque(),$classe->getnombre()];
            array_push($data,$stat);

        }

        $pieChart->getData()->setArrayToDataTable(
            $data         );
        $pieChart->getOptions()->setTitle('Pourcentages des marques par nombre');
        $pieChart->getOptions()->setHeight(500);         $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        $pieChart->getOptions()->setWidth(1000);





        return $this->render('velovendre/chart.html.twig', array('piechart' => $pieChart,
'nom'=>$user,


            )



        );






    }



public function barchartAction(){
    $session = $this->get('session');
    $user=$session->get('name');
$bar = new BarChart();
    $em= $this->getDoctrine();
    $classes = $em->getRepository(velovendre::class)->findAll();
    $totalEtudiant=0;
    foreach($classes as $classe) {
        $totalEtudiant=$totalEtudiant+$classe->getprix();

    }

    $data= array();
    $stat=['marque', 'prix'];
    $nb=0;
    array_push($data,$stat);
    foreach($classes as $classe) {
        $stat=array();

        $stat=[$classe->getmarque(),$classe->getprix()];
        array_push($data,$stat);

    }
    $bar->getData()->setArrayToDataTable(
        $data         );


$bar->getOptions()->setTitle('chart marque et prix');
$bar->getOptions()->getHAxis()->setTitle('prix');
$bar->getOptions()->getHAxis()->setMinValue(0);
$bar->getOptions()->getVAxis()->setTitle('marque');
$bar->getOptions()->setWidth(1000);
$bar->getOptions()->setHeight(500);


    return $this->render('velovendre/barchart.html.twig', array('piechart' => $bar,

'nom'=>$user,

        )



    );
}
    public function pdfAction(int $id)
    {


        $em = $this->getDoctrine()->getManager();

        $velovendre = $em->getRepository('basclaBundle:Velovendre')->find($id);


        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('velovendre/pdf.html.twig', array(
           "velovendre"=>$velovendre
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
    public function listAction( Request $request)
    {$em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $user=$session->get('name');

        $dql   = "SELECT a FROM basclaBundle:Velovendre a";
        $query = $em->createQuery($dql);
        $paginator =$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );

        // parameters to template
        return $this->render('velovendre/list.html.twig', ['pagination' => $pagination]);
    }

}

