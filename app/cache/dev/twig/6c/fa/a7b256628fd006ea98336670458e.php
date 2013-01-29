<?php

/* KarudevAppsBundle::login.html.twig */
class __TwigTemplate_6cfaa7b256628fd006ea98336670458e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta content=\"2 days\" name=\"revisit-after\">
\t<meta content=\"Développements Web sur mesure, 
\tKarudev propose de prendre en charge vos projets web spécifiques, de faibles ou grandes complexités.
\tFreelance Php, Dolyveen Renault développe des appliquations et sites en php,html,jquery et utilise divers frameworks ( SYMFONY2, ZEND )
\tafin de gagner en temps, stabilité et sécurité\" name=\"description\">
\t<meta content=\"Freelance Php, Développeur web, Php, Symfony2, Zend Framework, Développement Web, Création de site web en guadeloupe, webmaster île de france , developpeur web île de france , freelance , webmaster indépendant , création site internet guadeloupe, web Guadeloupe, référencement guadeloupe, creation site internet guadeloupe, site web guadeloupe, création site internet guadeloupe, internet antilles, internet caraibes, informatique guadeloupe, site internet martinique, referencement martinique, referencement antilles., Guadeloupe, site internet guadeloupe, site web guadeloupe, creation site internet guadeloupe, guadeloupe site internet, internet antilles, referencement guadeloupe, referencement site guadeloupe, referencement site internet guadeloupe, site web guadeloupe , prestashop\" name=\"keywords\">
\t<meta content=\"Karudev : Freelance Php, Développeur d'appliquations web Symfony2 / Zend Framework Paris et Dom-Tom\" name=\"Generator\">
\t<meta content=\"Renault Dolyveen\" name=\"author\">
\t<meta content=\"index, follow\" name=\"robots\">
   \t<title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   \t<link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    
   
   
    <!-- Le styles -->
     <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/css/smoothness/jquery-ui-1.9.2.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 \t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 \t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/css/sign.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 \t
     ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      
    </style>
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

  
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
         ";
        // line 57
        $this->displayBlock('nav', $context, $blocks);
        // line 63
        echo "          
        </div>
      </div>
    </div>
\t
    <div class=\"container\">
 \t
\t  <section class=\"retour\">
\t  ";
        // line 71
        if ($this->getAttribute($this->getContext($context, "error", true), "message", array(), "any", true, true)) {
            // line 72
            echo "\t  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "
\t  ";
        }
        // line 74
        echo "\t  </section>
      <section class=\"corps\">
\t ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "     </section>
     

    </div> <!-- /container -->
\t";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
 \t\t <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" ></script>
     \t <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/js/jquery-ui-1.9.2.custom.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "  </body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Karudev Enterprise : Appliquations CRM en ligne pour les entrepreneurs et Freelances";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 57
    public function block_nav($context, array $blocks = array())
    {
        // line 58
        echo "        <a class=\"brand\" href=\"#\">Karudev Enterprise</a>
\t \t<div class=\"nav-collapse collapse\">
          
          </div><!--/.nav-collapse -->
     \t";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "\t

\t
\t
     ";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "<footer>
<p>©2009 - 2013 <a href=\"http://karudev.fr\">Karudev.fr</a> , Tous droits réservés | <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contact</a> </p>

<p>Karudev Enterprise :  Appliquations CRM en ligne pour les entrepreneurs et Freelances</p>
</footer>
     ";
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        // line 101
        echo "         ";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 101,  217 => 100,  208 => 88,  205 => 87,  202 => 86,  194 => 77,  191 => 76,  183 => 58,  180 => 57,  175 => 29,  169 => 14,  164 => 102,  162 => 100,  157 => 98,  153 => 97,  147 => 93,  145 => 86,  139 => 82,  137 => 76,  133 => 74,  127 => 72,  125 => 71,  115 => 63,  113 => 57,  89 => 36,  81 => 30,  79 => 29,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  44 => 15,  40 => 14,  25 => 1,  43 => 10,  36 => 6,  31 => 3,  28 => 2,);
    }
}
