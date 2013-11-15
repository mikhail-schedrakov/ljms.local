<?php

/* APYJsFormValidationBundle:Constraints:EmailValidator.js.twig */
class __TwigTemplate_28cbf49cfec813610aa963c51a44a3dd4624ce13fe471c954c215f30cfa979d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'checkmx_async_request' => array($this, 'block_checkmx_async_request'),
            'checkmx_handler' => array($this, 'block_checkmx_handler'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "function Email(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);
    var pattern = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})\$/;

    if ( pattern.test(value) ) {
        if (params && params.checkMX && field.nodeName) {
            //TODO This part is compartible only with jquery
            var cache, cacheindex = 'm' + value + '';
            cache = \$(field).data('_checkMXCache');
            if (!cache) cache = {};
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            ";
        // line 23
        $this->displayBlock('checkmx_async_request', $context, $blocks);
        // line 42
        echo "}
        return true;
    }

    return getComputeMessage(params.message);
}";
    }

    // line 23
    public function block_checkmx_async_request($context, array $blocks = array())
    {
        // line 24
        echo "\$.ajax({
                type: 'POST',
                url: '";
        // line 26
        echo $this->env->getExtension('routing')->getPath("apy_js_form_validation_checkmx", array("_format" => "json"));
        echo "',
                data: {address: value.replace(new RegExp(\"^.*@\"), \"\")},
                success: function(data, textStatus) {
                    ";
        // line 29
        $this->displayBlock('checkmx_handler', $context, $blocks);
        // line 38
        echo "},
                dataType: 'json'
            });
            ";
    }

    // line 29
    public function block_checkmx_handler($context, array $blocks = array())
    {
        // line 30
        echo "if (data.status && data.status == 'ok') {
                        cache[cacheindex] = data.result;
                        \$(field).data('_checkMXCache', cache);
                        if (!cache[cacheindex]) {
                            checkError(\$(field).attr('id'), Email, params);
                        }
                    }
                    ";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:EmailValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 164,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 130,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 27,  61 => 20,  73 => 52,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 38,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 46,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 30,  72 => 29,  48 => 23,  35 => 5,  29 => 3,  69 => 14,  54 => 18,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 119,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 76,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 65,  147 => 59,  127 => 60,  112 => 48,  96 => 25,  76 => 17,  71 => 23,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 21,  39 => 5,  50 => 42,  38 => 5,  98 => 45,  78 => 26,  44 => 9,  36 => 4,  60 => 14,  57 => 19,  43 => 11,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 22,  47 => 15,  28 => 3,  25 => 3,  110 => 45,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 23,  46 => 12,  40 => 5,  34 => 11,  26 => 2,  22 => 18,  24 => 4,  32 => 3,  27 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 57,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 35,  66 => 26,  62 => 24,  59 => 23,  56 => 12,  52 => 8,  49 => 17,  45 => 6,  41 => 10,  37 => 8,  33 => 4,  30 => 1,);
    }
}
