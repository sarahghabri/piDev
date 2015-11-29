<?php

/* EspritPatisserieBundle:Evenements:update.html.twig */
class __TwigTemplate_6894ad501d718c8050427ec49230d5880ef2ab1e40b36ff732797c3d64f06aec extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomEvent", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomEvent", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "dateEvent", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "dateEvent", array()), 'widget');
        echo "
        </td>
    </tr>
   
    <tr> 
        <td>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "localEvent", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "localEvent", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "themeEvent", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "themeEvent", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "idResponsable", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "idResponsable", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "UPDATE", array()), 'label');
        echo "
        </td>
         <td>
           ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "UPDATE", array()), 'widget');
        echo "
    
         
        </td>
    </tr>  
    
</table> 
   </form>  ";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Evenements:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 54,  99 => 51,  91 => 46,  85 => 43,  77 => 38,  71 => 35,  63 => 30,  57 => 27,  48 => 21,  42 => 18,  34 => 13,  28 => 10,  21 => 5,  19 => 1,);
    }
}
/*  {#*/
/* {{ form(Form) }}  */
/*    */
/*  #}*/
/*  */
/* <form method="POST">*/
/* <table border="2">*/
/*        <tr> */
/*         <td>*/
/*             {{ form_label(Form.nomEvent) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.nomEvent) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.dateEvent) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.dateEvent) }}*/
/*         </td>*/
/*     </tr>*/
/*    */
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.localEvent) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.localEvent) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.themeEvent) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.themeEvent) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.idResponsable) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.idResponsable) }}*/
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
