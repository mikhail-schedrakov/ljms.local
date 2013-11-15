<?php

/* UmbrellaAdminBundle::adminLayout.html.twig */
class __TwigTemplate_1cc50c374625808e8ccf29a0184ae391d103e3c8cf8c0e3b2df6967cbbd43ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>LOCKPORT JUNIOR MISS - Adminisrator Area</title>
        
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/css/adminStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body class=\"main\">
        <div class=\"container\">
            
            ";
        // line 15
        echo "            <div id=\"header\" class=\"no_print\">
                <div id=\"logo\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\" style=\"margin-left:0px;\" />
                    </a>
                </div>
                <div id=\"head_top\"></div>
                <div id=\"logout_button\">
                    <a class=\"link\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\">My Profile</a> | 
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"> Log out</a>
                </div>
                <div id=\"head_middle\">
                    <div id=\"top_links\">
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                </div>
                <div id=\"head_bottom\"></div>
            </div>
            ";
        // line 37
        echo "
            ";
        // line 39
        echo "            <div class=\"nav no_print\">
                <div class=\"wrapper\" >
                    <!-- for align center needs specify the width -->
                    <ul  >
                        <li class=\"first\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("system_users");
        echo "\"  class=\"active\">System users</a></li>                    
                    </ul>
                </div>
            </div>
            ";
        // line 48
        echo "
            ";
        // line 50
        echo "            <div id=\"content\">
                ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </div>
            ";
        // line 55
        echo "
            ";
        // line 57
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div class=\"copyright\">Copyright 2008 Lockport Junior Miss Softball</div>
                </div>
            </div>
            ";
        // line 69
        echo "
        </div>
    </body>
</html>";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "                ";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle::adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  128 => 62,  86 => 31,  64 => 22,  82 => 29,  79 => 28,  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 164,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 130,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 30,  61 => 7,  73 => 30,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 38,  42 => 17,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 46,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 30,  72 => 26,  48 => 23,  35 => 3,  29 => 8,  69 => 29,  54 => 23,  51 => 17,  31 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 119,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 76,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 52,  147 => 51,  127 => 60,  112 => 55,  96 => 25,  76 => 17,  71 => 23,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 60,  105 => 31,  75 => 27,  53 => 28,  55 => 21,  39 => 7,  50 => 42,  38 => 15,  98 => 45,  78 => 26,  44 => 8,  36 => 4,  60 => 14,  57 => 19,  43 => 6,  114 => 22,  109 => 53,  106 => 49,  101 => 48,  88 => 39,  85 => 37,  77 => 31,  67 => 23,  47 => 15,  28 => 3,  25 => 2,  110 => 45,  100 => 27,  89 => 10,  80 => 41,  65 => 28,  63 => 13,  58 => 24,  46 => 18,  40 => 4,  34 => 4,  26 => 2,  22 => 2,  24 => 4,  32 => 3,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 69,  137 => 37,  129 => 36,  124 => 61,  121 => 24,  118 => 36,  115 => 57,  111 => 32,  107 => 51,  104 => 50,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 28,  66 => 26,  62 => 22,  59 => 21,  56 => 20,  52 => 12,  49 => 11,  45 => 5,  41 => 7,  37 => 8,  33 => 3,  30 => 1,);
    }
}
