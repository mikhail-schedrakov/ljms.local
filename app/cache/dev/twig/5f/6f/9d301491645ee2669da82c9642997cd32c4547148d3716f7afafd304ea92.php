<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_5f6f9d301491645ee2669da82c9642997cd32c4547148d3716f7afafd304ea92 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  353 => 121,  351 => 120,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 106,  297 => 104,  274 => 97,  263 => 95,  255 => 93,  185 => 74,  113 => 40,  100 => 36,  76 => 28,  388 => 274,  382 => 271,  377 => 269,  373 => 267,  363 => 126,  323 => 231,  315 => 110,  296 => 213,  281 => 200,  265 => 96,  251 => 176,  239 => 167,  231 => 83,  161 => 63,  153 => 79,  90 => 32,  124 => 73,  77 => 25,  81 => 29,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 123,  345 => 247,  338 => 153,  336 => 241,  333 => 151,  321 => 112,  317 => 147,  300 => 105,  291 => 102,  288 => 101,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 78,  195 => 96,  190 => 76,  184 => 88,  180 => 71,  174 => 65,  165 => 85,  155 => 61,  137 => 69,  65 => 22,  58 => 14,  134 => 95,  129 => 80,  127 => 60,  110 => 22,  150 => 52,  126 => 89,  202 => 77,  200 => 140,  197 => 57,  192 => 135,  181 => 13,  167 => 105,  148 => 88,  104 => 32,  97 => 41,  84 => 29,  70 => 35,  53 => 17,  34 => 5,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 254,  341 => 118,  337 => 103,  322 => 101,  314 => 146,  312 => 109,  309 => 108,  305 => 219,  298 => 91,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 122,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 63,  128 => 64,  107 => 52,  61 => 15,  273 => 124,  269 => 94,  254 => 92,  243 => 92,  240 => 116,  238 => 104,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 155,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 17,  71 => 37,  67 => 17,  63 => 19,  59 => 16,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 79,  156 => 62,  151 => 63,  142 => 71,  138 => 54,  136 => 48,  121 => 46,  117 => 39,  105 => 18,  91 => 34,  62 => 21,  49 => 11,  38 => 7,  93 => 28,  88 => 25,  78 => 26,  94 => 34,  89 => 37,  85 => 24,  75 => 19,  68 => 32,  56 => 11,  27 => 3,  26 => 9,  87 => 33,  46 => 10,  44 => 9,  31 => 4,  25 => 35,  21 => 1,  28 => 3,  24 => 2,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 80,  145 => 52,  139 => 49,  131 => 45,  123 => 59,  120 => 20,  115 => 57,  111 => 54,  108 => 19,  101 => 31,  98 => 30,  96 => 35,  83 => 25,  74 => 27,  66 => 26,  55 => 13,  52 => 12,  50 => 16,  43 => 7,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 128,  176 => 12,  173 => 122,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 51,  144 => 61,  141 => 83,  133 => 67,  130 => 56,  125 => 42,  122 => 41,  116 => 51,  112 => 36,  109 => 35,  106 => 45,  103 => 52,  99 => 43,  95 => 45,  92 => 27,  86 => 28,  82 => 28,  80 => 30,  73 => 23,  64 => 13,  60 => 20,  57 => 19,  54 => 12,  51 => 13,  48 => 9,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 3,);
    }
}
