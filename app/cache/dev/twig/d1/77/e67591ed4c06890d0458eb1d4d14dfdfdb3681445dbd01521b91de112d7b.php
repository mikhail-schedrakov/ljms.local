<?php

/* UmbrellaAdminBundle:Form:fields.html.twig */
class __TwigTemplate_d177e67591ed4c06890d0458eb1d4d14dfdfdb3681445dbd01521b91de112d7b extends Twig_Template
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
        ob_start();
        // line 3
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  36 => 5,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  165 => 85,  157 => 80,  153 => 79,  142 => 71,  137 => 69,  133 => 67,  128 => 64,  123 => 61,  117 => 57,  111 => 54,  107 => 52,  101 => 48,  95 => 45,  91 => 43,  85 => 39,  79 => 36,  75 => 34,  69 => 30,  63 => 27,  59 => 25,  53 => 21,  47 => 18,  43 => 16,  33 => 7,  30 => 6,  25 => 4,);
    }
}
