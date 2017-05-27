<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/maps.html.twig');
    }

    /**
     * @Route("/mapbox", name="mapbox")
     */
    public function mapboxAction(Request $request)
    {
        return $this->render('default/mapbox.html.twig');
    }
}
