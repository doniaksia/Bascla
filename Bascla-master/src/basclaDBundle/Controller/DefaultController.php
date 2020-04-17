<?php

namespace basclaDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@basclaD\Default\index.html.twig');
    }

    public function indexAdminAction()
    {
        return $this->render('@basclaD\Default\indexAdmin.html.twig');
    }

    public function ajouterEventAction()
    {
        return $this->render('@basclaD\Events\ajouterEvent.html.twig');
    }



    public function detailAction()
    {
        return $this->render('@basclaD\detail.html.twig');
    }

    public function CatalogueEventsAction()
    {
        return $this->render('@basclaD\Events\CatalogueEvents.html.twig');
    }

    public function afficherEventAction()
    {
        return $this->render('@basclaD\Events\afficherEvent.html.twig');

    }

}
