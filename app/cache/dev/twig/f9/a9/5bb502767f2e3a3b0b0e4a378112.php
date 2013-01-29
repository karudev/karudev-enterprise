<?php

/* KarudevAppsBundle:Contact:create.html.twig */
class __TwigTemplate_f9a95bb502767f2e3a3b0b0e4a378112 extends Twig_Template
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
        echo "<h3>Création d'un nouveau contact</h3>
<form name=\"contact_create\" action=\"./contact/create\" method=\"post\" >
    <table>
        <tr>
            <td>Civilité : </td>
            <td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "civilite"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Nom : </td>
            <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "</td>
            <td>Prénom : </td>
            <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Fonction : </td>
            <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fonction"), 'widget');
        echo "</td>
            <td>Service : </td>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Tel Pro: </td>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telPro"), 'widget');
        echo "</td>
            <td>Portable perso: </td>
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "portablePerso"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Email pro : </td>
            <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emailPro"), 'widget');
        echo "</td>
            <td>Email perso : </td>
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emailPerso"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Fax : </td>
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Adresse : </td>
            <td colspan=\"3\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne1"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td colspan=\"3\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne2"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td colspan=\"3\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresseLigne3"), 'widget', array("attr" => array("class" => "input-xxlarge")));
        echo "</td>
        </tr>

        <tr>
            <td>Cp : </td>
            <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'widget');
        echo "</td>
            <td>Ville : </td>
            <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Région : </td>
            <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "region"), 'widget');
        echo "</td>
            <td>Pays : </td>
            <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Site web : </td>
            <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sitePerso"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button class=\"btn btn-success\" type=\"submit\">Enregistrer</button>
                <button class=\"btn\" type=\"button\">Annuler</button>
            </td>
        </tr>
    </table>
</form>
<script>
//  Création du contact en ajax
 \$('form[name=\"contact_create\"]').submitForm('Contact','contact');
 </script>";
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
        return array (  134 => 63,  127 => 59,  122 => 57,  115 => 53,  110 => 51,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  69 => 28,  62 => 24,  57 => 22,  50 => 18,  45 => 16,  38 => 12,  33 => 10,  26 => 6,  19 => 1,);
    }
}
