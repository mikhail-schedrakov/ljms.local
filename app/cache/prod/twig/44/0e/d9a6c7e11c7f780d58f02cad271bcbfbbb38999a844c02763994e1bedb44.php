<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.mootools.twig */
class __TwigTemplate_440ed9a6c7e11c7f780d58f02cad271bcbfbbb38999a844c02763994e1bedb44 extends Twig_Template
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
        echo "//u.error_list doesn't work
\$(field).getSiblings('.error_list').each(function(el) { el.destroy(); });
";
    }

    // line 8
    public function block_addError($context, array $blocks = array())
    {
        // line 9
        echo "// Add errors block
field = \$(field);
if (field.getSiblings('.error_list').length == 0)  {
        var ulErrors  = new Element('ul', { class : 'error_list' });
        ulErrors.inject(field, 'before');
}

// Add error
field.getPrevious('ul').adopt(new Element('li', { html : errorMessage }));
";
    }

    // line 20
    public function block_onEvent($context, array $blocks = array())
    {
        // line 21
        echo "\$(field).addEvent(eventType, handler);
";
    }

    // line 24
    public function block_onReady($context, array $blocks = array())
    {
        // line 25
        echo "window.addEvent('domready', jsfv['";
        if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
        echo twig_escape_filter($this->env, $_formName_, "html", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.mootools.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  82 => 29,  79 => 28,  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 164,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 130,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 27,  61 => 20,  73 => 52,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 38,  42 => 8,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 46,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 30,  72 => 27,  48 => 23,  35 => 4,  29 => 3,  69 => 14,  54 => 18,  51 => 17,  31 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 119,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 76,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 65,  147 => 59,  127 => 60,  112 => 48,  96 => 25,  76 => 17,  71 => 23,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 28,  53 => 28,  55 => 21,  39 => 7,  50 => 42,  38 => 5,  98 => 45,  78 => 26,  44 => 9,  36 => 15,  60 => 14,  57 => 19,  43 => 9,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 25,  47 => 15,  28 => 3,  25 => 3,  110 => 45,  100 => 27,  89 => 37,  80 => 41,  65 => 23,  63 => 13,  58 => 20,  46 => 12,  40 => 8,  34 => 4,  26 => 2,  22 => 18,  24 => 4,  32 => 3,  27 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 57,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 28,  66 => 26,  62 => 22,  59 => 21,  56 => 20,  52 => 13,  49 => 12,  45 => 6,  41 => 8,  37 => 8,  33 => 4,  30 => 1,);
    }
}
