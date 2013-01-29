<?php

/* KarudevAppsBundle:Contact:default.html.twig */
class __TwigTemplate_00c58099361f05447e08d206f9c319d5 extends Twig_Template
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
\t\t\t<li><a id=\"contact_show\" rel=\"./contact/show-all\" href=\"#tabs-1\"><i class=\"icon-search\"></i> Voir ses contacts</a></li>
                        <li><a id=\"contact_create\" rel=\"./contact/create\" href=\"#tabs-2\"><i class=\"icon-plus-sign\"></i> Créer un contact</a></li>
\t\t\t
\t\t</ul>
\t<div class=\"tabs-spacer\"></div>
\t\t<div id=\"tabs-1\">
\t\t";
        // line 11
        echo $this->env->getExtension('actions')->renderAction("KarudevAppsBundle:Contact:showAll", array(), array());
        // line 12
        echo "\t\t</div>
\t\t<div id=\"tabs-2\">
               
\t\t</div>
\t\t
\t</div>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
<script>
\$(function() {
\$( \"#tabs\" ).tabs();
\$('#contact_create').loadHtml('#tabs-2','GET',true);
\$('#contact_show').loadHtml('#tabs-1','POST',true);

});
</script>
";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Contact:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  44 => 12,  42 => 11,  32 => 3,  29 => 2,);
    }
}
