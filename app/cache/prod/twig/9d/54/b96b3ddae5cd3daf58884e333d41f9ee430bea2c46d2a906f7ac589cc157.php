<?php

/* BazingaExposeTranslationBundle::exposeTranslation.json.twig */
class __TwigTemplate_9d54b96b3ddae5cd3daf58884e333d41f9ee430bea2c46d2a906f7ac589cc157 extends Twig_Template
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
        echo "{
  \"locale\": \"";
        // line 2
        if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
        echo twig_escape_filter($this->env, $_locale_, "html", null, true);
        echo "\",
  \"defaultDomains\": [";
        // line 3
        if (isset($context["defaultDomains"])) { $_defaultDomains_ = $context["defaultDomains"]; } else { $_defaultDomains_ = null; }
        if ($_defaultDomains_) {
            echo "\"";
            if (isset($context["defaultDomains"])) { $_defaultDomains_ = $context["defaultDomains"]; } else { $_defaultDomains_ = null; }
            echo twig_join_filter($_defaultDomains_, "\", \"");
            echo "\"";
        }
        echo "],
  \"messages\": {
";
        // line 5
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_messages_);
        foreach ($context['_seq'] as $context["domain"] => $context["translations"]) {
            // line 6
            if (isset($context["translations"])) { $_translations_ = $context["translations"]; } else { $_translations_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_translations_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 7
                echo "    ";
                if (isset($context["domain"])) { $_domain_ = $context["domain"]; } else { $_domain_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_jsonencode_filter((($_domain_ . ":") . $_key_));
                echo ": ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_jsonencode_filter($_message_);
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo (($this->getAttribute($_loop_, "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['translations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  }
}
";
    }

    public function getTemplateName()
    {
        return "BazingaExposeTranslationBundle::exposeTranslation.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  64 => 22,  82 => 29,  79 => 28,  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 164,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 130,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 30,  61 => 7,  73 => 52,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 38,  42 => 8,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 46,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 30,  72 => 26,  48 => 23,  35 => 4,  29 => 3,  69 => 14,  54 => 18,  51 => 17,  31 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 119,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 76,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 65,  147 => 59,  127 => 60,  112 => 48,  96 => 25,  76 => 17,  71 => 23,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 27,  53 => 28,  55 => 21,  39 => 7,  50 => 42,  38 => 5,  98 => 45,  78 => 26,  44 => 8,  36 => 4,  60 => 14,  57 => 19,  43 => 6,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 23,  47 => 15,  28 => 3,  25 => 3,  110 => 45,  100 => 27,  89 => 10,  80 => 41,  65 => 23,  63 => 13,  58 => 20,  46 => 12,  40 => 8,  34 => 4,  26 => 2,  22 => 2,  24 => 4,  32 => 3,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 57,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 28,  66 => 26,  62 => 22,  59 => 21,  56 => 20,  52 => 12,  49 => 11,  45 => 6,  41 => 7,  37 => 8,  33 => 3,  30 => 1,);
    }
}
