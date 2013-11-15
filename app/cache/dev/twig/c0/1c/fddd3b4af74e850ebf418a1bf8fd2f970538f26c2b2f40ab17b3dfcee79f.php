<?php

/* UmbrellaAdminBundle:Pages:addUser.html.twig */
class __TwigTemplate_c01cfddd3b4af74e850ebf418a1bf8fd2f970538f26c2b2f40ab17b3dfcee79f extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form', array("attr" => array("novalidate" => "novalidate")));
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:Pages:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
