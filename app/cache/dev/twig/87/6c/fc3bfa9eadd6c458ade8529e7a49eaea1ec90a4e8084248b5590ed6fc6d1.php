<?php

/* UmbrellaFrontendBundle:Pages:about.html.twig */
class __TwigTemplate_876cfc3bfa9eadd6c458ade8529e7a49eaea1ec90a4e8084248b5590ed6fc6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::frontendLayout.html.twig");

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        // line 4
        echo "
     <h1>About Us</h1>
     <p>Lockport Junior Miss Softball (LJMS) was created in 1972 and has become one of the strongest, fastest growing softball organizations in the Chicago land area.</p>
     <p>LJMS is a structured organization offering balanced age divisions for girls 5 to 18 years of age.</p>
     <p>Unlike other organizations, LJMS is a not for profit sole entity, which means all&nbsp;monies are redirected back into the LJMS organization. All participants&nbsp; receive a complete uniform along with many opportunities to participate in league activities.</p>
     <p>LJMS believes in a strong family involvement and encourages fun and fundamentals.<br />Safe play and a safe environment are also focus points of LJMS. All Coach/Managers attend instructional clinics to assist them with their teachings. Each team is staffed with at least one female leader.</p>
     <p>All LJMS adult participants (Coaches, Managers, Umpires, and Executive Board Members) <br />are screened through a criminal history check to ensure the safest atmosphere&nbsp;for the girls.<br />LJMS is also proud to provide a higher level of competition with the creation of a full time travel team.</p>
     <p>The \"Lockport Pride\" is currently offered at the 10U,11U,12U and 13U&nbsp;levels.<br /><br />LJMS encourages you to be part of this historic organization and help build the future <br />of girls softball.</p>
     <p>&nbsp;</p>
     <p><a href=\"\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/pdf.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"32\" height=\"32\" />Playoff_Brackets.pdf</a></p>
     <p>
          <a href=\"\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/pdf.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"32\" height=\"32\" /></a>
          <a href=\"\">LJMSCONSTITUTION_2012.pdf</a>
     </p>
     <p class=\"pdf_link\">
          <a href=\"LJMScodeofEthics.pdf\" target=\"_blank\">LJMS Code of Ethics</a>
     </p>
     <p>&nbsp;</p>
     <div style=\"clear:both\">
     </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  42 => 13,  31 => 4,  28 => 3,);
    }
}
