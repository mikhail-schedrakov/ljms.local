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
        return array (  53 => 11,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  27 => 1,  22 => 18,  20 => 1,  147 => 78,  141 => 75,  136 => 72,  131 => 69,  124 => 65,  120 => 63,  117 => 61,  112 => 58,  105 => 54,  101 => 52,  98 => 50,  93 => 47,  86 => 43,  82 => 41,  79 => 39,  74 => 36,  67 => 32,  63 => 30,  58 => 25,  51 => 21,  47 => 9,  33 => 6,  30 => 2,  25 => 3,);
    }
}
