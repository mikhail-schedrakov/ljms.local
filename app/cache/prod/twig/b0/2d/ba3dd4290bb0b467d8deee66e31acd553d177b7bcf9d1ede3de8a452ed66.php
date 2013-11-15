<?php

/* UmbrellaAdminBundle:Pages:profile.html.twig */
class __TwigTemplate_b02dba3dd4290bb0b467d8deee66e31acd553d177b7bcf9d1ede3de8a452ed66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaAdminBundle::adminLayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaAdminBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_profile_, array(0 => "UmbrellaAdminBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"add_edit_page_title\" style=\"width:50%\">
        <h2>Edit Profile</h2>
    </div>

    <div class=\"edit_profile_form\" >
        <form action=\"\" method=\"post\" id=\"edit_profile_form\" >

 \t       ";
        // line 16
        echo "            <div class=\"edit_container\">
                <label>First Name *</label>      
                ";
        // line 18
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "firstName"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 21
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "firstName"), 'errors');
        echo "
            </div>

            ";
        // line 25
        echo "            <div class=\"edit_container\">
                <label>Last Name * </label>
                ";
        // line 27
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "lastName"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">                
                ";
        // line 30
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "lastName"), 'errors');
        echo "              
            </div>

            ";
        // line 34
        echo "            <div class=\"edit_container\">
                <label>Email *</label>
                ";
        // line 36
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "email"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 39
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "email"), 'errors');
        echo "
            </div>

            ";
        // line 43
        echo "            <div class=\"edit_container\">
                <label>Home Phone *</label>
                ";
        // line 45
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "homePhone"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 48
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "homePhone"), 'errors');
        echo "
            </div>

            ";
        // line 52
        echo "            <div class=\"edit_container\">
                <label>Cell Phone *</label>
                ";
        // line 54
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "cellPhone"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 57
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "cellPhone"), 'errors');
        echo "
            </div>

            ";
        // line 61
        echo "            <div id=\"password_fields\">
                <div class=\"edit_container\" style=\"padding-bottom:10px;\">
                    <label>Password *</label>
                    ";
        // line 64
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_profile_, "password"), "first"), 'widget', array("required" => false));
        echo "
                    <div class=\"message_container\">
                    \t";
        // line 67
        echo "               \t\t </div>
                    <label>Confirm Password *</label>
                    ";
        // line 69
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_profile_, "password"), "second"), 'widget', array("required" => false));
        echo "
                    <div class=\"message_container\">
\t                    ";
        // line 71
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_profile_, "password"), "first"), 'errors');
        echo "
\t                </div>
                </div>
                <div>
                    <span>If you don't want to change password leave the password empty.</span>
                </div>
            </div>
            <br>
            ";
        // line 79
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_profile_, "save"), 'widget', array("required" => false, "attr" => array("class" => "button", "style" => "position:relative; left:30px;")));
        echo "
            ";
        // line 80
        if (isset($context["form_profile"])) { $_form_profile_ = $context["form_profile"]; } else { $_form_profile_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_profile_, 'form_end');
        echo "            
        </form>
    </div>

    <div style=\"text-align:right;\">
        <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("system_users");
        echo "\" class=\"button\">Back</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:Pages:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 64,  407 => 269,  403 => 267,  383 => 254,  372 => 247,  339 => 226,  328 => 219,  318 => 213,  300 => 198,  286 => 187,  258 => 167,  238 => 155,  228 => 149,  206 => 135,  185 => 122,  172 => 80,  68 => 18,  132 => 73,  128 => 62,  86 => 31,  64 => 22,  82 => 29,  79 => 24,  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 259,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 200,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 30,  61 => 13,  73 => 30,  144 => 61,  126 => 55,  116 => 52,  95 => 40,  200 => 58,  176 => 12,  167 => 79,  148 => 88,  145 => 67,  141 => 83,  123 => 67,  119 => 56,  94 => 37,  91 => 39,  74 => 38,  42 => 9,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 274,  416 => 110,  413 => 271,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 241,  359 => 97,  355 => 95,  348 => 231,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 61,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 45,  92 => 25,  84 => 36,  72 => 26,  48 => 18,  35 => 7,  29 => 8,  69 => 29,  54 => 23,  51 => 17,  31 => 6,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 176,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 162,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 52,  147 => 51,  127 => 57,  112 => 55,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 128,  192 => 17,  189 => 71,  186 => 60,  181 => 85,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 71,  152 => 101,  142 => 95,  136 => 65,  133 => 63,  130 => 56,  120 => 54,  105 => 31,  75 => 27,  53 => 28,  55 => 21,  39 => 7,  50 => 42,  38 => 10,  98 => 43,  78 => 21,  44 => 16,  36 => 4,  60 => 16,  57 => 15,  43 => 6,  114 => 22,  109 => 48,  106 => 49,  101 => 48,  88 => 39,  85 => 37,  77 => 31,  67 => 23,  47 => 12,  28 => 3,  25 => 4,  110 => 45,  100 => 27,  89 => 10,  80 => 34,  65 => 17,  63 => 13,  58 => 12,  46 => 18,  40 => 4,  34 => 7,  26 => 4,  22 => 2,  24 => 4,  32 => 6,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 140,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 108,  160 => 49,  157 => 48,  149 => 69,  146 => 41,  140 => 69,  137 => 37,  129 => 36,  124 => 55,  121 => 24,  118 => 36,  115 => 50,  111 => 32,  107 => 51,  104 => 43,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 28,  66 => 27,  62 => 25,  59 => 21,  56 => 20,  52 => 12,  49 => 11,  45 => 5,  41 => 7,  37 => 8,  33 => 3,  30 => 1,);
    }
}
