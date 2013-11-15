<?php

/* UmbrellaAdminBundle::adminLayout.html.twig */
class __TwigTemplate_1cc50c374625808e8ccf29a0184ae391d103e3c8cf8c0e3b2df6967cbbd43ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>LOCKPORT JUNIOR MISS - Adminisrator Area</title>
        
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/css/adminStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body class=\"main\">
        <div class=\"container\">
            
            ";
        // line 15
        echo "            <div id=\"header\" class=\"no_print\">
                <div id=\"logo\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\" style=\"margin-left:0px;\" />
                    </a>
                </div>
                <div id=\"head_top\"></div>
                <div id=\"logout_button\">
                    <a class=\"link\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\">My Profile</a> | 
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"> Log out</a>
                </div>
                <div id=\"head_middle\">
                    <div id=\"top_links\">
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                </div>
                <div id=\"head_bottom\"></div>
            </div>
            ";
        // line 37
        echo "
            ";
        // line 39
        echo "            <div class=\"nav no_print\">
                <div class=\"wrapper\" >
                    <!-- for align center needs specify the width -->
                    <ul  >
                        <li class=\"first\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("system_users");
        echo "\"  class=\"active\">System users</a></li>                    
                    </ul>
                </div>
            </div>
            ";
        // line 48
        echo "
            ";
        // line 50
        echo "            <div id=\"content\">
                ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </div>
            ";
        // line 55
        echo "
            ";
        // line 57
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div class=\"copyright\">Copyright 2008 Lockport Junior Miss Softball</div>
                </div>
            </div>
            ";
        // line 69
        echo "
        </div>
    </body>
</html>";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "                ";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle::adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  147 => 51,  140 => 69,  132 => 63,  128 => 62,  124 => 61,  120 => 60,  115 => 57,  112 => 55,  109 => 53,  107 => 51,  104 => 50,  101 => 48,  94 => 43,  88 => 39,  85 => 37,  77 => 31,  73 => 30,  69 => 29,  54 => 23,  42 => 17,  29 => 8,  20 => 1,  98 => 43,  74 => 21,  65 => 28,  62 => 17,  58 => 24,  55 => 15,  46 => 18,  43 => 11,  38 => 15,  31 => 4,  28 => 3,);
    }
}
