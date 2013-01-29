<?php

/* ::base.html.twig */
class __TwigTemplate_59c03fd10cd00eefa0485f9e4816364d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/css/roundabout.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
     ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href=\"";
        // line 32
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
        // line 53
        $this->displayBlock('nav', $context, $blocks);
        // line 66
        echo "          
        </div>
      </div>
    </div>

    <div class=\"container\">
 \t
\t <header>
\t<section>
\t\t<figure class=\"logo\" ></figure>
\t\t<article class=\"texte\">
\t";
        // line 77
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "\t\t</article>
\t\t<article class=\"texture\" >

\t\t</article>
\t</section>
</header>
      <section class=\"corps\">
\t ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "     </section>
     

    </div> <!-- /container -->
\t";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 108
        echo "    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
 \t\t <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/jquery.iphone-slide.min.js"), "html", null, true);
        echo "\" ></script>
         <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/jquery.roundabout.js"), "html", null, true);
        echo "\" ></script>
          <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
         <script>
     

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29879648-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

        ";
        // line 132
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "  </body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Karudev : Développeur Web, PHP, Symfony2, Zend Framework en Freelance - Paris et Dom-Tom";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 53
    public function block_nav($context, array $blocks = array())
    {
        // line 54
        echo "\t \t<div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getContext($context, "classe_home"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i> Home</a></li>
              <li class=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getContext($context, "classe_profil"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profil"), "html", null, true);
        echo "\">Mon Profil</a></li>
               <li class=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "classe_disponibilite"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_disponibilite"), "html", null, true);
        echo "\">Disponibilité</a></li>
               <!--<li class=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "classe_devis"), "html", null, true);
        echo "\"><a href=\"#contact\">Devis</a></li>-->
                <li class=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "classe_contact"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contact</a></li>
                 <li class=\"\"><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_apps_enterprise_login"), "html", null, true);
        echo "\"><i class=\"icon-folder-open\"></i> <b><u>Karudev Enterprise</u></b></a></li>
                <!-- <li class=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "classe_espace_client"), "html", null, true);
        echo "\"><a class=\"espace_client\"  href=\"#contact\">Espace client</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
     \t";
    }

    // line 77
    public function block_header($context, array $blocks = array())
    {
        // line 78
        echo "

\t";
    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        // line 89
        echo "\t

\t
\t
     ";
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
        echo "<footer>
<p>©2009 - 2013 <a href=\"http://karudev.fr\">Karudev.fr</a> , Tous droits réservés | <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contact</a> </p>

<p>Freelance en développement Web
- Siret : 517 620 977 00010 - Naf : 62.01Z
</p>
<p>Paris et Dom-Tom</p>
</footer>
     ";
    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        // line 133
        echo "         ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 133,  284 => 132,  272 => 100,  269 => 99,  266 => 98,  258 => 89,  255 => 88,  249 => 78,  246 => 77,  238 => 62,  234 => 61,  228 => 60,  224 => 59,  218 => 58,  212 => 57,  206 => 56,  202 => 54,  199 => 53,  194 => 26,  188 => 14,  183 => 134,  162 => 116,  158 => 115,  154 => 114,  150 => 113,  146 => 112,  140 => 108,  138 => 98,  132 => 94,  130 => 88,  121 => 81,  119 => 77,  106 => 66,  104 => 53,  80 => 32,  73 => 27,  71 => 26,  67 => 25,  63 => 24,  59 => 23,  55 => 22,  41 => 14,  26 => 1,  184 => 121,  181 => 132,  165 => 107,  155 => 100,  145 => 93,  135 => 86,  125 => 79,  115 => 72,  102 => 62,  51 => 14,  45 => 15,  42 => 9,  33 => 3,  30 => 2,);
    }
}
