<?php

/* UmbrellaFrontendBundle:Pages:contact.html.twig */
class __TwigTemplate_0a4ed83a852f9e951292a2335842227a12956889c5f92a28f011ee792cf97948 extends Twig_Template
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));
        // line 5
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "UmbrellaFrontendBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        echo "    
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frontend/jquery.validate.contact.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_middle($context, array $blocks = array())
    {
        // line 14
        echo "
    <h1>Contact Us</h1>

    <p><span style=\"font-size: small;\"><strong>Lockport Junior Miss Softball</strong></span></p>
    <p>PO Box 305</p>
    <p>Lockport, IL 60441</p>
    <p>Phone: (630) 453-0166 (Scott McCarthy)</p><br />

    <div class=\"contact_form\">
        <form action=\"\" method=\"post\" id=\"form_contact\">
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">             
                
                ";
        // line 27
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Name * </td>
                    <td width=\"70%\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'widget', array("required" => false, "id" => "name"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"100%\" class='msg_err'>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 38
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Email * </td>
                    <td width=\"70%\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'widget', array("required" => false, "type" => "text", "id" => "email"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 47
        echo "
                ";
        // line 49
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Subject *</td>
                    <td width=\"70%\" >";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'widget', array("required" => false, "id" => "subject"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 58
        echo "
                ";
        // line 60
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">Your Message *</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'widget', array("required" => false, "id" => "message"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 69
        echo "
                ";
        // line 71
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">You are robot?</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "recaptcha"), 'widget', array("attr" => array("options" => array("theme" => "clean"))));
        // line 78
        echo "
                    </td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "recaptcha"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 86
        echo "
                <tr>
                    <td><br /><br /></td>                    
                    <td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "send"), 'widget', array("attr" => array("class" => "nextbtn")));
        echo "</td>
                </tr>
            </table>
            ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_contact"), 'form_end');
        echo "
        </form>
    </div>

    <br />

    <div class=\"names\">
        <table  cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"95%\">
            <tr>
            </tr>
        </table>
    </div>

    <div style=\"clear:both\"></div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 92,  166 => 89,  161 => 86,  156 => 83,  149 => 78,  147 => 74,  142 => 71,  139 => 69,  134 => 66,  127 => 62,  123 => 60,  120 => 58,  115 => 55,  108 => 51,  104 => 49,  101 => 47,  96 => 44,  89 => 40,  85 => 38,  80 => 33,  73 => 29,  69 => 27,  55 => 14,  52 => 13,  46 => 10,  42 => 9,  38 => 8,  33 => 7,  28 => 5,  26 => 3,);
    }
}
