<?php

/* EspritPatisserieBundle:Promotion:create.html.twig */
class __TwigTemplate_d2eb471cc41f73ea50a01c1ea23be7f48a7e976ca4502dd039747fcbb845aa42 extends Twig_Template
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
        // line 2
        echo "  <form method=\"POST\">
<table border=\"2\">
    
    <tr> 
        <td>
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "dateDebPromo", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "dateDebPromo", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "dateFinPromo", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "dateFinPromo", array()), 'widget');
        echo "
        </td>
    </tr>
   
    <tr> 
        <td>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomPromo", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "nomPromo", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "idResponsable", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "idResponsable", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "idPatisserie", array()), 'label');
        echo "
        </td>   
         <td>
               ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "idPatisserie", array()), 'widget');
        echo "
        </td>
    </tr>
    <tr> 
        <td>
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "CREATE", array()), 'label');
        echo "
        </td>
         <td>
               ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "Form"), "CREATE", array()), 'widget');
        echo "
        </td>
    </tr>  
    
</table> 
    </form>";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Promotion:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 51,  97 => 48,  89 => 43,  83 => 40,  75 => 35,  69 => 32,  61 => 27,  55 => 24,  46 => 18,  40 => 15,  32 => 10,  26 => 7,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/*   <form method="POST">*/
/* <table border="2">*/
/*     */
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.dateDebPromo) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.dateDebPromo) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.dateFinPromo) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.dateFinPromo) }}*/
/*         </td>*/
/*     </tr>*/
/*    */
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.nomPromo) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.nomPromo) }}*/
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
/*             {{ form_label(Form.idPatisserie) }}*/
/*         </td>   */
/*          <td>*/
/*                {{ form_widget(Form.idPatisserie) }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr> */
/*         <td>*/
/*             {{ form_label(Form.CREATE) }}*/
/*         </td>*/
/*          <td>*/
/*                {{ form_widget(Form.CREATE) }}*/
/*         </td>*/
/*     </tr>  */
/*     */
/* </table> */
/*     </form>*/
