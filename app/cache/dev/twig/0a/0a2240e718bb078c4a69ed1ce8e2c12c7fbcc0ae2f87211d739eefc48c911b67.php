<?php

/* EspritPatisserieBundle:Livreur:create.html.twig */
class __TwigTemplate_21aeb15cf07b0674de9bc1c6b9a206574e990b7007a985a9a163191661cbe53b extends Twig_Template
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
        echo "
<form method=\"POST\">
<table border=\"2\">
    <tr> 
        <td>
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomLivreur", array()), 'label');
        echo "
        </td>   
         <td>
           ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomLivreur", array()), 'widget');
        echo "
        </td>
    </tr>  
    <tr> 
        <td>
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "prenomLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "prenomLivreur", array()), 'widget');
        echo "
        </td>
     </tr>
    <tr> 
        <td>
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "numTelephoneLivreur", array()), 'label');
        echo "
        </td>
         <td>
               ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "numTelephoneLivreur", array()), 'widget');
        echo "
        </td>
   </tr> 
    <tr> 
        <td>
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "adresseLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "adresseLivreur", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "emailLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "emailLivreur", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "etatLivreur", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "etatLivreur", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "patisserie", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "patisserie", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "CREATE", array()), 'label');
        echo "
        </td>
         <td>
              <input type=\"submit\" value=\"creer\" />
        </td>
    </tr>  
    
</table> 
  </form> 

    
        ";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Livreur:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  116 => 57,  110 => 54,  102 => 49,  96 => 46,  88 => 41,  82 => 38,  74 => 33,  68 => 30,  60 => 25,  54 => 22,  46 => 17,  40 => 14,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* */
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
/*             {{ form_label(Form.CREATE) }}*/
/*         </td>*/
/*          <td>*/
/*               <input type="submit" value="creer" />*/
/*         </td>*/
/*     </tr>  */
/*     */
/* </table> */
/*   </form> */
/* */
/*     */
/*         */
