<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\PatisserieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of EvenementsForm
 *
 * @author taoujout
 */
class EvenementsForm extends AbstractType{
       //put your code here
     public function getName() {
        return 'promotionForm';  
    }
    public function buildForm(FormBuilderInterface $builder,array $option) {
        $builder
        ->add('nomEvent')
        ->add('dateEvent','date')
        ->add('localEvent')
        ->add('themeEvent')        
        
      
      
        ->add('idResponsable','entity',array('class'=>'EspritPatisserieBundle:Patisseries'))        
     
        ->add('CREATE', 'submit')
        ->add('UPDATE', 'submit')        
        ;
    }
}
