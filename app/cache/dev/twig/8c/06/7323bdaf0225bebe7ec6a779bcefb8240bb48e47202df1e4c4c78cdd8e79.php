<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_8c067323bdaf0225bebe7ec6a779bcefb8240bb48e47202df1e4c4c78cdd8e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  388 => 274,  382 => 271,  377 => 269,  373 => 267,  363 => 259,  323 => 231,  315 => 226,  296 => 213,  281 => 200,  265 => 187,  251 => 176,  239 => 167,  231 => 162,  161 => 113,  153 => 79,  90 => 32,  124 => 73,  77 => 31,  81 => 29,  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 247,  338 => 153,  336 => 241,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 149,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  165 => 85,  155 => 61,  137 => 69,  65 => 18,  58 => 17,  134 => 95,  129 => 80,  127 => 28,  110 => 22,  150 => 52,  126 => 89,  202 => 59,  200 => 140,  197 => 57,  192 => 135,  181 => 13,  167 => 105,  148 => 88,  104 => 50,  97 => 51,  84 => 29,  70 => 35,  53 => 10,  34 => 7,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 254,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 219,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 198,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 63,  128 => 64,  107 => 52,  61 => 12,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 155,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 101,  135 => 53,  119 => 66,  102 => 17,  71 => 37,  67 => 17,  63 => 27,  59 => 25,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 62,  156 => 66,  151 => 63,  142 => 71,  138 => 54,  136 => 59,  121 => 46,  117 => 19,  105 => 18,  91 => 43,  62 => 17,  49 => 13,  38 => 10,  93 => 28,  88 => 31,  78 => 26,  94 => 34,  89 => 37,  85 => 39,  75 => 34,  68 => 32,  56 => 11,  27 => 1,  26 => 9,  87 => 43,  46 => 12,  44 => 8,  31 => 4,  25 => 35,  21 => 1,  28 => 3,  24 => 2,  19 => 1,  79 => 36,  72 => 26,  69 => 30,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 80,  145 => 86,  139 => 45,  131 => 52,  123 => 61,  120 => 20,  115 => 57,  111 => 54,  108 => 19,  101 => 48,  98 => 43,  96 => 31,  83 => 25,  74 => 21,  66 => 26,  55 => 15,  52 => 14,  50 => 42,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 128,  176 => 12,  173 => 122,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 51,  144 => 61,  141 => 83,  133 => 67,  130 => 56,  125 => 65,  122 => 63,  116 => 51,  112 => 55,  109 => 50,  106 => 54,  103 => 52,  99 => 43,  95 => 45,  92 => 37,  86 => 28,  82 => 28,  80 => 10,  73 => 16,  64 => 13,  60 => 20,  57 => 13,  54 => 12,  51 => 17,  48 => 23,  45 => 10,  42 => 17,  39 => 6,  36 => 4,  33 => 4,  30 => 3,);
    }
}
