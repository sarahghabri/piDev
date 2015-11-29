<?php

/* EspritPatisserieBundle:Evenements:read.html.twig */
class __TwigTemplate_cf507270bcc5cfcaf8a3aba956f9b2e33695e9a9a168fc618e24c513f9c9b6ff extends Twig_Template
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
        echo "<h1>Liste des Evenements</h1>
<form method=\"POST\">
<table border =\"2\">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th> date_event</th>
        <th> local </th>
        <th> theme</th>
        <th> Responsable </th>
       
        
        <th colspan=\"2\">Option</th>

     
    </tr>
   ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Evenements"));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 19
            echo "     <tr>
         <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "idEvent", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomEvent", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["l"], "dateEvent", array()), "m/d/Y"), "html", null, true);
            echo "</td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "localEvent", array()), "html", null, true);
            echo "</td>
        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "themeEvent", array()), "html", null, true);
            echo "</td>
        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "idResponsable", array()), "html", null, true);
            echo "</td>
      
       
        
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sweettaha_delete_Evenements", array("id" => $this->getAttribute($context["l"], "idEvent", array()))), "html", null, true);
            echo "\" >DELETE</a> </td>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sweettaha_update_Evenements", array("id" => $this->getAttribute($context["l"], "idEvent", array()))), "html", null, true);
            echo "\" >UPDATE</a> </td>
        
     </tr> 
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    
   <tr><td align=\"center\" colspan=\"8\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("sweettaha_create_Evenements");
        echo "\" >Ajouter un evenement </a></td></tr>
</table> 
</form>
";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Evenements:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  86 => 34,  75 => 30,  71 => 29,  64 => 25,  60 => 24,  56 => 23,  52 => 22,  48 => 21,  44 => 20,  41 => 19,  37 => 18,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h1>Liste des Evenements</h1>*/
/* <form method="POST">*/
/* <table border ="2">*/
/*     <tr>*/
/*         <th>id</th>*/
/*         <th>nom</th>*/
/*         <th> date_event</th>*/
/*         <th> local </th>*/
/*         <th> theme</th>*/
/*         <th> Responsable </th>*/
/*        */
/*         */
/*         <th colspan="2">Option</th>*/
/* */
/*      */
/*     </tr>*/
/*    {% for l in Evenements  %}*/
/*      <tr>*/
/*          <td>{{ l.idEvent  }} </td>*/
/*         <td>{{ l.nomEvent  }} </td>*/
/*         <td>{{l.dateEvent|date("m/d/Y") }}</td>*/
/*         <td> {{l.localEvent  }}</td>*/
/*         <td> {{l.themeEvent  }}</td>*/
/*         <td> {{l.idResponsable  }}</td>*/
/*       */
/*        */
/*         */
/*         <td><a href="{{ path('sweettaha_delete_Evenements',{'id': l.idEvent}) }}" >DELETE</a> </td>*/
/*         <td><a href="{{ path('sweettaha_update_Evenements',{'id': l.idEvent}) }}" >UPDATE</a> </td>*/
/*         */
/*      </tr> */
/*    */
/*     {% endfor %}    */
/*    <tr><td align="center" colspan="8"><a href="{{ path('sweettaha_create_Evenements') }}" >Ajouter un evenement </a></td></tr>*/
/* </table> */
/* </form>*/
/* */
