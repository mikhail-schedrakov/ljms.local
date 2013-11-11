<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_700ae36b61d98926def5b9c5f090e056ec37bf135d23d0ec20e8663a8b504d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ewz_recaptcha_widget' => array($this, 'block_ewz_recaptcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "ewz_recaptcha_enabled")) {
            // line 4
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "attr", true), "options", array(), "any", true, true)) {
                // line 5
                echo "            <script type=\"text/javascript\">
                var RecaptchaOptions = ";
                // line 6
                echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, "attr"), "options"));
                echo "
            </script>
        ";
            }
            // line 9
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "url_challenge"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <noscript>
            <iframe src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "url_noscript"), "html", null, true);
            echo "\" height=\"300\" width=\"500\"></iframe><br/>
            <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
            <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
        </noscript>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 6,  38 => 5,  35 => 4,  30 => 2,  27 => 1,  46 => 7,  37 => 5,  32 => 3,  29 => 3,  20 => 1,  202 => 59,  200 => 58,  197 => 57,  192 => 17,  187 => 16,  181 => 13,  176 => 12,  173 => 11,  167 => 105,  163 => 102,  145 => 86,  141 => 83,  123 => 67,  115 => 64,  109 => 60,  107 => 57,  104 => 56,  101 => 54,  97 => 51,  94 => 49,  91 => 47,  78 => 37,  74 => 36,  70 => 35,  66 => 34,  57 => 30,  53 => 11,  42 => 19,  40 => 16,  36 => 14,  34 => 11,  22 => 18,  165 => 94,  161 => 93,  155 => 90,  150 => 87,  148 => 88,  146 => 72,  143 => 70,  138 => 67,  131 => 63,  127 => 61,  124 => 59,  119 => 66,  112 => 62,  108 => 50,  105 => 48,  100 => 45,  93 => 41,  89 => 39,  84 => 41,  77 => 30,  73 => 28,  67 => 24,  62 => 22,  52 => 14,  49 => 8,  43 => 10,  39 => 9,  33 => 7,  28 => 5,  26 => 2,);
    }
}
