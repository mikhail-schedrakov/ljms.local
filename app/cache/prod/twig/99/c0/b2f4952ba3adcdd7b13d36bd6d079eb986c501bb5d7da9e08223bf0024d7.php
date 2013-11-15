<?php

/* UmbrellaFrontendBundle::frontendLayout.html.twig */
class __TwigTemplate_99c0b2f4952ba3adcdd7b13d36bd6d079eb986c501bb5d7da9e08223bf0024d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'script' => array($this, 'block_script'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <title>LOCKPORT JUNIOR MISS</title>
        
        <meta charset=\"UTF-8\"/>
        <meta name=\"keywords\" content=\"\"/>
        <meta name=\"description\" content=\"\" />

        ";
        // line 11
        $this->displayBlock('link', $context, $blocks);
        // line 14
        echo "    
         
        ";
        // line 16
        $this->displayBlock('script', $context, $blocks);
        // line 19
        echo "
    </head>

    <body class=\"main\">

        ";
        // line 25
        echo "        <div class=\"container\">
            
            ";
        // line 28
        echo "            <div id=\"header\" class=\"no_print\">
                <div id=\"logo\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"images\"/></a>
                </div>
                <div id=\"head02\">
                    <div id=\"top_links\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div id=\"joinus\">
                    ";
        // line 41
        echo "                    </div>
                </div>
                <div id=\"head03\">
                </div>
            </div>
            ";
        // line 47
        echo "
            ";
        // line 49
        echo "            <div id=\"content\">
                ";
        // line 51
        echo "                <div id=\"left\" class=\"no_print\">
                </div>
                ";
        // line 54
        echo "
                ";
        // line 56
        echo "                <div id=\"content_area\">
                    ";
        // line 57
        $this->displayBlock('middle', $context, $blocks);
        // line 60
        echo "                </div>
                ";
        // line 62
        echo "
               ";
        // line 64
        echo "                <div id=\"right\">
                    <div id=\"announcement_box\">
                        <div id=\"announce_head\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>
                        <div id=\"announce_img\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce_img.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>
                        <div id=\"announce_txt\">
                            <blockquote>
                                <p><span style=\"color: #ff0000; font-size: x-small;\"><strong>Fall ball is complete thanks to all the coaches for a great fall season!!!!</strong></span></p>
                                <p><span style=\"color: #ff0000; font-size: small;\"><strong>&nbsp;</strong></span></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;Rain-out hot line.....in the event of questionable weather, we have established a call in hot-line that you can call to see if games are cancelled. <strong>This only applies to</strong> <strong>Hassert Park</strong> and can be called after 3pm on weekdays and 8am on weekends. The number is <strong>815-838-1183 ext 504</strong>.....please remember to dial the proper extension.&nbsp;</p>
                                <p><span style=\"font-size: small;\"><span style=\"font-size: large;\"><strong>&nbsp;<br /></strong></span></span></p>
                            </blockquote>
                        </div>
                            <p>&nbsp;</p>
                        <div style=\"clear:both\"></div>
                    </div>
                </div>
                ";
        // line 83
        echo "                <div style=\"clear:both\"></div>
            </div>
            ";
        // line 86
        echo "
            ";
        // line 88
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"\">Home</a>|
                        <a href=\"\">About</a>|
                        <a href=\"\">Sponsors</a>|
                        <a href=\"\">Contact</a>
                    </div>
                    <div class=\"copyright\">
                        Copyright 2008 Lockport Junior Miss Softball
                    </div>
                </div>
            </div>
            ";
        // line 102
        echo "
        </div>
        ";
        // line 105
        echo "
    </body>
</html>";
    }

    // line 11
    public function block_link($context, array $blocks = array())
    {
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 16
    public function block_script($context, array $blocks = array())
    {
        echo "    
            ";
        // line 17
        echo "            
        ";
    }

    // line 57
    public function block_middle($context, array $blocks = array())
    {
        // line 58
        echo "                        ";
        // line 59
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 86,  141 => 83,  123 => 67,  119 => 66,  94 => 49,  91 => 47,  74 => 36,  42 => 19,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 7,  35 => 5,  29 => 3,  69 => 14,  54 => 14,  51 => 8,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 62,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 61,  186 => 60,  181 => 13,  178 => 61,  173 => 11,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 28,  55 => 15,  39 => 5,  50 => 7,  38 => 6,  98 => 40,  78 => 37,  44 => 9,  36 => 14,  60 => 21,  57 => 30,  43 => 7,  114 => 22,  109 => 60,  106 => 20,  101 => 54,  88 => 6,  85 => 22,  77 => 12,  67 => 15,  47 => 15,  28 => 3,  25 => 3,  110 => 20,  100 => 27,  89 => 16,  80 => 41,  65 => 14,  63 => 13,  58 => 10,  46 => 12,  40 => 16,  34 => 11,  26 => 2,  22 => 1,  24 => 4,  32 => 4,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 63,  187 => 16,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 64,  111 => 32,  107 => 57,  104 => 56,  97 => 51,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 34,  62 => 11,  59 => 15,  56 => 12,  52 => 8,  49 => 25,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
