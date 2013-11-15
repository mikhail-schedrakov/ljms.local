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
        return array (  53 => 11,  47 => 9,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  30 => 2,  27 => 1,  22 => 18,  20 => 1,  388 => 274,  382 => 271,  377 => 269,  373 => 267,  363 => 259,  355 => 254,  345 => 247,  336 => 241,  323 => 231,  315 => 226,  305 => 219,  296 => 213,  281 => 200,  278 => 198,  265 => 187,  251 => 176,  239 => 167,  231 => 162,  221 => 155,  212 => 149,  200 => 140,  192 => 135,  182 => 128,  173 => 122,  161 => 113,  153 => 108,  143 => 101,  134 => 95,  126 => 89,  124 => 73,  117 => 55,  109 => 50,  99 => 43,  90 => 37,  75 => 24,  67 => 17,  64 => 16,  57 => 13,  54 => 12,  45 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  26 => 4,);
    }
}
