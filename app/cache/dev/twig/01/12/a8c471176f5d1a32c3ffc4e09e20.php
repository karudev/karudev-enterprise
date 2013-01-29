<?php

/* KarudevAppsBundle::layout.html.twig */
class __TwigTemplate_0112a8c471176f5d1a32c3ffc4e09e20 extends Twig_Template
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
        <meta content=\"Développements Web sur mesure, 
              Karudev propose de prendre en charge vos projets web spécifiques, de faibles ou grandes complexités.
              Freelance Php, Dolyveen Renault développe des appliquations et sites en php,html,jquery et utilise divers frameworks ( SYMFONY2, ZEND )
              afin de gagner en temps, stabilité et sécurité\" name=\"description\">
        <meta content=\"Freelance Php, Développeur web, Php, Symfony2, Zend Framework, Développement Web, Création de site web en guadeloupe, webmaster île de france , developpeur web île de france , freelance , webmaster indépendant , création site internet guadeloupe, web Guadeloupe, référencement guadeloupe, creation site internet guadeloupe, site web guadeloupe, création site internet guadeloupe, internet antilles, internet caraibes, informatique guadeloupe, site internet martinique, referencement martinique, referencement antilles., Guadeloupe, site internet guadeloupe, site web guadeloupe, creation site internet guadeloupe, guadeloupe site internet, internet antilles, referencement guadeloupe, referencement site guadeloupe, referencement site internet guadeloupe, site web guadeloupe , prestashop\" name=\"keywords\">
        <meta content=\"Karudev : Freelance Php, Développeur d'appliquations web Symfony2 / Zend Framework Paris et Dom-Tom\" name=\"Generator\">
        <meta content=\"Renault Dolyveen\" name=\"author\">
        <meta content=\"index, follow\" name=\"robots\">
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
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
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/css/plugin/jquery.pnotify.default.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/css/plugin/jquery.pnotify.default.icons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
     ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/js/jquery-ui-1.9.2.custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/js/karudev-plugin.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/js/jquery.pnotify.js"), "html", null, true);
        echo "\"></script>
        <style>
                body {
                    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
                }

            </style>
            <link href=\"";
        // line 40
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
        // line 61
        $this->displayBlock('nav', $context, $blocks);
        // line 82
        echo "
                    </div>
                </div>
            </div>

            <div class=\"container\">

                <section class=\"retour\">

                </section>
                <section class=\"corps\">
\t ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "                    </section>


                </div> <!-- /container -->
\t";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "                <!-- Le javascript
                ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->


                <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "            </body>
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

    // line 61
    public function block_nav($context, array $blocks = array())
    {
        // line 62
        echo "                        <a class=\"brand\" href=\"#\">Karudev Enterprise</a>
                        <div class=\"nav-collapse collapse\">
                            <ul class=\"nav\">
                                <li class=\"\"><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_apps_enterprise_contact"), "html", null, true);
        echo "\">Contact</a></li>
                                <li class=\"\"><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_apps_enterprise_organisation"), "html", null, true);
        echo "\">Organisation</a></li>
                                <li class=\"\"><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_apps_enterprise_contrat"), "html", null, true);
        echo "\">Contrat</a></li>
                                <li class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Compte de <b>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "idContact"), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "idContact"), "nom"), "html", null, true);
        echo "</b> <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\"><i class=\"icon-user\"></i> Votre profil</a></li>
                                        <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_apps_enterprise_logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i> Se déconnecter</a></li>
                                        <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_home"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i> Aller à karudev.fr</a></li>

                                    </ul>
                                </li>


                            </ul>
                        </div><!--/.nav-collapse -->
     \t";
    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        // line 94
        echo "



     ";
    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        // line 104
        echo "                <footer>
                    <p>©2009 - 2013 <a href=\"http://karudev.fr\">Karudev.fr</a> , Tous droits réservés | <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_contact"), "html", null, true);
        echo "\">Contact</a> </p>

                    <p>Karudev Enterprise :  Appliquations CRM en ligne pour les entrepreneurs et Freelances</p>
                </footer>
     ";
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        // line 118
        echo "         ";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 118,  258 => 117,  249 => 105,  246 => 104,  243 => 103,  235 => 94,  232 => 93,  219 => 73,  215 => 72,  207 => 69,  202 => 67,  198 => 66,  194 => 65,  189 => 62,  186 => 61,  181 => 29,  175 => 14,  170 => 119,  168 => 117,  163 => 115,  156 => 110,  154 => 103,  148 => 99,  146 => 93,  133 => 82,  131 => 61,  107 => 40,  97 => 33,  93 => 32,  89 => 31,  84 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  44 => 15,  40 => 14,  25 => 1,);
    }
}
