<?php

/* MyAppUserBundle::loginLayout.html.twig */
class __TwigTemplate_d05f3c3d3cc9edaab831517e4387cb74fa1c35e9e3c6795ad3bc6d6937176d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'register' => array($this, 'block_register'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "  <p>    register</p>
 ";
        // line 3
        $this->displayBlock('register', $context, $blocks);
        // line 4
        echo "\t";
    }

    // line 3
    public function block_register($context, array $blocks = array())
    {
        echo "\t
 ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::loginLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 4,  23 => 3,  20 => 2,);
    }
}
/* {# empty Twig template #}*/
/*   <p>    register</p>*/
/*  {% block register %}	*/
/*  {% endblock  %}	*/
