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
 * Description of LivreurForm
 *
 * @author TahaJaballah
 */
class LivreurForm extends AbstractType {
    public function getName() {
        return 'livreurForm';  
    }
    public function buildForm(FormBuilderInterface $builder,array $option) {
        $builder->add('nomLivreur')
        ->add('prenomLivreur')
        ->add('numTelephoneLivreur')
        ->add('adresseLivreur')
        ->add('emailLivreur','email') 
        ->add('etatLivreur') 
        ->add('patisserie','entity',array('class'=>'EspritPatisserieBundle:Patisseries'))
     
        ->add('CREATE', 'submit')
        ->add('UPDATE', 'submit')        
        ;
    }

}
