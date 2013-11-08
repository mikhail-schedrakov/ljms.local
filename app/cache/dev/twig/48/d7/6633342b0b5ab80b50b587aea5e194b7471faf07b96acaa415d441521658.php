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
        return array (  62 => 24,  58 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,);
    }
}
