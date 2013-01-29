<?php

/* KarudevSiteBundle:Default:index.html.twig */
class __TwigTemplate_427ecc52a8ae88915eb7b6254c1560e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "\t\t\t<h1>...Développements Web sur mesure!</h1>
\t\t\t<p>karudev propose de prendre en charge vos projets web spécifiques, de faibles ou grandes complexités.<p>
\t\t\t<p>Freelance Php, Dolyveen Renault développe des appliquations et sites en php,html,jquery et utilise divers frameworks ( SYMFONY2, ZEND )
\t\t\t afin de gagner en temps, stabilité et sécurité.<p>
\t\t\t<p>N'hésitez pas à me contacter pour plus d'informations.</p>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "

\t<article>
\t<section  style=\"text-align:center\" >
\t<img class=\"photo\" title=\"Dolyveen Renault, Développeur Web Paris et Dom-Tom\" alt=\"Présentation\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/photos/moi.jpg"), "html", null, true);
        echo "\" />
\t</section>
\t<section >
\t<h2> ...L'entreprise en quelques mots</h2>
<p>karudev est une entreprise individuelle crée en 2009, proposant des services de programmation informatique.</p>
<p>De nature entreprenarial et autodidacte, <b>Dolyveen RENAULT est le Développeur Web</b> de la structure.</p>
<p>BTS IRIS en poche, 1 année d'ingénieur effectuée, des années d'expériences aquises avec des projets réussis, je suis prêt à répondre à vos besoins en développement !</p>
 </section>
 <section >
<h3>Mon Objectif</h3>
<p>Mener à bien vos projets et instaurer une relation de confiance avec vous. <br/>
Je souhaite relever de nouveaux challenges !</p>

<h3>Historique</h3>
<p>Ayant débuter en 2008  en tant que développeur web (salarié), petit à petit j'ai fais mes preuves dans le métier jusqu'à devenir Chef de projet Web.</p>
<p>Par la suite le projet karudev, s'est concrétisé par la volonté de me mettre à mon compte dans le domaine du développement web.</p>
\t</section>
\t</article>
\t<article>
\t<h2>...Développements d'applications web</h2>
<p>Fort de mon expérience et savoir faire, je peux :</p>
<ul class=\"liste\" >
\t<li>Concevoir un cahier des charges selon l'expression de vos besoins</li>
\t<li>Concevoir la structure de votre base de donnée</li>
\t<li>Mettre en place un planning de développement</li>
\t<li>Développer votre extranet ou intranet</li>
\t<li>Développer vos fronts et backs office</li>
\t<li>Développer un site e-commerce</li>
\t<li>Développer tous types d'applications web complexes</li>
</ul>

\t<h2>...Technologies/Languages principalements utilisés</h2>
<ul class=\"liste\" >
\t<li>PHP 5.x</li>
\t<li>Symfony 2.x</li>
\t<li>Zend 1.x</li>
\t<li>ORM Doctrine 2</li>
\t<li>Html5</li>
\t<li>Css3</li>
        <li>Xml</li>
\t<li>Twig</li>
\t<li>Mysql</li>
\t<li>Oracle</li>
        <li>Git</li>
\t<li>Twitter Bootstrap</li>
\t<li>Jquery</li>
\t<li>Highcharts</li>
\t<li>Responsive Design
\t\t<figure><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/divers/responsive.jpeg"), "html", null, true);
        echo "\" /></figure>
\t</li>
\t
</ul>

\t</article>
\t<section class=\"round\">
\t<h2> ...Développements réalisés</h2>
\t\t<ul class=\"round\">
\t\t\t<li>
\t\t\t<img  src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/prestations/muzicast.png"), "html", null, true);
        echo " \">
\t\t\t<article>
\t\t\t<h4>Muzicast V2</h4>
\t\t\tAnalyse des diffusions musicales (Salarié chez Yacast France)
\t\t\t</article>
\t\t\t</li>
\t\t\t<li>
\t\t\t<img  src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/prestations/club.png"), "html", null, true);
        echo " \">
\t\t\t<article>
\t\t\t<h4>Clubmonitoring</h4>
\t\t\tSuivi des diffusions musicales en discothèques (Salarié chez Yacast France)
\t\t\t</article>
\t\t\t</li>
\t\t\t<li>
\t\t\t<img  src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/prestations/presta3.png"), "html", null, true);
        echo " \">
\t\t\t<article>
\t\t\t<h4>Presta v3</h4>
\t\t\tDéveloppement d'appliquations \"Prestation Emploi\" dans l'environnement egroupware (Freelance - APSIE) 
\t\t\t</article>
\t\t\t</li>
\t\t\t<li>
\t\t\t<img  src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/prestations/jeux.png"), "html", null, true);
        echo " \">
\t\t\t<article>
\t\t\t<h4>Echangejeuxvideo.com</h4>
\t\t\tDéveloppement d'un site d'échange de jeux vidéos en guadeloupe (Freelance - NEGOCIA2COM)
\t\t\t</article>
\t\t\t</li>
\t\t\t<li>
\t\t\t<img  src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/prestations/gig.png"), "html", null, true);
        echo " \">
\t\t\t<article>
\t\t\t<h4>GIG Conseil</h4>
\t\t\tDéveloppement de l'extranet (Salarié chez GIG Conseil)
\t\t\t</article>
\t\t\t</li>
\t\t\t<li>
\t\t\t<img  src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevsite/images/prestations/free.png"), "html", null, true);
        echo " \">
\t\t\t<article>
\t\t\t<h4>Projet personel</h4>
\t\t\t//.....
\t\t\t</article>
\t\t\t</li>
\t\t\t

\t\t</ul>
\t</section>

";
    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "<script>
 \$(document).ready(function() {
\$('ul.round').roundabout({ autoplay: true,
         autoplayDuration: 4000,
         autoplayPauseOnHover: true});
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "KarudevSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 121,  181 => 120,  165 => 107,  155 => 100,  145 => 93,  135 => 86,  125 => 79,  115 => 72,  102 => 62,  51 => 14,  45 => 10,  42 => 9,  33 => 3,  30 => 2,);
    }
}
