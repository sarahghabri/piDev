<?php

/* EspritPatisserieBundle:Livreur:update.html.twig */
class __TwigTemplate_b84c7bd910874500d8e39bcfdfb0c1ef20d82b6870a90d96017476111d200dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        // line 5
        echo " 
<form method=\"POST\">
<table border=\"2\">
    <tr> 
        <td>
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomLivreur", array()), 'label');
        echo "
        </td>   
         <td>
           ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomLivreur", array()), 'widget');
        echo "
        </td>
    </tr>  
    <tr> 
        <td>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "prenomLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "prenomLivreur", array()), 'widget');
        echo "
        </td>
     </tr>
    <tr> 
        <td>
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "numTelephoneLivreur", array()), 'label');
        echo "
        </td>
         <td>
               ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "numTelephoneLivreur", array()), 'widget');
        echo "
        </td>
   </tr> 
    <tr> 
        <td>
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "adresseLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "adresseLivreur", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "emailLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "emailLivreur", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "etatLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "etatLivreur", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "patisserie", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "patisserie", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "UPDATE", array()), 'label');
        echo "
        </td>
         <td>
           ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "UPDATE", array()), 'widget');
        echo "
    
         
        </td>
    </tr>  
    
</table> 
   </form>  ";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Livreur:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 69,  126 => 66,  118 => 61,  112 => 58,  104 => 53,  98 => 50,  90 => 45,  84 => 42,  76 => 37,  70 => 34,  62 => 29,  56 => 26,  48 => 21,  42 => 18,  34 => 13,  28 => 10,  21 => 5,  19 => 1,);
    }
}
/*  {#*/
/* {{ form(Form) }}  */
/*    */
/*  #}*/
/*  */
/* <form method="POST">*/
/* <table border="2">*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.nomLivreur) }}*/
/*         </td>   */
/*          <td>*/
/*            {{ form_widget(Form.nomLivreur) }}*/
/*         </td>*/
/*     </tr>  */
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.prenomLivreur) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.prenomLivreur) }}*/
/*         </td>*/
/*      </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.numTelephoneLivreur) }}*/
/*         </td>*/
/*          <td>*/
/*                {{ form_widget(Form.numTelephoneLivreur) }}*/
/*         </td>*/
/*    </tr> */
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.adresseLivreur) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.adresseLivreur) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.emailLivreur) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.emailLivreur) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.etatLivreur) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.etatLivreur) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.patisserie) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.patisserie) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.UPDATE) }}*/
/*         </td>*/
/*          <td>*/
/*            {{ form_widget(Form.UPDATE) }}*/
/*     */
/*          */
/*         </td>*/
/*     </tr>  */
/*     */
/* </table> */
/*    </form>  */
