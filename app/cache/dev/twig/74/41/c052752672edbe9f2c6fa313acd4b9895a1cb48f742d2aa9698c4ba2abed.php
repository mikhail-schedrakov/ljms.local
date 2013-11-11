<?php

/* APYJsFormValidationBundle:Constraints:UniqueEntityValidator.js.twig */
class __TwigTemplate_7441c052752672edbe9f2c6fa313acd4b9895a1cb48f742d2aa9698c4ba2abed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'check_uniquity_async_request' => array($this, 'block_check_uniquity_async_request'),
            'check_uniquity_handler' => array($this, 'block_check_uniquity_handler'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * @author   Vitaliy Demidov   <zend@i.ua>
 */
function UniqueEntity(field, params)
{
    var value = field && field.nodeName ? ";
        // line 6
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;
    var cache, url, cacheindex = 'm' + value + '';
    if (params && params.fields && field.nodeName) {
        //TODO This part is compartible only with jquery
        cache = \$(field).data('_uniqueEntityCache');
        if (!cache) cache = {};
        if (cache[cacheindex] != undefined) {
            if (cache[cacheindex] === false) {
                return getComputeMessage(params.message);
            } else return true;
        }
";
        // line 17
        $this->displayBlock('check_uniquity_async_request', $context, $blocks);
        // line 41
        echo "    }
    return true;
}
";
    }

    // line 17
    public function block_check_uniquity_async_request($context, array $blocks = array())
    {
        // line 18
        echo "        \$.ajax({
            type: 'POST',
            url: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apy_js_form_validation_unique_entity", array("_format" => "json", "_locale" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"))), "html", null, true);
        echo "',
            data: {
                'entity': params.entity,
                'target': params.fields,
                'value': value,
                'ignore': params.identifier_field_id ? self.id(params.identifier_field_id).value : ''
            },
            success: function(data, textStatus) {
";
        // line 28
        $this->displayBlock('check_uniquity_handler', $context, $blocks);
        // line 37
        echo "            },
            dataType: 'json'
       });
";
    }

    // line 28
    public function block_check_uniquity_handler($context, array $blocks = array())
    {
        // line 29
        echo "                if (data.status && data.status == 'ok') {
                    cache[cacheindex] = data.isUnique;
                    \$(field).data('_uniqueEntityCache', cache);
                    if (!cache[cacheindex]) {
                        checkError(\$(field).attr('id'), UniqueEntity, params);
                    }
                }
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:UniqueEntityValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 155,  338 => 153,  336 => 152,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 97,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  137 => 58,  134 => 57,  65 => 22,  58 => 20,  165 => 64,  161 => 93,  155 => 61,  146 => 72,  127 => 61,  124 => 59,  100 => 45,  77 => 30,  150 => 87,  126 => 55,  202 => 59,  200 => 58,  197 => 57,  192 => 95,  181 => 13,  167 => 105,  148 => 86,  104 => 47,  97 => 51,  84 => 30,  70 => 35,  53 => 11,  34 => 11,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 106,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 51,  128 => 49,  107 => 48,  61 => 13,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 70,  135 => 53,  119 => 56,  102 => 32,  71 => 37,  67 => 24,  63 => 15,  59 => 23,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 62,  156 => 66,  151 => 63,  142 => 59,  138 => 67,  136 => 59,  121 => 46,  117 => 56,  105 => 45,  91 => 47,  62 => 24,  49 => 13,  38 => 5,  93 => 41,  88 => 6,  78 => 28,  94 => 38,  89 => 39,  85 => 25,  75 => 26,  68 => 14,  56 => 19,  27 => 1,  26 => 3,  87 => 25,  46 => 17,  44 => 41,  31 => 4,  25 => 3,  21 => 1,  28 => 6,  24 => 4,  19 => 1,  79 => 27,  72 => 29,  69 => 28,  47 => 9,  40 => 16,  37 => 5,  22 => 18,  246 => 90,  157 => 56,  145 => 86,  139 => 45,  131 => 63,  123 => 67,  120 => 40,  115 => 64,  111 => 37,  108 => 50,  101 => 54,  98 => 42,  96 => 31,  83 => 25,  74 => 38,  66 => 26,  55 => 12,  52 => 14,  50 => 42,  43 => 11,  41 => 10,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 76,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 83,  133 => 55,  130 => 56,  125 => 44,  122 => 54,  116 => 51,  112 => 52,  109 => 60,  106 => 36,  103 => 32,  99 => 31,  95 => 40,  92 => 37,  86 => 28,  82 => 22,  80 => 41,  73 => 52,  64 => 14,  60 => 20,  57 => 25,  54 => 18,  51 => 17,  48 => 23,  45 => 17,  42 => 17,  39 => 9,  36 => 14,  33 => 7,  30 => 1,);
    }
}
