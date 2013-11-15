<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_3b4442248270ccba1ad7c38eaf3a4aa42c8107d21708ec6dc550ece91cb3ef6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  339 => 316,  295 => 275,  118 => 49,  386 => 159,  378 => 157,  358 => 151,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  293 => 120,  290 => 119,  276 => 111,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  175 => 65,  152 => 46,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  188 => 90,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  361 => 152,  348 => 140,  342 => 317,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  194 => 68,  191 => 67,  178 => 66,  172 => 64,  353 => 149,  351 => 141,  344 => 318,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 122,  297 => 276,  274 => 110,  263 => 95,  255 => 101,  185 => 66,  113 => 48,  100 => 39,  76 => 28,  388 => 274,  382 => 271,  377 => 269,  373 => 156,  363 => 153,  323 => 128,  315 => 131,  296 => 121,  281 => 114,  265 => 105,  251 => 176,  239 => 167,  231 => 83,  161 => 63,  153 => 77,  90 => 37,  124 => 73,  77 => 25,  81 => 23,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 195,  434 => 104,  429 => 188,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 160,  376 => 37,  371 => 156,  367 => 155,  364 => 164,  357 => 123,  345 => 147,  338 => 135,  336 => 241,  333 => 151,  321 => 135,  317 => 147,  300 => 121,  291 => 102,  288 => 118,  286 => 112,  280 => 126,  277 => 125,  260 => 121,  256 => 96,  236 => 103,  223 => 101,  212 => 78,  195 => 96,  190 => 76,  184 => 63,  180 => 71,  174 => 65,  165 => 83,  155 => 47,  137 => 69,  65 => 11,  58 => 18,  134 => 54,  129 => 80,  127 => 35,  110 => 22,  150 => 55,  126 => 89,  202 => 77,  200 => 72,  197 => 69,  192 => 135,  181 => 65,  167 => 105,  148 => 88,  104 => 32,  97 => 41,  84 => 27,  70 => 26,  53 => 15,  34 => 5,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 164,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 146,  312 => 130,  309 => 129,  305 => 219,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 122,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 63,  128 => 64,  107 => 52,  61 => 23,  273 => 124,  269 => 107,  254 => 92,  243 => 92,  240 => 116,  238 => 104,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 155,  219 => 100,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  201 => 92,  196 => 92,  183 => 82,  171 => 61,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 71,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 24,  49 => 14,  38 => 6,  93 => 38,  88 => 32,  78 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  27 => 7,  26 => 3,  87 => 32,  46 => 14,  44 => 11,  31 => 4,  25 => 35,  21 => 2,  28 => 3,  24 => 2,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 80,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 57,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 43,  144 => 42,  141 => 73,  133 => 67,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 27,  106 => 51,  103 => 52,  99 => 23,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 29,  73 => 16,  64 => 24,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 8,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
