<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_88744ee56010d6f0efba459bf98b6534e61e596e743470735eac784dc9bf8406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  90 => 32,  76 => 17,  81 => 29,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 155,  338 => 153,  336 => 152,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 97,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  137 => 58,  134 => 57,  65 => 23,  58 => 17,  165 => 64,  161 => 93,  155 => 61,  146 => 72,  127 => 28,  124 => 59,  100 => 45,  77 => 30,  150 => 87,  126 => 55,  202 => 59,  200 => 58,  197 => 57,  192 => 95,  181 => 13,  167 => 105,  148 => 86,  104 => 47,  97 => 51,  84 => 29,  70 => 35,  53 => 10,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 106,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 51,  128 => 49,  107 => 48,  61 => 12,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 70,  135 => 53,  119 => 56,  102 => 17,  71 => 37,  67 => 23,  63 => 15,  59 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 62,  156 => 66,  151 => 63,  142 => 59,  138 => 67,  136 => 59,  121 => 46,  117 => 19,  105 => 18,  91 => 47,  62 => 22,  49 => 13,  38 => 5,  93 => 41,  88 => 31,  78 => 26,  94 => 34,  89 => 39,  85 => 31,  75 => 27,  68 => 14,  56 => 11,  27 => 1,  26 => 11,  87 => 25,  46 => 8,  44 => 8,  31 => 3,  25 => 35,  21 => 1,  28 => 3,  24 => 2,  19 => 1,  79 => 27,  72 => 26,  69 => 28,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 86,  139 => 45,  131 => 63,  123 => 67,  120 => 20,  115 => 64,  111 => 37,  108 => 19,  101 => 54,  98 => 42,  96 => 31,  83 => 25,  74 => 38,  66 => 26,  55 => 12,  52 => 14,  50 => 42,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 76,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 83,  133 => 55,  130 => 56,  125 => 44,  122 => 54,  116 => 51,  112 => 52,  109 => 60,  106 => 36,  103 => 32,  99 => 31,  95 => 40,  92 => 37,  86 => 28,  82 => 28,  80 => 10,  73 => 16,  64 => 13,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  48 => 23,  45 => 17,  42 => 8,  39 => 6,  36 => 4,  33 => 4,  30 => 3,);
    }
}
