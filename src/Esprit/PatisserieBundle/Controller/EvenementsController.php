<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\PatisserieBundle\Controller;

use Esprit\PatisserieBundle\Entity\Evenements;
use Esprit\PatisserieBundle\Form\EvenementsForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of EvenementsController
 *
 * @author taoujout
 */
class EvenementsController extends Controller {
    //put your code here
       
//---------------   Create   ---------------
     public function createAction()
    {
     $Evenements = new Evenements();   
     $form =$this->createForm(new EvenementsForm(),$Evenements);
     $request=$this->get('request_stack')->getCurrentRequest();
    
     $form->handleRequest($request);

      if($form->isSubmitted() ){
         $em=$this->getDoctrine()->getManager();
         $em->persist($Evenements);
         $em->flush();
         return $this->redirectToRoute("sweettaha_read_Evenements");
      }
    
     return $this->render('EspritPatisserieBundle:Evenements:create.html.twig',
              array('Form'=>$form->createView()));
    }
    //---------------   READ   ---------------
    public function readAction()
    {
    $em= $this -> getDoctrine()-> getManager();
      $model= $em->getRepository("EspritPatisserieBundle:Evenements")->findAll();
     
        return $this->render('EspritPatisserieBundle:Evenements:read.html.twig', array('Evenements' => $model));
         
    }
    //---------------   UPDATE   ---------------  
    public function updateAction($id)
    {
       $em= $this -> getDoctrine()-> getManager();//liaison avec le base 
       $modele= $em->getRepository('EspritPatisserieBundle:Evenements')->find($id);//pointer à l'entite
       $request= $this -> get('request_stack')->getCurrentRequest();
       $form = $this->createForm(new EvenementsForm(), $modele);
       
       $form->handleRequest($request);
       
       if($request->getMethod()=="POST")
       {
       
         $em->persist($modele);
         $em->flush();
         return $this->redirectToRoute("sweettaha_read_Evenements");
    
       }
        return $this->render('EspritPatisserieBundle:Evenements:update.html.twig', 
               array('Form'=>$form->createView()));//render fonction de controller ,reponse objet 
    }
    
    //---------------   Delete   ---------------
     public function deleteAction($id)
    {
       $em= $this -> getDoctrine()-> getManager();//liaison avec le base 
       $modele= $em->getRepository('EspritPatisserieBundle:Evenements')->find($id);//pointer à l'entite
       $em->remove($modele);
       $em->flush();
       return $this->redirectToRoute("sweettaha_read_Evenements");
    }
}
