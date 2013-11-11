<?php

/* UmbrellaFrontendBundle:Pages:contact.html.twig */
class __TwigTemplate_0a4ed83a852f9e951292a2335842227a12956889c5f92a28f011ee792cf97948 extends Twig_Template
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));
        // line 5
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "UmbrellaFrontendBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_middle($context, array $blocks = array())
    {
        // line 8
        echo "
    <h1>Contact Us</h1>

    <p><span style=\"font-size: small;\"><strong>Lockport Junior Miss Softball</strong></span></p>
    <p>PO Box 305</p>
    <p>Lockport, IL 60441</p>
    <p>Phone: (630) 453-0166 (Scott McCarthy)</p><br />

    <div class=\"contact_form\">
        <form action=\"\" method=\"post\" id=\"form_contact\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form_contact"), 'enctype');
        echo ">
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">             
                
                ";
        // line 21
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Name * </td>
                    <td width=\"70%\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'widget', array("required" => false, "id" => "name"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"100%\" id='msg_err_name' class='msg_err'>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 32
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Email * </td>
                    <td width=\"70%\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'widget', array("required" => false, "type" => "text", "id" => "email"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" id='msg_err_email' class='msg_err'>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 41
        echo "
                ";
        // line 43
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Subject *</td>
                    <td width=\"70%\" >";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'widget', array("required" => false, "id" => "subject"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" id='msg_err_subject' class='msg_err'>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 52
        echo "
                ";
        // line 54
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">Your Message *</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'widget', array("required" => false, "id" => "message"));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" id='msg_err_message' class='msg_err'>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 63
        echo "
                ";
        // line 65
        echo "                ";
        // line 79
        echo "                ";
        // line 80
        echo "
                <tr>
                    <td><br /><br /></td>                    
                    <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "send"), 'widget', array("attr" => array("class" => "nextbtn")));
        echo "</td>
                </tr>
            </table>
            ";
        // line 86
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
        return array (  140 => 86,  134 => 83,  129 => 80,  127 => 79,  125 => 65,  122 => 63,  117 => 60,  110 => 56,  106 => 54,  103 => 52,  98 => 49,  91 => 45,  87 => 43,  84 => 41,  79 => 38,  72 => 34,  68 => 32,  63 => 27,  56 => 23,  52 => 21,  46 => 17,  35 => 8,  32 => 7,  27 => 5,  25 => 3,);
    }
}
