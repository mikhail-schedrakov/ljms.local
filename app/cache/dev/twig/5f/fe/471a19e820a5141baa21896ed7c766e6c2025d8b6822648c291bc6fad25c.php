<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig */
class __TwigTemplate_5ffe471a19e820a5141baa21896ed7c766e6c2025d8b6822648c291bc6fad25c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig");

        $this->blocks = array(
            'removeErrors' => array($this, 'block_removeErrors'),
            'addError' => array($this, 'block_addError'),
            'onEvent' => array($this, 'block_onEvent'),
            'onReady' => array($this, 'block_onReady'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_removeErrors($context, array $blocks = array())
    {
        // line 4
        echo "\$(field).adjacent('.error_list').each(function(el) { el.remove(); });
";
    }

    // line 7
    public function block_addError($context, array $blocks = array())
    {
        // line 8
        echo "// Add errors block
field = \$(field);
if (field.adjacent('ul.error_list').length == 0) {
    field.insert({ before: '<ul class=\"error_list\"></ul>' });
}

// Add error
field.previous('ul').insert('<li>'+errorMessage+'</li>');
";
    }

    // line 18
    public function block_onEvent($context, array $blocks = array())
    {
        // line 19
        echo "\$(field).observe(eventType, handler);
";
    }

    // line 22
    public function block_onReady($context, array $blocks = array())
    {
        // line 23
        echo "document.observe(\"dom:loaded\", jsfv['";
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 155,  338 => 153,  336 => 152,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 97,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  165 => 64,  155 => 61,  137 => 58,  65 => 23,  58 => 20,  134 => 57,  129 => 80,  127 => 79,  110 => 56,  150 => 65,  126 => 55,  202 => 59,  200 => 58,  197 => 57,  192 => 95,  181 => 13,  167 => 105,  148 => 88,  104 => 47,  97 => 51,  84 => 30,  70 => 35,  53 => 11,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 106,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 51,  128 => 49,  107 => 48,  61 => 13,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 66,  102 => 32,  71 => 37,  67 => 15,  63 => 27,  59 => 23,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 62,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 56,  105 => 45,  91 => 45,  62 => 22,  49 => 17,  38 => 5,  93 => 28,  88 => 6,  78 => 28,  94 => 38,  89 => 37,  85 => 25,  75 => 26,  68 => 32,  56 => 19,  27 => 1,  26 => 2,  87 => 43,  46 => 17,  44 => 41,  31 => 3,  25 => 3,  21 => 1,  28 => 3,  24 => 4,  19 => 1,  79 => 27,  72 => 29,  69 => 28,  47 => 9,  40 => 16,  37 => 5,  22 => 18,  246 => 90,  157 => 56,  145 => 86,  139 => 45,  131 => 52,  123 => 67,  120 => 40,  115 => 64,  111 => 37,  108 => 49,  101 => 54,  98 => 42,  96 => 31,  83 => 25,  74 => 38,  66 => 26,  55 => 12,  52 => 21,  50 => 42,  43 => 11,  41 => 10,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 76,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 83,  133 => 55,  130 => 56,  125 => 65,  122 => 63,  116 => 51,  112 => 50,  109 => 60,  106 => 54,  103 => 52,  99 => 31,  95 => 40,  92 => 37,  86 => 28,  82 => 22,  80 => 41,  73 => 52,  64 => 14,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  48 => 23,  45 => 17,  42 => 8,  39 => 7,  36 => 15,  33 => 4,  30 => 1,);
    }
}
