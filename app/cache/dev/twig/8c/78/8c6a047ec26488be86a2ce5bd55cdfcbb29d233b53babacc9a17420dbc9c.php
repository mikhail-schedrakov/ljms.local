<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_8c788c6a047ec26488be86a2ce5bd55cdfcbb29d233b53babacc9a17420dbc9c extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  42 => 14,  38 => 13,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  62 => 23,  51 => 15,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 6,  30 => 3,  149 => 82,  143 => 79,  138 => 57,  133 => 55,  126 => 69,  122 => 67,  119 => 65,  114 => 62,  107 => 58,  103 => 56,  100 => 54,  95 => 51,  88 => 6,  84 => 45,  81 => 43,  76 => 40,  69 => 25,  65 => 34,  60 => 29,  53 => 25,  49 => 19,  35 => 7,  32 => 12,  27 => 4,  25 => 3,);
    }
}
