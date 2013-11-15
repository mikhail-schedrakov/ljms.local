<?php

/* UmbrellaFrontendBundle:Pages:about.html.twig */
class __TwigTemplate_876cfc3bfa9eadd6c458ade8529e7a49eaea1ec90a4e8084248b5590ed6fc6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::frontendLayout.html.twig");

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        // line 4
        echo "
     <h1>About Us</h1>
     <p>Lockport Junior Miss Softball (LJMS) was created in 1972 and has become one of the strongest, fastest growing softball organizations in the Chicago land area.</p>
     <p>LJMS is a structured organization offering balanced age divisions for girls 5 to 18 years of age.</p>
     <p>Unlike other organizations, LJMS is a not for profit sole entity, which means all&nbsp;monies are redirected back into the LJMS organization. All participants&nbsp; receive a complete uniform along with many opportunities to participate in league activities.</p>
     <p>LJMS believes in a strong family involvement and encourages fun and fundamentals.<br />Safe play and a safe environment are also focus points of LJMS. All Coach/Managers attend instructional clinics to assist them with their teachings. Each team is staffed with at least one female leader.</p>
     <p>All LJMS adult participants (Coaches, Managers, Umpires, and Executive Board Members) <br />are screened through a criminal history check to ensure the safest atmosphere&nbsp;for the girls.<br />LJMS is also proud to provide a higher level of competition with the creation of a full time travel team.</p>
     <p>The \"Lockport Pride\" is currently offered at the 10U,11U,12U and 13U&nbsp;levels.<br /><br />LJMS encourages you to be part of this historic organization and help build the future <br />of girls softball.</p>
     <p>&nbsp;</p>
     <p><a href=\"\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/pdf.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"32\" height=\"32\" />Playoff_Brackets.pdf</a></p>
     <p>
          <a href=\"\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/pdf.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"32\" height=\"32\" /></a>
          <a href=\"\">LJMSCONSTITUTION_2012.pdf</a>
     </p>
     <p class=\"pdf_link\">
          <a href=\"LJMScodeofEthics.pdf\" target=\"_blank\">LJMS Code of Ethics</a>
     </p>
     <p>&nbsp;</p>
     <div style=\"clear:both\">
     </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  48 => 7,  35 => 5,  29 => 3,  69 => 14,  54 => 14,  51 => 8,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 19,  55 => 15,  39 => 5,  50 => 7,  38 => 6,  98 => 40,  78 => 25,  44 => 9,  36 => 6,  60 => 21,  57 => 9,  43 => 7,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  88 => 6,  85 => 22,  77 => 12,  67 => 15,  47 => 15,  28 => 3,  25 => 3,  110 => 20,  100 => 27,  89 => 16,  80 => 41,  65 => 14,  63 => 13,  58 => 10,  46 => 12,  40 => 6,  34 => 5,  26 => 2,  22 => 2,  24 => 4,  32 => 4,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 9,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 8,  49 => 7,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
