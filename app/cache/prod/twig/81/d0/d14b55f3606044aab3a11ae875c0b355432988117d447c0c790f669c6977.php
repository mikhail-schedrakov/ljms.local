<?php

/* UmbrellaFrontendBundle:Pages:home.html.twig */
class __TwigTemplate_81d0d14b55f3606044aab3a11ae875c0b355432988117d447c0c790f669c6977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::frontendLayout.html.twig");

        $this->blocks = array(
            'script' => array($this, 'block_script'),
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
    public function block_script($context, array $blocks = array())
    {
        echo "    
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jshowoff.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frontend/jquery.jshowoff.home.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_middle($context, array $blocks = array())
    {
        // line 10
        echo "
    <div id=\"welcome\">
        <div id=\"welcome_head\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/welcome.gif"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"welcome_img\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/welcome_image.jpeg"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"welcome_txt\">
            <p>
            \t<span style=\"color: #000000;\">
            \t\tWelcome to the&nbsp;Lockport Junior Miss Softball web site. The LJMS Executive Board is excited to introduce the new league site. This site will have many new features that will enable us to keep you informed and updated on all league activities.
            \t</span>
            </p>
            <p>
            \t&nbsp;
            </p>
            <div class=\"more_link\">
            \t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">more about us</a>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div id=\"sponsors\">
        <div>
            <div id=\"sponsores_head\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sponsors.gif"), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <div class=\"more_link\">
            \t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">become one</a>
            </div>
            <div style=\"clear:both\">            \t
            </div>
        </div>

        ";
        // line 47
        echo "        <div id=\"slideshow_sponsors_logo\" style=\"height: 130px;\">
                <div style=\"text-align:center;\">
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/22.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/24.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/18.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                </div>
                <div style=\"text-align:center;\">
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/30.pjpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/31.pjpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/27.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                </div>
                <div style=\"text-align:center;\">
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/33.pjpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/34.gif"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/37.x-png"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                </div>
        </div>
        ";
        // line 65
        echo "
    </div>

    <div style=\"clear:both\">    \t
    </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 86,  141 => 83,  123 => 67,  119 => 66,  94 => 49,  91 => 47,  74 => 36,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 54,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 9,  35 => 5,  29 => 3,  69 => 14,  54 => 14,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 65,  147 => 51,  127 => 41,  112 => 50,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 61,  186 => 60,  181 => 13,  178 => 61,  173 => 11,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 59,  133 => 43,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 12,  39 => 5,  50 => 7,  38 => 5,  98 => 40,  78 => 37,  44 => 9,  36 => 14,  60 => 14,  57 => 30,  43 => 7,  114 => 22,  109 => 60,  106 => 20,  101 => 54,  88 => 6,  85 => 22,  77 => 12,  67 => 15,  47 => 15,  28 => 3,  25 => 3,  110 => 20,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 10,  46 => 12,  40 => 16,  34 => 4,  26 => 2,  22 => 1,  24 => 4,  32 => 4,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 63,  187 => 16,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 60,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 64,  111 => 32,  107 => 57,  104 => 47,  97 => 51,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 34,  62 => 11,  59 => 15,  56 => 12,  52 => 8,  49 => 25,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
