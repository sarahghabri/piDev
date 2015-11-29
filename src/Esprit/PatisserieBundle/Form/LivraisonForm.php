<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\PatisserieBundle\Form;

/**
 * Description of LivraisonForm
 *
 * @author TahaJaballah
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LivraisonForm extends AbstractType{
    public function getName() {
        
    }
     public function buildForm(FormBuilderInterface $builder,array $option) {
        $builder
       //->add('type')
       ->add('type', 'choice', array(
    'choices'  => array('A_Domicle' => 'A Domicle', 'Au_Bureau' => 'Au Bureau'),
    'required' => false,
))
        ->add('CREATE', 'submit')
        ->add('UPDATE', 'submit')        
        ;
    }

}
