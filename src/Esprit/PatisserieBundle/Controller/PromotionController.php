<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\PatisserieBundle\Controller;

use Esprit\PatisserieBundle\Entity\Promotion;

use Esprit\PatisserieBundle\Form\PromotionForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PromotionController
 *
 * @author taoujout
 */
class PromotionController extends Controller {
    
//---------------   Create   ---------------
     public function createAction()
    {
     $Promotion = new Promotion();   
     $form =$this->createForm(new PromotionForm(),$Promotion);
     $request=$this->get('request_stack')->getCurrentRequest();
    
     $form->handleRequest($request);

      if($form->isSubmitted() ){
         $em=$this->getDoctrine()->getManager();
         $em->persist($Promotion);
         $em->flush();
         return $this->redirectToRoute("sweettaha_read_Promotion");
      }
    
     return $this->render('EspritPatisserieBundle:Promotion:create.html.twig',
              array('Form'=>$form->createView()));
    }
    //---------------   READ   ---------------
    public function readAction()
    {
    $em= $this -> getDoctrine()-> getManager();
      $model= $em->getRepository("EspritPatisserieBundle:Promotion")->findAll();
     
        return $this->render('EspritPatisserieBundle:Promotion:read.html.twig', array('Promotion' => $model));
         
    }
    //---------------   UPDATE   ---------------  
    public function updateAction($id)
    {
       $em= $this -> getDoctrine()-> getManager();//liaison avec le base 
       $modele= $em->getRepository('EspritPatisserieBundle:Promotion')->find($id);//pointer à l'entite
       $request= $this -> get('request_stack')->getCurrentRequest();
       $form = $this->createForm(new PromotionForm(), $modele);
       
       $form->handleRequest($request);
       
       if($request->getMethod()=="POST")
       {
       
         $em->persist($modele);
         $em->flush();
         return $this->redirectToRoute("sweettaha_read_Promotion");
    
       }
        return $this->render('EspritPatisserieBundle:Promotion:update.html.twig', 
               array('Form'=>$form->createView()));//render fonction de controller ,reponse objet 
    }
    
    //---------------   Delete   ---------------
     public function deleteAction($id)
    {
       $em= $this -> getDoctrine()-> getManager();//liaison avec le base 
       $modele= $em->getRepository('EspritPatisserieBundle:Promotion')->find($id);//pointer à l'entite
       $em->remove($modele);
       $em->flush();
       return $this->redirectToRoute("sweettaha_read_Promotion");
    }
    
}
