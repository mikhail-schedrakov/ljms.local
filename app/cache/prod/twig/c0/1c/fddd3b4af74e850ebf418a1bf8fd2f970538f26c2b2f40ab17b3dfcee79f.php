<?php

/* UmbrellaAdminBundle:Pages:addUser.html.twig */
class __TwigTemplate_c01cfddd3b4af74e850ebf418a1bf8fd2f970538f26c2b2f40ab17b3dfcee79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaAdminBundle::adminLayout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_errors($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 9
            echo "            ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <p class=\"msg_err\">";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        // line 13
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo " 
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"add_edit_page_title\">
        <h2>Add System User</h2>
    </div>

    <form id=\"add_user_form\" action=\"\" method=\"post\" novalidate>
        ";
        // line 24
        echo "        <div class=\"form_container\">
            <table border=\"0\" align=\"center\" width=\"80%\" >
                <tr class=\"form_head\">
                    <td  colspan=4>
                        <h3>User information</h3>
                    </td>
                </tr>
                
                <tr>
                    <td width=\"18%\">
                        First Name *
                    </td>
                    <td width=\"34%\">                        
                        ";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "firstName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td width=\"18%\">
                        Last Name *
                    </td>
                    <td width=\"28%\">                    
                        ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "lastName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "firstName"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "lastName"), 'errors');
        echo "
                    </td>
                </tr>

                ";
        // line 73
        echo "                ";
        // line 89
        echo "
                <tr>
                    <td>
                        Email *
                    </td>
                    <td>                        
                        ";
        // line 95
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "email"), "first"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>                        
                        Email Confirm *
                    </td>
                    <td>
                        ";
        // line 101
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "email"), "second"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 108
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "email"), "first"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">                        
                        ";
        // line 113
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "email"), "second"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Home Phone *
                    </td>
                    <td>                        
                        ";
        // line 122
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "homePhone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Cell Phone
                    </td>
                    <td>
                        ";
        // line 128
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "cellPhone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 135
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "homePhone"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 140
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "cellPhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Password *
                    </td>
                    <td>
                        ";
        // line 149
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "password"), "first"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Alterntive Phone
                    </td>
                    <td>
                        ";
        // line 155
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "altPhone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 162
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "password"), "first"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 167
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "profile"), "altPhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Password<br/>  Confirm *
                    </td>
                    <td>
                        ";
        // line 176
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "password"), "second"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 187
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "profile"), "password"), "second"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                    </td>
                </tr>

            </table>
        </div>
        ";
        // line 198
        echo "
        ";
        // line 200
        echo "        <div class=\"form_container\" style=\"margin: 10px auto;\">
            <table  border=\"0\" align=\"center\" width=\"80%\" >
                <tr>
                    <td class=\"form_head\"  colspan=4>
                        <h3>Alt Contact</h3>
                    </td>
                </tr>

                <tr>                
                    <td>
                        First Name
                    </td>
                    <td>
                        ";
        // line 213
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "firstName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Last Name
                    </td>
                    <td>
                        ";
        // line 219
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "lastName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>               
                </tr>
                <tr>                
                    <td>
                    </td>
                    <td>
                        ";
        // line 226
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "firstName"), 'errors');
        echo "
                    </td>
                    <td>                    
                    </td>
                    <td>
                        ";
        // line 231
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "lastName"), 'errors');
        echo "
                    </td>               
                </tr>


                <tr>                
                    <td>
                        Email
                    </td>
                    <td>
                        ";
        // line 241
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "email"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Phone
                    </td>
                    <td>
                        ";
        // line 247
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "phone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>               
                </tr>
                <tr>                
                    <td>
                    </td>
                    <td>
                        ";
        // line 254
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "email"), 'errors');
        echo "
                    </td>
                    <td>                    
                    </td>
                    <td>
                        ";
        // line 259
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "altContact"), "phone"), 'errors');
        echo "
                    </td>               
                </tr>


            </table>
        </div>
        ";
        // line 267
        echo "
        <div style=\"text-align:center\">
            ";
        // line 269
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save"), 'widget', array("attr" => array("class" => "button")));
        echo "
        </div>        
        ";
        // line 271
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
    </form>

    <a href=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("system_users");
        echo "\" class=\"button\" style=\"margin-left:900px;\">Back</a>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:Pages:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 269,  403 => 267,  383 => 254,  372 => 247,  339 => 226,  328 => 219,  318 => 213,  300 => 198,  286 => 187,  258 => 167,  238 => 155,  228 => 149,  206 => 135,  185 => 122,  172 => 113,  68 => 16,  132 => 73,  128 => 62,  86 => 31,  64 => 22,  82 => 29,  79 => 24,  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 259,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 200,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 30,  61 => 13,  73 => 30,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 37,  91 => 41,  74 => 38,  42 => 9,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 274,  416 => 110,  413 => 271,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 241,  359 => 97,  355 => 95,  348 => 231,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 89,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 30,  72 => 26,  48 => 10,  35 => 7,  29 => 8,  69 => 29,  54 => 23,  51 => 17,  31 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 176,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 162,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 52,  147 => 51,  127 => 60,  112 => 55,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 128,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 101,  142 => 95,  136 => 65,  133 => 63,  130 => 56,  120 => 60,  105 => 31,  75 => 27,  53 => 28,  55 => 21,  39 => 7,  50 => 42,  38 => 8,  98 => 45,  78 => 26,  44 => 8,  36 => 4,  60 => 14,  57 => 19,  43 => 6,  114 => 22,  109 => 53,  106 => 49,  101 => 48,  88 => 39,  85 => 37,  77 => 31,  67 => 23,  47 => 15,  28 => 3,  25 => 2,  110 => 45,  100 => 27,  89 => 10,  80 => 41,  65 => 28,  63 => 13,  58 => 12,  46 => 18,  40 => 4,  34 => 4,  26 => 4,  22 => 2,  24 => 4,  32 => 6,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 140,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 108,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 69,  137 => 37,  129 => 36,  124 => 55,  121 => 24,  118 => 36,  115 => 50,  111 => 32,  107 => 51,  104 => 43,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 28,  66 => 26,  62 => 22,  59 => 21,  56 => 20,  52 => 12,  49 => 11,  45 => 5,  41 => 7,  37 => 8,  33 => 3,  30 => 1,);
    }
}
