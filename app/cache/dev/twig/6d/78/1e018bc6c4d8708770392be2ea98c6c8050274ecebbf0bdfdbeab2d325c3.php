<?php

/* BazingaExposeTranslationBundle::exposeTranslation.js.twig */
class __TwigTemplate_6d781e018bc6c4d8708770392be2ea98c6c8050274ecebbf0bdfdbeab2d325c3 extends Twig_Template
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
        echo "Translator.locale = '";
        echo twig_escape_filter($this->env, $this->getContext($context, "locale"), "js", null, true);
        echo "';
Translator.defaultDomains = [";
        // line 2
        if ($this->getContext($context, "defaultDomains")) {
            echo "\"";
            echo twig_join_filter($this->getContext($context, "defaultDomains"), "\", \"");
            echo "\"";
        }
        echo "];
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["domain"] => $context["translations"]) {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "translations"));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 5
                echo "Translator.add(";
                echo twig_jsonencode_filter((($this->getContext($context, "domain") . ":") . $this->getContext($context, "key")));
                echo ", ";
                echo twig_jsonencode_filter($this->getContext($context, "message"));
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['translations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BazingaExposeTranslationBundle::exposeTranslation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 3,  24 => 2,  19 => 1,);
    }
}
