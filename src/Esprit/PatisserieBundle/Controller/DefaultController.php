<?php

namespace Esprit\PatisserieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritPatisserieBundle:Default:index.html.twig', array('name' => $name));
    }
}
