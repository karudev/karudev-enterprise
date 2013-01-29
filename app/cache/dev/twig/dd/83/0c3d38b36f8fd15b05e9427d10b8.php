<?php

/* KarudevAppsBundle:Organisation:show.html.twig */
class __TwigTemplate_dd830c3d38b36f8fd15b05e9427d10b8 extends Twig_Template
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
        // line 1
        echo "    <table class=\"table table-striped\">
    \t<thead>
\t    \t<tr>
\t    \t\t<th>ID</th>
\t    \t\t<th>Nom</th>
\t    \t\t<th>Adresse</th>
\t    \t\t<th>Teléphone</th>
\t    \t\t<th>Email</th>
                        <th>Site</th>
\t    \t\t<th></th>
\t    \t</tr>
\t    </thead>
\t    <tbody>
\t    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "organisations"));
        foreach ($context['_seq'] as $context["key"] => $context["organisation"]) {
            // line 15
            echo "\t    \t<tr>
\t    \t\t<td>#";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "idOrganisation"), "html", null, true);
            echo "</td>
\t    \t\t<td><a href=\"#\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "nom"), "html", null, true);
            echo "</a></td>
\t    \t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "adresseLigne1"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "cp"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "ville"), "html", null, true);
            echo " </td>
\t    \t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "tel"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "organisation"), "siteWeb"), "html", null, true);
            echo "</td>
\t    \t\t<td>
                            <img title=\"Voir\"  style=\"cursor:pointer\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/show.png"), "html", null, true);
            echo "\" />
                            <img title=\"Supprimer\"  style=\"cursor:pointer\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/delete.png"), "html", null, true);
            echo "\" />
                        </td>
\t    \t</tr>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['organisation'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t
\t    </tbody>
    </table>";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Organisation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  74 => 24,  70 => 23,  61 => 20,  57 => 19,  49 => 18,  45 => 17,  41 => 16,  38 => 15,  34 => 14,  19 => 1,  173 => 90,  166 => 86,  164 => 85,  146 => 70,  139 => 66,  132 => 62,  127 => 60,  120 => 56,  115 => 54,  107 => 49,  100 => 45,  93 => 41,  86 => 37,  79 => 33,  72 => 29,  65 => 21,  60 => 23,  53 => 19,  48 => 17,  32 => 3,  29 => 2,);
    }
}
