<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_629908282ad4a8c2496948fda3a2adc3cebcd9dea4faef1cab60a77dd949eacf extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  100 => 36,  76 => 28,  388 => 274,  382 => 271,  377 => 269,  373 => 267,  363 => 259,  323 => 231,  315 => 226,  296 => 213,  281 => 200,  265 => 187,  251 => 176,  239 => 167,  231 => 162,  161 => 113,  153 => 79,  90 => 32,  124 => 73,  77 => 25,  81 => 29,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 247,  338 => 153,  336 => 241,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 149,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  165 => 85,  155 => 61,  137 => 69,  65 => 22,  58 => 17,  134 => 95,  129 => 80,  127 => 60,  110 => 22,  150 => 52,  126 => 89,  202 => 59,  200 => 140,  197 => 57,  192 => 135,  181 => 13,  167 => 105,  148 => 88,  104 => 37,  97 => 41,  84 => 29,  70 => 35,  53 => 17,  34 => 7,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 254,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 219,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 198,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 63,  128 => 64,  107 => 52,  61 => 12,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 155,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 101,  135 => 62,  119 => 66,  102 => 17,  71 => 37,  67 => 17,  63 => 19,  59 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 79,  156 => 66,  151 => 63,  142 => 71,  138 => 54,  136 => 59,  121 => 46,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 10,  38 => 6,  93 => 28,  88 => 31,  78 => 26,  94 => 34,  89 => 37,  85 => 32,  75 => 34,  68 => 32,  56 => 11,  27 => 1,  26 => 9,  87 => 33,  46 => 8,  44 => 8,  31 => 3,  25 => 35,  21 => 1,  28 => 6,  24 => 2,  19 => 1,  79 => 36,  72 => 26,  69 => 30,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 90,  157 => 80,  145 => 86,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 57,  111 => 54,  108 => 19,  101 => 43,  98 => 43,  96 => 35,  83 => 25,  74 => 27,  66 => 26,  55 => 15,  52 => 10,  50 => 16,  43 => 7,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 128,  176 => 12,  173 => 122,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 51,  144 => 61,  141 => 83,  133 => 67,  130 => 56,  125 => 65,  122 => 63,  116 => 51,  112 => 55,  109 => 50,  106 => 45,  103 => 52,  99 => 43,  95 => 45,  92 => 37,  86 => 28,  82 => 28,  80 => 30,  73 => 23,  64 => 13,  60 => 20,  57 => 19,  54 => 12,  51 => 17,  48 => 9,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
