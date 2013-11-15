<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a483272b6c852850631accd0a3d1cbdc2338bf53de815ae100073fdf25e18333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
";
        // line 2
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 19,  55 => 15,  39 => 7,  50 => 7,  38 => 13,  98 => 40,  78 => 25,  44 => 9,  36 => 6,  60 => 21,  57 => 9,  43 => 14,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  88 => 6,  85 => 16,  77 => 12,  67 => 9,  47 => 6,  28 => 4,  25 => 3,  110 => 20,  100 => 28,  89 => 16,  80 => 41,  65 => 14,  63 => 13,  58 => 12,  46 => 10,  40 => 16,  34 => 5,  26 => 5,  22 => 2,  24 => 4,  32 => 12,  27 => 3,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 16,  59 => 8,  56 => 20,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 4,  33 => 10,  30 => 3,);
    }
}
