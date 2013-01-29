<?php

/* KarudevAppsBundle:Contact:show.html.twig */
class __TwigTemplate_be982e803c684741b498331f49ec1187 extends Twig_Template
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
        echo "<section id=\"section-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "\" class=\"show\">
    <h3>Fiche contact de ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "civilite"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "nom"), "html", null, true);
        echo "</h3>
    <table >
        <tr>
            <td>Civilité : </td>
            <td><strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "civilite"), "html", null, true);
        echo "</strong></td>
            <td></td>
             <td></td>
        </tr>
        <tr>
            <td>Nom : </td>
            <td><strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "nom"), "html", null, true);
        echo "</td>
            <td>Prénom : </td>
            <td><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "prenom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Fonction : </td>
            <td><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "fonction"), "html", null, true);
        echo "</td>
            <td>Service : </td>
            <td><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "service"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Tel Pro: </td>
            <td><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "telPro"), "html", null, true);
        echo "</td>
            <td>Portable perso: </td>
            <td><strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "portablePerso"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Email pro : </td>
            <td><strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "emailPro"), "html", null, true);
        echo "</td>
            <td>Email perso : </td>
            <td><strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "emailPerso"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Fax : </td>
            <td><strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "fax"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Adresse : </td>
            <td colspan=\"3\">
                <address>
                    <strong>
                        <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "adresseLigne1"), "html", null, true);
        echo "</p>
                        <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "adresseLigne2"), "html", null, true);
        echo "</p>
                        <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "adresseLigne3"), "html", null, true);
        echo "</p>
                        <p>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "ville"), "html", null, true);
        echo "</p>
                        <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "region"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "pays"), "html", null, true);
        echo "</p>
                    </strong>
                </address>
            </td>


        </tr>
        <tr>
            <td>Site web : </td>
            <td><strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "sitePerso"), "html", null, true);
        echo "</strong></td>
        </tr>
        <tr style=\"height:20px;\">
            <td>
                <a id=\"modifier-";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "\" href=\"./contact/edit/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "\" class=\"btn btn-warning\" type=\"submit\">Modifier</a>
            </td>
            <td></td>
            <td></td>
            <td style=\"text-align: right\" >
                <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
            </td>
           
        </tr>
    </table>
</section>
<section class=\"show\" >
    <h3>Ses organisations</h3>
    <div style=\"padding-bottom:10px;margin-bottom:10px;border-bottom:1px solid #CCC\" >
        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "organisations"));
        foreach ($context['_seq'] as $context["key"] => $context["organisation"]) {
            // line 75
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "organisation"), "idOrganisation"), "nom"), "html", null, true);
            echo " <img title=\"Supprimer\"  style=\"cursor:pointer\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/delete.png"), "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['organisation'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
        echo "    </div>
    <div>
        <form name=\"contact_liercontactorganisation-";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "\" action=\"./contact/liercontactorganisation/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "\">
        <div> ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idOrganisation"), 'widget');
        echo "</div>
        <div> <button class=\"btn btn-success\" type=\"submit\">Lier</button></div>
        </form>
    </div>
    
</section>
<script>
    \$('#modifier-";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "').loadHtml('#section-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "','GET');
    \$('form[name=\"contact_liercontactorganisation-";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contact"), "id"), "html", null, true);
        echo "\"]').submitForm();
</script>
";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Contact:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 88,  195 => 87,  185 => 80,  179 => 79,  175 => 77,  164 => 75,  160 => 74,  141 => 60,  134 => 56,  120 => 47,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  92 => 36,  85 => 32,  80 => 30,  73 => 26,  68 => 24,  61 => 20,  49 => 14,  35 => 6,  24 => 2,  87 => 30,  79 => 28,  77 => 27,  69 => 22,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  44 => 12,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
