<?php

/* UmbrellaFrontendBundle::frontendLayout.html.twig */
class __TwigTemplate_99c0b2f4952ba3adcdd7b13d36bd6d079eb986c501bb5d7da9e08223bf0024d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'script' => array($this, 'block_script'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <title>LOCKPORT JUNIOR MISS</title>
        
        <meta charset=\"UTF-8\"/>
        <meta name=\"keywords\" content=\"\"/>
        <meta name=\"description\" content=\"\" />

        ";
        // line 11
        $this->displayBlock('link', $context, $blocks);
        // line 14
        echo "    
         
        ";
        // line 16
        $this->displayBlock('script', $context, $blocks);
        // line 19
        echo "
    </head>

    <body class=\"main\">

        ";
        // line 25
        echo "        <div class=\"container\">
            
            ";
        // line 28
        echo "            <div id=\"header\" class=\"no_print\">
                <div id=\"logo\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"images\"/></a>
                </div>
                <div id=\"head02\">
                    <div id=\"top_links\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div id=\"joinus\">
                    ";
        // line 41
        echo "                    </div>
                </div>
                <div id=\"head03\">
                </div>
            </div>
            ";
        // line 47
        echo "
            ";
        // line 49
        echo "            <div id=\"content\">
                ";
        // line 51
        echo "                <div id=\"left\" class=\"no_print\">
                </div>
                ";
        // line 54
        echo "
                ";
        // line 56
        echo "                <div id=\"content_area\">
                    ";
        // line 57
        $this->displayBlock('middle', $context, $blocks);
        // line 60
        echo "                </div>
                ";
        // line 62
        echo "
               ";
        // line 64
        echo "                <div id=\"right\">
                    <div id=\"announcement_box\">
                        <div id=\"announce_head\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>
                        <div id=\"announce_img\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce_img.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>
                        <div id=\"announce_txt\">
                            <blockquote>
                                <p><span style=\"color: #ff0000; font-size: x-small;\"><strong>Fall ball is complete thanks to all the coaches for a great fall season!!!!</strong></span></p>
                                <p><span style=\"color: #ff0000; font-size: small;\"><strong>&nbsp;</strong></span></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;Rain-out hot line.....in the event of questionable weather, we have established a call in hot-line that you can call to see if games are cancelled. <strong>This only applies to</strong> <strong>Hassert Park</strong> and can be called after 3pm on weekdays and 8am on weekends. The number is <strong>815-838-1183 ext 504</strong>.....please remember to dial the proper extension.&nbsp;</p>
                                <p><span style=\"font-size: small;\"><span style=\"font-size: large;\"><strong>&nbsp;<br /></strong></span></span></p>
                            </blockquote>
                        </div>
                            <p>&nbsp;</p>
                        <div style=\"clear:both\"></div>
                    </div>
                </div>
                ";
        // line 83
        echo "                <div style=\"clear:both\"></div>
            </div>
            ";
        // line 86
        echo "
            ";
        // line 88
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"\">Home</a>|
                        <a href=\"\">About</a>|
                        <a href=\"\">Sponsors</a>|
                        <a href=\"\">Contact</a>
                    </div>
                    <div class=\"copyright\">
                        Copyright 2008 Lockport Junior Miss Softball
                    </div>
                </div>
            </div>
            ";
        // line 102
        echo "
        </div>
        ";
        // line 105
        echo "
    </body>
</html>";
    }

    // line 11
    public function block_link($context, array $blocks = array())
    {
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 16
    public function block_script($context, array $blocks = array())
    {
        echo "    
            ";
        // line 17
        echo "            
        ";
    }

    // line 57
    public function block_middle($context, array $blocks = array())
    {
        // line 58
        echo "                        ";
        // line 59
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 59,  200 => 58,  197 => 57,  192 => 17,  187 => 16,  181 => 13,  176 => 12,  173 => 11,  167 => 105,  163 => 102,  148 => 88,  145 => 86,  141 => 83,  123 => 67,  119 => 66,  115 => 64,  112 => 62,  109 => 60,  107 => 57,  104 => 56,  101 => 54,  97 => 51,  94 => 49,  91 => 47,  84 => 41,  78 => 37,  74 => 36,  70 => 35,  66 => 34,  57 => 30,  42 => 19,  40 => 16,  34 => 11,  22 => 1,  65 => 22,  56 => 19,  53 => 28,  49 => 25,  36 => 14,  31 => 4,  28 => 3,);
    }
}
