<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b4289efcd4eb94628ff9f3fa8664586c4be8c1a42da249d4ae8f925033751243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layoutRegister.html.twig", "FOSUserBundle:Registration:register.html.twig", 2);
        $this->blocks = array(
            'Register' => array($this, 'block_Register'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layoutRegister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Register($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "  ";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  38 => 4,  34 => 7,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "FOSUserBundle::layoutRegister.html.twig" %}*/
/*   {% block Register %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/*   {% endblock Register %}  */
/* */
