<?php

/* UmbrellaFrontendBundle:Pages:sponsors.html.twig */
class __TwigTemplate_48d76633342b0b5ab80b50b587aea5e194b7471faf07b96acaa415d441521658 extends Twig_Template
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
    <div id=\"sponsors_info_page\">

        <h1>Sponsors</h1>
        <div> 
            <p><strong>Business Owners:</strong></p>
            <p>We are actively seeking sponsors for our upcoming 2013 season.</p>
            <p>You can help a respected area organization and we'll help advertise your business.</p>
            <p>(On and off the field!)</p>
            <p>For more information please contact: <a class=\"click\" href=\"mailto:president@ljms.info\">president@ljms.info</a></p>
            <p>&nbsp;</p><br />
            <p><b>Become A Sponsor</b>: <a href=\"f\" target=\"_blank\" class=\"click\">Click Here</a></p>
        </div>

        <!-- Slideshow logos -->
        <div id=\"slideshow_sponsors_logo\" style=\"height: 150px;\">
            <div>
                <a href=\"http://www.mammaonesti.com\" target=\"_blank\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/22.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                <a href=\"http://www.pinewooddental.com\" target=\"_blank\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/24.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                <a href=\"http://www.thesportshuddle.com\" target=\"_blank\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/25.gif"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                <a href=\"http://www.diaryqueen.com\" target=\"_blank\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/34.gif"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
            </div>
        </div>
        <!-- end Slideshow logos -->

        <!-- Sponsor tables -->
        <div class=\"sponsors_info_tables\">
            <div class=\"sponsors_table\">
                <table cellpadding=\"5\" cellspacing=\"0\" border=\"1px\" bordercolor=\"#cccccc\">
                    <tr>
                        <td colspan=\"3\" style=\"background-color:\">
                            <h3>Premier Sponsors</h3>
                        </td>
                    </tr>
                    <tr>

                        <td style=\"background-color:\">
                            <p><b>Pinewood Dental</b></p>
                            <p></p>
                            <p>11979 W. 143rd Street Orland Park</p>
                            <p>708-364-0641</p>
                            <p><a href=\"http://www.pinewooddental.com\" target=\"_blank\">www.pinewooddental.c...</a></p>
                        </td>

                        <td style=\"background-color:\">
                            <p><b>Sports Huddle</b></p>
                            <p></p>
                            <p>922 E. 9th St. Lockport</p>
                            <p>815-838-8522</p>
                            <p><a href=\"http://www.thesportshuddle.com\" target=\"_blank\">www.thesportshuddle....</a></p>
                        </td>
                    </tr>
                </table>
            </div>  
            <div class=\"sponsors_table\">
                <table cellpadding=\"5\" cellspacing=\"0\" border=\"1px\" bordercolor=\"#cccccc\">
                    <tr>
                        <td colspan=\"3\" style=\"background-color:#E6E7E9\">
                            <h3>Platinum Sponsors</h3>
                        </td>
                    </tr>
                    <tr>

                        <td style=\"background-color:#F8F8F8\">
                            <p><b>ONeil Funeral Home</b></p>
                            <p></p>
                            <p>1105 E. 9th Street Lockport</p>
                            <p>815-838-5010</p>
                            <p><a href=\"http://www.oneilfuneralhome.com\" target=\"_blank\">www.oneilfuneralhome...</a></p>
                        </td>

                        <td style=\"background-color:#F8F8F8\">
                            <p><b>Mamma Onestis</b></p>
                            <p></p>
                            <p>1100 S. State St. Lockport</p>
                            <p>815-588-0900</p>
                            <p><a href=\"http://www.mammaonesti.com\" target=\"_blank\">www.mammaonesti.com</a></p>
                        </td>

                        <td style=\"background-color:#F8F8F8\">
                            <p><b>Dairy Queen</b></p>
                            <p></p>
                            <p>950 E. 9th Street Lockport</p>
                            <p>815-838-1701</p>
                            <p><a href=\"http://www.diaryqueen.com\" target=\"_blank\">www.diaryqueen.com</a></p>
                        </td>
                    </tr>
                    <tr></tr>
                </table>
            </div>  
        </div>
        <!-- end Sponsor tables -->
    </div>  

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:sponsors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 36,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 79,  134 => 43,  131 => 42,  122 => 54,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 17,  35 => 5,  29 => 3,  69 => 14,  54 => 22,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 65,  147 => 51,  127 => 60,  112 => 52,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 61,  186 => 60,  181 => 13,  178 => 61,  173 => 11,  162 => 58,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 21,  39 => 5,  50 => 21,  38 => 5,  98 => 45,  78 => 37,  44 => 9,  36 => 14,  60 => 14,  57 => 30,  43 => 7,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 27,  47 => 15,  28 => 3,  25 => 3,  110 => 20,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 23,  46 => 12,  40 => 16,  34 => 7,  26 => 2,  22 => 1,  24 => 4,  32 => 4,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 63,  187 => 16,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 80,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 51,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 34,  62 => 24,  59 => 23,  56 => 12,  52 => 8,  49 => 25,  45 => 6,  41 => 9,  37 => 8,  33 => 4,  30 => 3,);
    }
}
