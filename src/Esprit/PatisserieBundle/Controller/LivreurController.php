<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\PatisserieBundle\Controller;

use Esprit\PatisserieBundle\Entity\Livreur;
use Esprit\PatisserieBundle\Form\LivreurForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class LivreurController extends Controller{
    //---------------   Create   ---------------
     public function createAction()
    {
     $livreur = new Livreur();   
     $form =$this->createForm(new LivreurForm(),$livreur);
     $request=$this->get('request_stack')->getCurrentRequest();
    
     $form->handleRequest($request);

      if($form->isSubmitted() ){
         $em=$this->getDoctrine()->getManager();
         $em->persist($livreur);
         $em->flush();
         return $this->redirectToRoute("sweettaha_read_Livreur");
      }
    
     return $this->render('EspritPatisserieBundle:Livreur:create.html.twig',
              array('Form'=>$form->createView()));
    }
    //---------------   READ   ---------------
    public function readAction()
    {
    $em= $this -> getDoctrine()-> getManager();
      $model= $em->getRepository("EspritPatisserieBundle:Livreur")->findAll();
     
        return $this->render('EspritPatisserieBundle:Livreur:read.html.twig', array('liv' => $model));
         
    }
    //---------------   UPDATE   ---------------  
    public function updateAction($id)
    {
       $em= $this -> getDoctrine()-> getManager();//liaison avec le base 
       $modele= $em->getRepository('EspritPatisserieBundle:Livreur')->find($id);//pointer à l'entite
       $request= $this -> get('request_stack')->getCurrentRequest();
       $form = $this->createForm(new LivreurForm(), $modele);
       
       $form->handleRequest($request);
       
       if($request->getMethod()=="POST")
       {
       
         $em->persist($modele);
         $em->flush();
         return $this->redirectToRoute("sweettaha_read_Livreur");
    
       }
        return $this->render('EspritPatisserieBundle:Livreur:update.html.twig', 
               array('Form'=>$form->createView()));//render fonction de controller ,reponse objet 
    }
    
    //---------------   Delete   ---------------
     public function deleteAction($id)
    {
       $em= $this -> getDoctrine()-> getManager();//liaison avec le base 
       $modele= $em->getRepository('EspritPatisserieBundle:Livreur')->find($id);//pointer à l'entite
       $em->remove($modele);
       $em->flush();
       return $this->redirectToRoute("sweettaha_read_Livreur");
    }
    
}