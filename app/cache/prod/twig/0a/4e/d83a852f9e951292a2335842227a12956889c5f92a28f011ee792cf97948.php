<?php

/* UmbrellaFrontendBundle:Pages:contact.html.twig */
class __TwigTemplate_0a4ed83a852f9e951292a2335842227a12956889c5f92a28f011ee792cf97948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::frontendLayout.html.twig");

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_contact_, array(0 => "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));
        // line 5
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_contact_, array(0 => "UmbrellaFrontendBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_middle($context, array $blocks = array())
    {
        // line 8
        echo "
    <h1>Contact Us</h1>

    <p><span style=\"font-size: small;\"><strong>Lockport Junior Miss Softball</strong></span></p>
    <p>PO Box 305</p>
    <p>Lockport, IL 60441</p>
    <p>Phone: (630) 453-0166 (Scott McCarthy)</p><br />

    <div class=\"contact_form\">
        <form action=\"\" method=\"post\" id=\"form_contact\" ";
        // line 17
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_contact_, 'enctype');
        echo ">
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">             
                
                ";
        // line 21
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Name * </td>
                    <td width=\"70%\">";
        // line 23
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "name"), 'widget', array("required" => false, "id" => "name"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"100%\" id='msg_err_name' class='msg_err'>";
        // line 27
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "name"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 32
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Email * </td>
                    <td width=\"70%\">";
        // line 34
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "email"), 'widget', array("required" => false, "type" => "text", "id" => "email"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" id='msg_err_email' class='msg_err'>";
        // line 38
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "email"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 41
        echo "
                ";
        // line 43
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Subject *</td>
                    <td width=\"70%\" >";
        // line 45
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "subject"), 'widget', array("required" => false, "id" => "subject"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" id='msg_err_subject' class='msg_err'>";
        // line 49
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "subject"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 52
        echo "
                ";
        // line 54
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">Your Message *</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 56
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "message"), 'widget', array("required" => false, "id" => "message"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" id='msg_err_message' class='msg_err'>";
        // line 60
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "message"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 63
        echo "
                ";
        // line 65
        echo "                ";
        // line 79
        echo "                ";
        // line 80
        echo "
                <tr>
                    <td><br /><br /></td>                    
                    <td>";
        // line 83
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_contact_, "send"), 'widget', array("attr" => array("class" => "nextbtn")));
        echo "</td>
                </tr>
            </table>
            ";
        // line 86
        if (isset($context["form_contact"])) { $_form_contact_ = $context["form_contact"]; } else { $_form_contact_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_contact_, 'form_end');
        echo "
        </form>
    </div>

    <br />

    <div class=\"names\">
        <table  cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"95%\">
            <tr>
            </tr>
        </table>
    </div>

    <div style=\"clear:both\"></div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 36,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 79,  134 => 43,  131 => 42,  122 => 54,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 17,  35 => 5,  29 => 3,  69 => 14,  54 => 14,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 65,  147 => 51,  127 => 60,  112 => 52,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 61,  186 => 60,  181 => 13,  178 => 61,  173 => 11,  162 => 58,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 21,  39 => 5,  50 => 7,  38 => 5,  98 => 45,  78 => 37,  44 => 9,  36 => 14,  60 => 14,  57 => 30,  43 => 7,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 27,  47 => 15,  28 => 5,  25 => 3,  110 => 20,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 10,  46 => 12,  40 => 16,  34 => 7,  26 => 2,  22 => 1,  24 => 4,  32 => 4,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 63,  187 => 16,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 80,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 51,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 34,  62 => 11,  59 => 23,  56 => 12,  52 => 8,  49 => 25,  45 => 6,  41 => 9,  37 => 8,  33 => 4,  30 => 3,);
    }
}
