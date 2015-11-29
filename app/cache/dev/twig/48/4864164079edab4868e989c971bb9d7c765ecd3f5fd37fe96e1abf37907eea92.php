<?php

/* EspritPatisserieBundle:Livreur:read.html.twig */
class __TwigTemplate_077e3724a4c471ef76859e3e7e69ab2eaa7eca03a9aafbfa99f51e8d1f473844 extends Twig_Template
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
<h1>Liste des Livreur</h1>
<form method=\"POST\">
<table border =\"2\">
    <tr>
        <th>id_livreur</th>
        <th>nom_livreur</th>
        <th>prenom_livreur</th>
        <th>num_telephone_livreur</th>
        <th>adresse_livreur</th>
        <th>email_livreur</th>
        <th>etat_livreur</th>
        <th>NOM_patisserie</th>
        <th colspan=\"2\">Option</th>

     
    </tr>
   ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liv"));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 20
            echo "     <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "idLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prenomLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "numTelephoneLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "adresseLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "emailLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "etatLivreur", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 28
            echo " </td>
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sweettaha_delete_Livreur", array("id" => $this->getAttribute($context["l"], "idLivreur", array()))), "html", null, true);
            echo "\" >DELETE</a> </td>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sweettaha_update_Livreur", array("id" => $this->getAttribute($context["l"], "idLivreur", array()))), "html", null, true);
            echo "\" >UPDATE</a> </td>
        
     </tr> 
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    
   <tr><td align=\"center\" colspan=\"10\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("sweettaha_create_Livreur");
        echo "\" >CREATE A NEW </a></td></tr>
</table>   
</form>
 ";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle:Livreur:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  91 => 34,  80 => 30,  76 => 29,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  49 => 22,  45 => 21,  42 => 20,  38 => 19,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* <h1>Liste des Livreur</h1>*/
/* <form method="POST">*/
/* <table border ="2">*/
/*     <tr>*/
/*         <th>id_livreur</th>*/
/*         <th>nom_livreur</th>*/
/*         <th>prenom_livreur</th>*/
/*         <th>num_telephone_livreur</th>*/
/*         <th>adresse_livreur</th>*/
/*         <th>email_livreur</th>*/
/*         <th>etat_livreur</th>*/
/*         <th>NOM_patisserie</th>*/
/*         <th colspan="2">Option</th>*/
/* */
/*      */
/*     </tr>*/
/*    {% for l in liv  %}*/
/*      <tr>*/
/*         <td>{{ l.idLivreur  }} </td>*/
/*         <td>{{ l.nomLivreur}} </td>*/
/*         <td>{{ l.prenomLivreur    }} </td>*/
/*         <td>{{ l.numTelephoneLivreur     }} </td>*/
/*         <td>{{ l.adresseLivreur }} </td>*/
/*         <td>{{ l.emailLivreur    }} </td>*/
/*         <td>{{ l.etatLivreur   }} </td>*/
/*         <td>{# l.patisserie.nomPatisserie #} </td>*/
/*         <td><a href="{{ path('sweettaha_delete_Livreur',{'id': l.idLivreur}) }}" >DELETE</a> </td>*/
/*         <td><a href="{{ path('sweettaha_update_Livreur',{'id': l.idLivreur}) }}" >UPDATE</a> </td>*/
/*         */
/*      </tr> */
/*    */
/*     {% endfor %}    */
/*    <tr><td align="center" colspan="10"><a href="{{ path('sweettaha_create_Livreur') }}" >CREATE A NEW </a></td></tr>*/
/* </table>   */
/* </form>*/
/*  */
