<?php

/* KarudevAppsBundle:Contact:create.html.twig */
class __TwigTemplate_f9a95bb502767f2e3a3b0b0e4a378112 extends Twig_Template
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
\t\t\t<li><a href=\"#tabs-1\"><i class=\"icon-plus-sign\"></i> Créer un contact</a></li>
\t\t\t<li><a id=\"contact_show\" rel=\"./contact/show-all\" href=\"#tabs-2\"><i class=\"icon-search\"></i> Voir ses contacts</a></li>
\t\t</ul>
\t<div class=\"tabs-spacer\"></div>
\t\t<div id=\"tabs-1\">
\t\t
\t\t\t
\t\t\t<h3>Création d'un nouveau contact</h3>
\t\t\t\t<form name=\"contact_create\" action=\"./contact\" method=\"post\" >
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Civilité : </td>
\t\t\t\t\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "civilite"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom : </td>
\t\t\t\t\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Prénom : </td>
\t\t\t\t\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fonction : </td>
\t\t\t\t\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fonction"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Service : </td>
\t\t\t\t\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel Pro: </td>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telPro"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Portable perso: </td>
\t\t\t\t\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "portablePerso"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email pro : </td>
\t\t\t\t\t\t\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emailPro"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Email perso : </td>
\t\t\t\t\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emailPerso"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fax : </td>
\t\t\t\t\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse : </td>
\t\t\t\t\t\t\t<td colspan=\"3\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne1"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"3\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne2"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td colspan=\"3\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne3"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Cp : </td>
\t\t\t\t\t\t\t<td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Ville : </td>
\t\t\t\t\t\t\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Région : </td>
\t\t\t\t\t\t\t<td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "region"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>Pays : </td>
\t\t\t\t\t\t\t<td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Site web : </td>
\t\t\t\t\t\t\t<td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sitePerso"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Enregistrer</button>
\t\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\">Annuler</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t
\t\t
\t\t</div>
\t\t<div id=\"tabs-2\">
               
\t\t</div>
\t\t
\t</div>
";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
<script>
\$(function() {
\$( \"#tabs\" ).tabs();
\$('#contact_show').loadHtml('#tabs-2','POST',true);

//  Création du contact en ajax
 \$('form[name=\"contact_create\"]').submitForm('Contact','contact');
});
</script>
";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Contact:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 94,  156 => 74,  149 => 70,  144 => 68,  137 => 64,  132 => 62,  124 => 57,  117 => 53,  110 => 49,  103 => 45,  96 => 41,  91 => 39,  84 => 35,  79 => 33,  72 => 29,  67 => 27,  60 => 23,  55 => 21,  48 => 17,  32 => 3,  29 => 2,);
    }
}
