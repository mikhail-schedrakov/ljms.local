<?php

/* UmbrellaFrontendBundle:Form:fields.html.twig */
class __TwigTemplate_ccd86024cd16a7e0735365465e7129ca497bc1b39c84dbb43b83d12e7f585583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
    }

    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 4
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "                <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        ";
        }
        // line 8
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  37 => 5,  32 => 4,  29 => 3,  20 => 1,  202 => 59,  200 => 58,  197 => 57,  192 => 17,  187 => 16,  181 => 13,  176 => 12,  173 => 11,  167 => 105,  163 => 102,  145 => 86,  141 => 83,  123 => 67,  115 => 64,  109 => 60,  107 => 57,  104 => 56,  101 => 54,  97 => 51,  94 => 49,  91 => 47,  78 => 37,  74 => 36,  70 => 35,  66 => 34,  57 => 30,  53 => 28,  42 => 19,  40 => 16,  36 => 14,  34 => 11,  22 => 1,  165 => 94,  161 => 93,  155 => 90,  150 => 87,  148 => 88,  146 => 72,  143 => 70,  138 => 67,  131 => 63,  127 => 61,  124 => 59,  119 => 66,  112 => 62,  108 => 50,  105 => 48,  100 => 45,  93 => 41,  89 => 39,  84 => 41,  77 => 30,  73 => 28,  67 => 24,  62 => 22,  52 => 14,  49 => 8,  43 => 10,  39 => 9,  33 => 7,  28 => 5,  26 => 2,);
    }
}
