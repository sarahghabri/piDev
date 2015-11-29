<?php

/* EspritPatisserieBundle:Promotion:read.html.twig */
class __TwigTemplate_c5099c227d35af31395284e48c14d42b08328ffb5ffa4c1bad18faa5119427d4 extends Twig_Template
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
        echo "<h1>Liste des Promotion</h1>
<form method=\"POST\">
<table border =\"2\">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th> date_deb_promo</th>
        <th> date_fin_promo </th>
       
        
        <th colspan=\"2\">Option</th>

     
    </tr>
   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Promotion"));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 17
            echo "     <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "idPromo", array()), "html", null, true);
            echo " </td>
        <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomPromo", array()), "html", null, true);
            echo "</th>
        <th> ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["l"], "dateDebPromo", array()), "m/d/Y"), "html", null, true);
            echo "</th>
        <th> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["l"], "dateFinPromo", array()), "m/d/Y"), "html", null, true);
            echo "</th>
      
       
        
        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sweettaha_delete_Promotion", array("id" => $this->getAttribute($context["l"], "idPromo", array()))), "html", null, true);
            echo "\" >DELETE</a> </td>
        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sweettaha_update_Promotion", array("id" => $this->getAttribute($context["l"], "idPromo", array()))), "html", null, true);
            echo "\" >UPDATE</a> </td>
        
     </tr> 
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    
   <tr><td align=\"center\" colspan=\"6\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("sweettaha_create_Promotion");
        echo "\" >Ajouter une promotion </a></td></tr>
</table> 
</form>
";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Promotion:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  76 => 30,  65 => 26,  61 => 25,  54 => 21,  50 => 20,  46 => 19,  42 => 18,  39 => 17,  35 => 16,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h1>Liste des Promotion</h1>*/
/* <form method="POST">*/
/* <table border ="2">*/
/*     <tr>*/
/*         <th>id</th>*/
/*         <th>nom</th>*/
/*         <th> date_deb_promo</th>*/
/*         <th> date_fin_promo </th>*/
/*        */
/*         */
/*         <th colspan="2">Option</th>*/
/* */
/*      */
/*     </tr>*/
/*    {% for l in Promotion  %}*/
/*      <tr>*/
/*         <td>{{ l.idPromo  }} </td>*/
/*         <th>{{l.nomPromo }}</th>*/
/*         <th> {{l.dateDebPromo|date("m/d/Y")  }}</th>*/
/*         <th> {{l.dateFinPromo|date("m/d/Y")  }}</th>*/
/*       */
/*        */
/*         */
/*         <td><a href="{{ path('sweettaha_delete_Promotion',{'id': l.idPromo}) }}" >DELETE</a> </td>*/
/*         <td><a href="{{ path('sweettaha_update_Promotion',{'id': l.idPromo}) }}" >UPDATE</a> </td>*/
/*         */
/*      </tr> */
/*    */
/*     {% endfor %}    */
/*    <tr><td align="center" colspan="6"><a href="{{ path('sweettaha_create_Promotion') }}" >Ajouter une promotion </a></td></tr>*/
/* </table> */
/* </form>*/
/* */
