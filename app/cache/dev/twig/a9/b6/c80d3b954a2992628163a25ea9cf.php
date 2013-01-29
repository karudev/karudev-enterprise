<?php

/* KarudevAppsBundle:Contact:showall.html.twig */
class __TwigTemplate_a9b6c80d3b954a2992628163a25ea9cf extends Twig_Template
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
\t    \t\t<th>Fonction</th>
\t    \t\t<th>Portable</th>
\t    \t\t<th>Email pro</th>
\t    \t\t<th></th>
\t    \t</tr>
\t    </thead>
\t    <tbody>
\t    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contacts"));
        foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
            // line 14
            echo "\t    \t<tr>
\t    \t\t<td class=\"voir\" >#";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
            echo "</td>
\t    \t\t<td class=\"voir\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "civilite"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "nom"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "fonction"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "portablePerso"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "emailPro"), "html", null, true);
            echo "</td>
\t    \t\t<td>
                            <img class=\"voir\" title=\"Voir\"  style=\"cursor:pointer\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/show.png"), "html", null, true);
            echo "\" />
                            <img title=\"Supprimer\"  style=\"cursor:pointer\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/delete.png"), "html", null, true);
            echo "\" />
                        </td>
\t    \t</tr>
                <tr class=\"details\">
                    <td colspan=\"6\">
                     ";
            // line 27
            echo $this->env->getExtension('actions')->renderAction("KarudevAppsBundle:Contact:show", array("id" => $this->getAttribute($this->getContext($context, "contact"), "id")), array());
            // line 28
            echo "                    </td>
                </tr>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t
\t    </tbody>
    </table>
    <script>
        // Appliquation du chatiot sur une classe
       \$('.voir').chariot('.details');
    
   

    </script>
";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Contact:showall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  79 => 28,  77 => 27,  69 => 22,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  44 => 16,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
