<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="login")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/mapbox", name="mapbox")
     */
    public function mapboxAction(Request $request)
    {
        return $this->render('default/mapbox.html.twig');
    }

    /**
     * @Route("/verify", name="verify")
     */
    public function verifyAction(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        if($username == 'admin' && $password == 'admin'){
            return $this->redirectToRoute('mapbox');
        } else{
            $this->get('session')->getFlashBag()->add('error', 'wrong username/password, please try admin/admin');
            return $this->redirectToRoute('login');
        }
    }
}
