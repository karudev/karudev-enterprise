<?php

/* KarudevAppsBundle:Default:login.html.twig */
class __TwigTemplate_e6c761786914f4943de902b6e4999e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KarudevAppsBundle::login.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KarudevAppsBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"container\">
\t<section style=\"width : 500px;\" >
\t<div> 
      <form name=\"login\" method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_apps_enterprise_login_check"), "html", null, true);
        echo "\" class=\"form-signin\">
     
\t     \t<figure class=\"logo\"></figure>
\t        <h3>Accédez à votre compte</h3>
\t        <input type=\"text\" placeholder=\"Identifiant\" class=\"input-block-level\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\">
\t        <input  id=\"password\"  name=\"_password\" type=\"password\" placeholder=\"Mot de passe\" class=\"input-block-level\">
\t        <label class=\"checkbox\">
\t          <input type=\"checkbox\" value=\"1\"> Se souvenir de moi
\t        </label>
\t        <button type=\"submit\" class=\"btn btn-large btn\">Se connecter</button>
      
     
      </form>
    </div>
 \t<div  style=\"margin-top:20px\" class=\"form-signin\">
     <center> <h3>Vous êtes freelance ou entrepreneur ?</h3></center>
      <button type=\"submit\" class=\"btn btn-large btn\">Créer votre compte maintenant !</button>
     </div>
     </section>
     <section>
     <article >
     <p><h2>Qu'est ce que Karudev Enterprise ?</h2></p>
    <p>Karudev Enterprise est un projet CRM destiné au Freelance et entrepreneur.</p>
    <p>La plateforme est composé de modules permettants de bien gérer son activité en tant que chef d'entreprise.</p> 
    </article>
    </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  36 => 6,  31 => 3,  28 => 2,);
    }
}
