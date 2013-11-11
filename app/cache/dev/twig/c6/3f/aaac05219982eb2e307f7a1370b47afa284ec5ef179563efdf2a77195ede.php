<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_c63faaac05219982eb2e307f7a1370b47afa284ec5ef179563efdf2a77195ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ($this->getContext($context, "is_writable")) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ($this->getContext($context, "is_writable")) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ($this->getContext($context, "welcome_url")) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  524 => 90,  512 => 84,  509 => 83,  501 => 80,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  350 => 26,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  271 => 374,  266 => 366,  250 => 341,  245 => 335,  225 => 298,  215 => 280,  186 => 239,  129 => 148,  114 => 111,  356 => 328,  339 => 316,  295 => 275,  118 => 49,  386 => 159,  378 => 157,  358 => 151,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  281 => 388,  276 => 381,  259 => 103,  253 => 342,  232 => 88,  222 => 297,  210 => 270,  175 => 65,  152 => 46,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 138,  690 => 467,  686 => 466,  682 => 465,  678 => 133,  675 => 132,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 93,  530 => 410,  527 => 91,  525 => 408,  520 => 406,  515 => 85,  244 => 136,  188 => 90,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  422 => 184,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 23,  335 => 21,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  248 => 336,  233 => 304,  226 => 84,  216 => 79,  213 => 78,  207 => 269,  194 => 248,  191 => 246,  178 => 66,  172 => 64,  153 => 77,  363 => 32,  353 => 149,  351 => 141,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  318 => 111,  315 => 131,  306 => 107,  303 => 122,  297 => 276,  274 => 110,  265 => 105,  263 => 365,  255 => 353,  231 => 83,  185 => 66,  113 => 48,  110 => 38,  90 => 27,  76 => 31,  81 => 40,  23 => 3,  503 => 81,  496 => 79,  493 => 78,  487 => 125,  477 => 112,  456 => 68,  452 => 109,  448 => 108,  443 => 107,  439 => 195,  434 => 104,  429 => 188,  426 => 58,  412 => 77,  399 => 71,  392 => 46,  389 => 160,  376 => 37,  371 => 35,  367 => 155,  364 => 164,  357 => 123,  345 => 147,  338 => 135,  336 => 152,  333 => 151,  321 => 135,  317 => 147,  300 => 121,  291 => 102,  288 => 4,  286 => 112,  280 => 126,  277 => 125,  260 => 363,  256 => 96,  236 => 103,  223 => 101,  212 => 279,  195 => 96,  190 => 76,  184 => 233,  180 => 71,  174 => 217,  137 => 58,  134 => 161,  65 => 17,  58 => 15,  165 => 83,  161 => 202,  155 => 47,  146 => 181,  127 => 35,  124 => 132,  100 => 39,  77 => 25,  150 => 55,  126 => 147,  202 => 266,  200 => 72,  197 => 249,  192 => 95,  181 => 232,  167 => 105,  148 => 86,  104 => 90,  97 => 41,  84 => 41,  70 => 19,  53 => 11,  34 => 4,  20 => 1,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 164,  384 => 42,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 161,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 146,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 387,  268 => 373,  264 => 122,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 77,  219 => 100,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 13,  201 => 92,  196 => 92,  183 => 82,  171 => 216,  166 => 209,  163 => 53,  158 => 62,  156 => 195,  151 => 188,  142 => 59,  138 => 67,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  38 => 5,  93 => 28,  88 => 28,  78 => 24,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  27 => 7,  26 => 3,  87 => 26,  46 => 10,  44 => 8,  31 => 5,  25 => 35,  21 => 2,  28 => 3,  24 => 2,  19 => 1,  79 => 32,  72 => 18,  69 => 13,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 43,  144 => 176,  141 => 175,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 32,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 16,  64 => 17,  60 => 20,  57 => 20,  54 => 15,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}