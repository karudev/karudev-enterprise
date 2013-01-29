<?php

/* KarudevAppsBundle:Contrat:show.html.twig */
class __TwigTemplate_0cb7afdccbdf156607e3bedfe21eb358 extends Twig_Template
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
\t    \t\t<th>Type de contact</th>
\t    \t\t<th>Client</th>
\t    \t\t<th>Date de début</th>
\t    \t\t<th>Durée</th>
\t    \t\t<th>Horaires</th>
\t    \t\t<th>Prix</th>
\t    \t\t<th></th>
\t    \t</tr>
\t    </thead>
\t    <tbody>
\t    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contrats"));
        foreach ($context['_seq'] as $context["key"] => $context["contrat"]) {
            // line 16
            echo "\t    \t<tr>
\t    \t\t<td>#";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "id"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "typeContrat"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "idOrganisation"), "nom"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateDebut"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "duree"), "html", null, true);
            echo " jours</td>
\t    \t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "horaires"), "html", null, true);
            echo "</td>
\t    \t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "prixHt"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "unitePrix"), "html", null, true);
            echo "</td>
\t    \t\t<td>
                            <img class=\"download\" id=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "id"), "html", null, true);
            echo "\" title=\"Télécharger le contrat au format word\"  style=\"cursor:pointer\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/word.png"), "html", null, true);
            echo "\" />
                            <img title=\"Voir\"  style=\"cursor:pointer\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/show.png"), "html", null, true);
            echo "\" />
                            <img title=\"Supprimer\"  style=\"cursor:pointer\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/karudevapps/images/divers/delete.png"), "html", null, true);
            echo "\" />
                        </td>
\t    \t</tr>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t
\t    </tbody>
    </table>

<script>
// EDITION
\$(\".download\").click(function() {
\t
\twindow.open(\"./contrat/download/\"+\$(this).attr('id')+\"\",'',\"menubar=no, status=no, scrollbars=no, menubar=no, width=0, height=0\")
\t
\treturn false;
\t
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "KarudevAppsBundle:Contrat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  73 => 25,  50 => 19,  46 => 18,  42 => 17,  39 => 16,  35 => 15,  19 => 1,  1176 => 331,  1170 => 330,  1164 => 329,  1158 => 328,  1152 => 327,  1146 => 326,  1140 => 325,  1134 => 324,  1128 => 323,  1112 => 317,  1105 => 316,  1103 => 315,  1100 => 314,  1077 => 310,  1052 => 309,  1050 => 308,  1047 => 307,  1035 => 302,  1030 => 301,  1028 => 300,  1025 => 299,  1016 => 293,  1010 => 291,  1007 => 290,  1002 => 289,  1000 => 288,  997 => 287,  990 => 282,  983 => 280,  980 => 276,  976 => 275,  973 => 274,  970 => 273,  968 => 272,  965 => 271,  957 => 267,  955 => 266,  952 => 265,  945 => 260,  942 => 259,  934 => 254,  930 => 253,  926 => 252,  923 => 251,  921 => 250,  918 => 249,  910 => 245,  908 => 241,  906 => 240,  903 => 239,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  855 => 224,  853 => 223,  850 => 222,  842 => 216,  839 => 215,  837 => 214,  834 => 213,  826 => 209,  823 => 208,  821 => 207,  818 => 206,  810 => 202,  807 => 201,  805 => 200,  802 => 199,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  778 => 188,  775 => 187,  773 => 186,  770 => 185,  762 => 181,  759 => 180,  757 => 179,  754 => 178,  746 => 174,  744 => 173,  741 => 172,  733 => 168,  730 => 167,  728 => 166,  725 => 165,  717 => 161,  714 => 160,  712 => 159,  710 => 158,  707 => 157,  700 => 152,  692 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  606 => 116,  604 => 115,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  523 => 93,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  278 => 8,  272 => 6,  269 => 5,  267 => 4,  264 => 3,  260 => 331,  258 => 330,  256 => 329,  254 => 328,  252 => 327,  248 => 325,  246 => 324,  244 => 323,  241 => 322,  236 => 314,  233 => 313,  231 => 307,  228 => 306,  226 => 299,  223 => 298,  220 => 296,  218 => 287,  215 => 286,  213 => 271,  210 => 270,  205 => 264,  202 => 262,  200 => 259,  197 => 258,  195 => 249,  192 => 248,  190 => 239,  184 => 236,  182 => 222,  179 => 221,  176 => 219,  174 => 213,  171 => 212,  169 => 206,  166 => 205,  161 => 198,  156 => 191,  154 => 185,  151 => 184,  149 => 178,  146 => 177,  144 => 172,  141 => 171,  139 => 165,  136 => 164,  134 => 157,  131 => 156,  129 => 145,  126 => 144,  124 => 129,  121 => 128,  119 => 114,  116 => 113,  114 => 108,  109 => 102,  106 => 101,  101 => 86,  99 => 68,  94 => 57,  91 => 56,  89 => 47,  84 => 41,  81 => 40,  79 => 26,  74 => 20,  71 => 19,  64 => 3,  61 => 2,  250 => 326,  247 => 115,  238 => 320,  235 => 102,  232 => 101,  224 => 92,  221 => 91,  208 => 265,  204 => 70,  196 => 67,  191 => 65,  187 => 238,  183 => 63,  178 => 60,  175 => 59,  170 => 28,  164 => 199,  159 => 192,  157 => 115,  137 => 97,  135 => 91,  122 => 80,  120 => 59,  96 => 67,  86 => 46,  82 => 30,  77 => 29,  75 => 28,  70 => 26,  66 => 23,  58 => 21,  54 => 20,  44 => 15,  40 => 14,  25 => 1,  152 => 113,  145 => 108,  143 => 101,  115 => 54,  111 => 107,  104 => 87,  97 => 45,  90 => 41,  83 => 27,  76 => 31,  69 => 13,  62 => 22,  55 => 21,  48 => 17,  32 => 3,  29 => 2,);
    }
}
