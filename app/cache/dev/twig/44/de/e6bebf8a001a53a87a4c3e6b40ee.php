<?php

/* KarudevAppsBundle:Organisation:create.html.twig */
class __TwigTemplate_44dee6bebf8a001a53a87a4c3e6b40ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KarudevAppsBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KarudevAppsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div id=\"tabs\" class=\"tabs-bottom\">
\t\t<ul>
\t\t\t<li><a href=\"#tabs-1\"><i class=\"icon-plus-sign\"></i> Créer une organisation</a></li>
\t\t\t<li><a href=\"#tabs-2\"><i class=\"icon-search\"></i> Voir ses organisations</a></li>
\t\t</ul>
\t<div class=\"tabs-spacer\"></div>
\t\t<div id=\"tabs-1\">
\t\t
\t\t\t
\t\t\t<h3>Création d'une nouvelle organisation</h3>
\t\t\t\t<form name=\"organisation\" method=\"post\" >
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom : </td>
\t\t\t\t\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "</td>
                                                        <td>Statut juridique : </td>
\t\t\t\t\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "statutJuridique"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
                                                <tr>
\t\t\t\t\t\t\t<td>Siret : </td>
\t\t\t\t\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "siret"), 'widget');
        echo "</td>
                                                        <td>Capital : </td>
\t\t\t\t\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "capital"), 'widget');
        echo " €</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel : </td>
\t\t\t\t\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tel"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email : </td>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fax : </td>
\t\t\t\t\t\t\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse : </td>
\t\t\t\t\t\t\t<td colspan=\"3\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne1"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"3\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne2"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"3\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne3"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Cp : </td>
\t\t\t\t\t\t\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Ville : </td>
\t\t\t\t\t\t\t<td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Région : </td>
\t\t\t\t\t\t\t<td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "region"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Pays : </td>
\t\t\t\t\t\t\t<td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Site web : </td>
\t\t\t\t\t\t\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "siteWeb"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
                                                <tr>
\t\t\t\t\t\t\t<td>Description : </td>
                                                        <td colspan=\"3\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Envoyer</button>
\t\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\">Annuler</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t
\t\t
\t\t</div>
\t\t<div id=\"tabs-2\">
                    ";
        // line 85
        echo $this->env->getExtension('actions')->renderAction("KarudevAppsBundle:Organisation:show", array(), array());
        // line 86
        echo "\t\t</div>
\t\t
\t</div>
";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
<script>
\$(function() {
\$( \"#tabs\" ).tabs();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Organisation:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 90,  166 => 86,  164 => 85,  146 => 70,  139 => 66,  132 => 62,  127 => 60,  120 => 56,  115 => 54,  107 => 49,  100 => 45,  93 => 41,  86 => 37,  79 => 33,  72 => 29,  65 => 25,  60 => 23,  53 => 19,  48 => 17,  32 => 3,  29 => 2,);
    }
}
