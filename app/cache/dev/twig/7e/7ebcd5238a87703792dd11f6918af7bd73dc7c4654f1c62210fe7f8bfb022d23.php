<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5625b87925e05789f9aa1e32b755105843543e9532d2e9ead1cdc9eee74f72ac extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        // line 5
        echo "


                          
<table >
    <tr><td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'label');
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'widget');
        echo " </td></tr>  
    <tr><td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom", array()), 'label');
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom", array()), 'widget');
        echo " </td></tr>  
    <tr><td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'label');
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'widget');
        echo " </td></tr>  
    <tr><td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'label');
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'widget');
        echo " </td></tr>  
    <tr><td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), 'label');
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), 'widget');
        echo " </td></tr>  
    
    <tr><td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "roles", array()), 'label');
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "roles", array()), 'widget');
        echo " </td></tr> 
    <tr><td>  <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></td>
        <td>  </td>
    </tr> 
 </table>  
     
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  65 => 17,  59 => 16,  52 => 14,  46 => 13,  40 => 12,  34 => 11,  28 => 10,  21 => 5,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {{ form_start(form, {'method': 'post', 'action':*/
/*  path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}*/
/* */
/*  ) }}*/
/* */
/* */
/*                           */
/* <table >*/
/*     <tr><td>{{ form_label(form.nom) }}</td><td>{{ form_widget(form.nom) }} </td></tr>  */
/*     <tr><td>{{ form_label(form.prenom) }}</td><td>{{ form_widget(form.prenom) }} </td></tr>  */
/*     <tr><td>{{ form_label(form.email) }}</td><td>{{ form_widget(form.email) }} </td></tr>  */
/*     <tr><td>{{ form_label(form.username) }}</td><td>{{ form_widget(form.username) }} </td></tr>  */
/*     <tr><td>{{ form_label(form.plainPassword) }}</td><td>{{ form_widget(form.plainPassword) }} </td></tr>  */
/*     */
/*     <tr><td>{{ form_label(form.roles) }}</td><td>{{ form_widget(form.roles) }} </td></tr> */
/*     <tr><td>  <input type="submit" value="{{ 'registration.submit'|trans }}" /></td>*/
/*         <td>  </td>*/
/*     </tr> */
/*  </table>  */
/*      */
/* {{ form_end(form) }}*/
