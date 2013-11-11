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
        echo "    <div style=\"color:red;text-align:center;font-size:11px;font-weight:bold;padding:5px;\"></div>
    <form action=\"\" method=\"post\">
        <table class=\"admin_table\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td colspan=\"2\" align=\"center\"><b>Administrator Login Only</b></td>
                </tr>

                <tr>
                    <td>
                        <label>E-mail</label>
                    </td>
                    <td>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_auth"), "email"), 'widget', array("required" => "", "attr" => array("class" => "admin_input")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_auth"), "password"), 'widget', array("required" => "", "attr" => array("class" => "admin_input")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" align=\"center\">                        
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_auth"), "login"), 'widget', array("required" => "", "attr" => array("class" => "btn")));
        echo "
                    </td>
                </tr>
            </tbody>
        </table>
        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_auth"), 'form_end');
        echo "
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
        return array (  65 => 30,  58 => 23,  165 => 94,  161 => 93,  155 => 90,  146 => 72,  127 => 61,  124 => 59,  100 => 45,  77 => 30,  150 => 87,  126 => 55,  202 => 59,  200 => 58,  197 => 57,  192 => 17,  181 => 13,  167 => 105,  148 => 86,  104 => 47,  97 => 51,  84 => 34,  70 => 35,  53 => 28,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 60,  132 => 51,  128 => 49,  107 => 57,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 70,  135 => 53,  119 => 56,  102 => 32,  71 => 17,  67 => 24,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 67,  136 => 59,  121 => 46,  117 => 44,  105 => 48,  91 => 47,  62 => 24,  49 => 13,  38 => 5,  93 => 41,  88 => 6,  78 => 37,  94 => 49,  89 => 39,  85 => 25,  75 => 26,  68 => 14,  56 => 9,  27 => 4,  26 => 3,  87 => 25,  46 => 17,  44 => 12,  31 => 4,  25 => 3,  21 => 2,  28 => 3,  24 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 15,  40 => 16,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 86,  139 => 45,  131 => 63,  123 => 67,  120 => 40,  115 => 64,  111 => 37,  108 => 50,  101 => 54,  98 => 31,  96 => 31,  83 => 25,  74 => 36,  66 => 34,  55 => 12,  52 => 14,  50 => 21,  43 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 66,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 83,  133 => 55,  130 => 56,  125 => 44,  122 => 54,  116 => 51,  112 => 52,  109 => 60,  106 => 36,  103 => 32,  99 => 31,  95 => 40,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 35,  64 => 14,  60 => 14,  57 => 25,  54 => 22,  51 => 10,  48 => 9,  45 => 17,  42 => 6,  39 => 9,  36 => 14,  33 => 7,  30 => 7,);
    }
}
