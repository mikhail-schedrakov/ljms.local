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
        return array (  46 => 7,  37 => 5,  29 => 3,  26 => 2,  20 => 1,  149 => 79,  143 => 76,  138 => 73,  133 => 70,  126 => 66,  122 => 64,  119 => 62,  114 => 59,  107 => 55,  103 => 53,  100 => 51,  95 => 48,  88 => 44,  84 => 42,  81 => 40,  76 => 37,  69 => 33,  65 => 31,  60 => 26,  53 => 22,  49 => 8,  35 => 7,  32 => 4,  27 => 4,  25 => 3,);
    }
}
