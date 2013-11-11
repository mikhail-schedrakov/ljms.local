<?php

/* UmbrellaFrontendBundle:Pages:home.html.twig */
class __TwigTemplate_81d0d14b55f3606044aab3a11ae875c0b355432988117d447c0c790f669c6977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::frontendLayout.html.twig");

        $this->blocks = array(
            'script' => array($this, 'block_script'),
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
    public function block_script($context, array $blocks = array())
    {
        echo "    
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jshowoff.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frontend/jquery.jshowoff.home.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_middle($context, array $blocks = array())
    {
        // line 10
        echo "
    <div id=\"welcome\">
        <div id=\"welcome_head\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/welcome.gif"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"welcome_img\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/welcome_image.jpeg"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"welcome_txt\">
            <p>
            \t<span style=\"color: #000000;\">
            \t\tWelcome to the&nbsp;Lockport Junior Miss Softball web site. The LJMS Executive Board is excited to introduce the new league site. This site will have many new features that will enable us to keep you informed and updated on all league activities.
            \t</span>
            </p>
            <p>
            \t&nbsp;
            </p>
            <div class=\"more_link\">
            \t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">more about us</a>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div id=\"sponsors\">
        <div>
            <div id=\"sponsores_head\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sponsors.gif"), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <div class=\"more_link\">
            \t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">become one</a>
            </div>
            <div style=\"clear:both\">            \t
            </div>
        </div>

        ";
        // line 47
        echo "        <div id=\"slideshow_sponsors_logo\" style=\"height: 130px;\">
                <div style=\"text-align:center;\">
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/22.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/24.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/18.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                </div>
                <div style=\"text-align:center;\">
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/30.pjpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/31.pjpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/27.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                </div>
                <div style=\"text-align:center;\">
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/33.pjpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/34.gif"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                    <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoSponsors/37.x-png"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                </div>
        </div>
        ";
        // line 65
        echo "
    </div>

    <div style=\"clear:both\">    \t
    </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  144 => 61,  140 => 60,  136 => 59,  130 => 56,  126 => 55,  122 => 54,  116 => 51,  112 => 50,  108 => 49,  104 => 47,  95 => 40,  89 => 37,  75 => 26,  60 => 14,  55 => 12,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  34 => 4,  29 => 3,);
    }
}
