<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUserBundle:Default:index.html.twig', array('name' => $name));
    }
    public function layoutAction()
    {
        return $this->render('MyAppUserBundle::index.html.twig');
    }
    public function layoutRegisterAction()
    {
        return $this->render('MyAppUserBundle::layoutRegister.html.twig');
    }
    
}
