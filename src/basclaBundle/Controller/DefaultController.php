<?php

namespace basclaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@bascla\Default\index.html.twig');
    }
    public function indexAdminAction()
    {
        return $this->render('@bascla\Default\indexAdmin.html.twig');
    }
    public function ajouterEventAction()
    {
        return $this->render('@bascla\Events\ajouterEvent.html.twig');
    }
    public function modifierEventAction()
    {
        return $this->render('@bascla\Events\modifierEvent.html.twig');
    }
    public function supprimerEventAction()
    {
        return $this->render('@bascla\Events\supprimerEvent.html.twig');
    }
    public function productsAction()
    {
        return $this->render('@bascla\catalogue.html.twig');
    }
    public function detailAction()
    {
        return $this->render('@bascla\detail.html.twig');
    }
    public function CatalogueEventsAction()
    {
        return $this->render('@bascla\Events\CatalogueEvents.html.twig');
    }
}
