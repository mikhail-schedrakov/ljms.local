<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3fb8bd4b55acfb30bff4e859c3c685dd29c7e1e8f506e37c7ebfb50871490678 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  109 => 21,  106 => 20,  101 => 19,  88 => 17,  85 => 16,  77 => 12,  67 => 9,  47 => 7,  28 => 4,  25 => 3,  110 => 20,  100 => 19,  89 => 16,  80 => 15,  65 => 14,  63 => 13,  58 => 12,  46 => 9,  40 => 7,  34 => 5,  26 => 4,  22 => 2,  24 => 4,  32 => 3,  27 => 3,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 32,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 15,  66 => 13,  62 => 12,  59 => 8,  56 => 10,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 5,  33 => 9,  30 => 4,);
    }
}
