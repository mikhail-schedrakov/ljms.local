<?php

/* UmbrellaFrontendBundle:Pages:auth.html.twig */
class __TwigTemplate_bc697d8e5ed8a14c99423068806789e368856b7a7825109206f41f46b818d0f7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        // line 4
        echo "    
    <div style=\"color:red;text-align:center;font-size:11px;font-weight:bold;padding:5px;\"></div>
    
    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <table class=\"admin_table\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                
                <tr>
                    <td colspan=\"2\" align=\"center\"><b>Administrator Login Only</b></td>
                </tr>

                <tr>
                    <td colspan=\"2\" align=\"center\">
                        ";
        // line 17
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                            <div class=\"msg_err\">
                                <p>";
            // line 19
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </td>
                </tr>

                <tr>
                    <td>
                        <label>E-mail</label>
                    </td>
                    <td>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type=\"password\" id=\"password\" name=\"_password\" />
                    </td>
                </tr>
                
                <tr>
                    <td colspan=\"2\" align=\"center\">                        
                        <button type=\"submit\">login</button> 
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <div>
        <a href=\"\">Forgot password? Click here</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 36,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 79,  134 => 43,  131 => 42,  122 => 54,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 17,  35 => 5,  29 => 3,  69 => 14,  54 => 18,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 65,  147 => 51,  127 => 60,  112 => 52,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 61,  186 => 60,  181 => 13,  178 => 61,  173 => 11,  162 => 58,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 21,  39 => 5,  50 => 21,  38 => 5,  98 => 45,  78 => 37,  44 => 9,  36 => 7,  60 => 14,  57 => 19,  43 => 7,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 22,  47 => 15,  28 => 3,  25 => 3,  110 => 20,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 23,  46 => 12,  40 => 16,  34 => 7,  26 => 2,  22 => 1,  24 => 4,  32 => 4,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 63,  187 => 16,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 80,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 51,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 34,  62 => 24,  59 => 23,  56 => 12,  52 => 8,  49 => 17,  45 => 6,  41 => 9,  37 => 8,  33 => 4,  30 => 3,);
    }
}
