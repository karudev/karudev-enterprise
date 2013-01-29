<?php

/* KarudevAppsBundle:Contrat:create.html.twig */
class __TwigTemplate_4ddad94b9265203513d50d8cf9dc1c86 extends Twig_Template
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
\t\t\t<li><a href=\"#tabs-1\"><i class=\"icon-plus-sign\"></i> Créer un contrat</a></li>
\t\t\t<li><a href=\"#tabs-2\"><i class=\"icon-search\"></i> Voir ses contrats</a></li>
\t\t</ul>
\t<div class=\"tabs-spacer\"></div>
\t\t<div id=\"tabs-1\">
\t\t
\t\t\t<section>
\t\t\t<h3>Création d'un nouveau contrat</h3>
\t\t\t\t<form name=\"contrat\" method=\"post\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Client : </td>
\t\t\t\t\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idOrganisation"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Responsable du projet : </td>
\t\t\t\t\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idResponsableClient"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Type de contrat : </td>
\t\t\t\t\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeContrat"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Date de début : </td>
\t\t\t\t\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateDebut"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Durée : </td>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "duree"), 'widget');
        echo " Jours</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Horaires : </td>
\t\t\t\t\t\t\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "horaires"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Lieu : </td>
\t\t\t\t\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lieu"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Réunions : </td>
\t\t\t\t\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "periodiciteReunions"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Moyens fournis : </td>
\t\t\t\t\t\t\t<td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "moyensFournis"), 'widget');
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prix HT (€) : </td>
\t\t\t\t\t\t\t<td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prixHt"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "unitePrix"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Envoyer</button>
\t\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\">Annuler</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t</section>
\t\t\t<section>
\t\t\t
\t\t\t<h3>Contrat type pour prestataire internet et freelance</h3>

<p>Proposés par le bureau d'avocats Derriennic et Associés, spécialisé dans la propriété intellectuelle, voici deux contrats types à utiliser dans le cadre de prestations internet, créations graphiques, développement, rédaction de contenu ou référencement.</p>

<p>La prestation internet étant dans ce contrat définie comme telle : la réalisation de prestations dans le domaine de l’internet et du multimédia nécessitant l'assistance technique du Free Lance, consistant en la réalisation de prestations de nature essentiellement intellectuelles pouvant donner lieu à la création d’images, de textes et/ou de programmes informatiques</p>

<p>Ces deux contrats types constitueront vos conditions générales auxquelles il vous suffira d'ajouter vos annexes incluant : tarifs, délais, conditions particulières...</p>
\t\t
\t\t\t</section>
\t\t</div>
\t\t<div id=\"tabs-2\">
\t\t";
        // line 79
        echo $this->env->getExtension('actions')->renderAction("KarudevAppsBundle:Contrat:show", array(), array());
        // line 80
        echo "\t\t</div>
\t\t
\t</div>
";
    }

    // line 84
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
        return "KarudevAppsBundle:Contrat:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 84,  145 => 80,  143 => 79,  115 => 54,  111 => 53,  104 => 49,  97 => 45,  90 => 41,  83 => 37,  76 => 33,  69 => 29,  62 => 25,  55 => 21,  48 => 17,  32 => 3,  29 => 2,);
    }
}
