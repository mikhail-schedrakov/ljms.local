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
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "UmbrellaFrontendBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Contact Us</h1>

    <p><span style=\"font-size: small;\"><strong>Lockport Junior Miss Softball</strong></span></p>
    <p>PO Box 305</p>
    <p>Lockport, IL 60441</p>
    <p>Phone: (630) 453-0166 (Scott McCarthy)</p><br />

    <div class=\"contact_form\">
        <form action=\"\" method=\"post\" novalidate>
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">             
                
                ";
        // line 19
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Name * </td>
                    <td width=\"70%\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"100%\" class='msg_err'>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 30
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Email * </td>
                    <td width=\"70%\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'widget', array("attr" => array("type" => "text")));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 39
        echo "
                ";
        // line 41
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Subject *</td>
                    <td width=\"70%\" >";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'widget', array("required" => ""));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 50
        echo "
                ";
        // line 52
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">Your Message *</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'widget', array("attr" => array()));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 61
        echo "
                ";
        // line 63
        echo "                ";
        // line 71
        echo "                ";
        // line 72
        echo "
                <tr>
                    <td><br /><br /></td>                    
                    <td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "send"), 'widget', array("attr" => array("class" => "nextbtn")));
        echo "</td>
                </tr>
            </table>
            ";
        // line 78
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
        return array (  135 => 78,  129 => 75,  124 => 72,  122 => 71,  120 => 63,  117 => 61,  112 => 58,  105 => 54,  101 => 52,  98 => 50,  93 => 47,  86 => 43,  82 => 41,  79 => 39,  74 => 36,  67 => 32,  63 => 30,  58 => 25,  51 => 21,  47 => 19,  33 => 6,  30 => 5,  25 => 3,);
    }
}
