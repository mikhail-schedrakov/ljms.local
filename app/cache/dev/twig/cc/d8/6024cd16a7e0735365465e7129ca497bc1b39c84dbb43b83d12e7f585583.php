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
        return array (  49 => 8,  37 => 5,  29 => 3,  26 => 2,  20 => 1,  140 => 86,  134 => 83,  129 => 80,  127 => 79,  125 => 65,  122 => 63,  117 => 60,  110 => 56,  106 => 54,  103 => 52,  98 => 49,  91 => 45,  87 => 43,  84 => 41,  79 => 38,  72 => 34,  68 => 32,  63 => 27,  56 => 23,  52 => 21,  46 => 7,  35 => 8,  32 => 4,  27 => 5,  25 => 3,);
    }
}
