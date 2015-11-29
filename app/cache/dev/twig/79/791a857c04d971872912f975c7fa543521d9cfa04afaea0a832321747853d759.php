<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_25ede7fdbe0d577779f23753c3f660ac0cd87403bd14a3290a65a8cf7fb4c775 extends Twig_Template
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
        echo "
<div class=\"fos_user_user_show\">
    <h1>Profile</h1>
<table border=\"1\">
    <tr> <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username", array()), "html", null, true);
        echo "</td></tr>
     <tr> <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email", array()), "html", null, true);
        echo "</td></tr>
    
    
    
</table>
    
   
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 6,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <h1>Profile</h1>*/
/* <table border="1">*/
/*     <tr> <td>{{ 'profile.show.username'|trans }}</td> <td>{{ user.username }}</td></tr>*/
/*      <tr> <td>{{ 'profile.show.email'|trans }}</td> <td>{{ user.email }}</td></tr>*/
/*     */
/*     */
/*     */
/* </table>*/
/*     */
/*    */
/* </div>*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
