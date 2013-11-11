<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_9e2e51a616fb1b8524f437f41cfc0ec510f7baa0c8783be67c60feb885b952a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  339 => 316,  295 => 275,  118 => 49,  386 => 159,  378 => 157,  358 => 151,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  175 => 65,  152 => 46,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  188 => 90,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 317,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  194 => 68,  191 => 67,  178 => 66,  172 => 64,  153 => 77,  363 => 153,  353 => 149,  351 => 141,  344 => 318,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  315 => 131,  306 => 107,  303 => 122,  297 => 276,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  185 => 66,  113 => 48,  110 => 38,  90 => 27,  76 => 28,  81 => 24,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 195,  434 => 104,  429 => 188,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 160,  376 => 37,  371 => 156,  367 => 155,  364 => 164,  357 => 123,  345 => 147,  338 => 135,  336 => 152,  333 => 151,  321 => 135,  317 => 147,  300 => 121,  291 => 102,  288 => 118,  286 => 112,  280 => 126,  277 => 125,  260 => 121,  256 => 96,  236 => 103,  223 => 101,  212 => 78,  195 => 96,  190 => 76,  184 => 63,  180 => 71,  174 => 65,  137 => 58,  134 => 54,  65 => 17,  58 => 14,  165 => 83,  161 => 63,  155 => 47,  146 => 72,  127 => 35,  124 => 59,  100 => 39,  77 => 25,  150 => 55,  126 => 55,  202 => 77,  200 => 72,  197 => 69,  192 => 95,  181 => 65,  167 => 105,  148 => 86,  104 => 31,  97 => 41,  84 => 25,  70 => 26,  53 => 11,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 164,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 146,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 122,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 23,  273 => 124,  269 => 107,  254 => 92,  243 => 92,  240 => 116,  238 => 104,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 100,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  201 => 92,  196 => 92,  183 => 82,  171 => 61,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 67,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 14,  49 => 12,  38 => 6,  93 => 28,  88 => 28,  78 => 24,  94 => 21,  89 => 35,  85 => 23,  75 => 24,  68 => 20,  56 => 12,  27 => 7,  26 => 3,  87 => 26,  46 => 10,  44 => 11,  31 => 5,  25 => 35,  21 => 2,  28 => 3,  24 => 2,  19 => 1,  79 => 29,  72 => 18,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 30,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 43,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 39,  109 => 27,  106 => 51,  103 => 32,  99 => 23,  95 => 34,  92 => 31,  86 => 28,  82 => 25,  80 => 29,  73 => 16,  64 => 19,  60 => 20,  57 => 20,  54 => 15,  51 => 37,  48 => 11,  45 => 8,  42 => 8,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
