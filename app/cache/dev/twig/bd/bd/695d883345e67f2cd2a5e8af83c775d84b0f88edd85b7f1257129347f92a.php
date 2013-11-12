<?php

/* UmbrellaAdminBundle:pages:profile.html.twig */
class __TwigTemplate_bdbd695d883345e67f2cd2a5e8af83c775d84b0f88edd85b7f1257129347f92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaAdminBundle::adminLayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaAdminBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_profile"), array(0 => "UmbrellaAdminBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"add_edit_page_title\" style=\"width:50%\">
        <h2>Edit Profile</h2>
    </div>

    <div class=\"edit_profile_form\" >
        <form action=\"\" method=\"post\" id=\"edit_profile_form\" >

 \t       ";
        // line 16
        echo "            <div class=\"edit_container\">
                <label>First Name *</label>      
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "firstName"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "firstName"), 'errors');
        echo "
            </div>

            ";
        // line 25
        echo "            <div class=\"edit_container\">
                <label>Last Name * </label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "lastName"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">                
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "lastName"), 'errors');
        echo "              
            </div>

            ";
        // line 34
        echo "            <div class=\"edit_container\">
                <label>Email *</label>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "email"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "email"), 'errors');
        echo "
            </div>

            ";
        // line 43
        echo "            <div class=\"edit_container\">
                <label>Home Phone *</label>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "homePhone"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "homePhone"), 'errors');
        echo "
            </div>

            ";
        // line 52
        echo "            <div class=\"edit_container\">
                <label>Cell Phone *</label>
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "cellPhone"), 'widget', array("required" => false));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "cellPhone"), 'errors');
        echo "
            </div>

            ";
        // line 61
        echo "            <div id=\"password_fields\">
                <div class=\"edit_container\" style=\"padding-bottom:10px;\">
                    <label>Password *</label>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form_profile"), "password"), "first"), 'widget', array("required" => false));
        echo "
                    <div class=\"message_container\">
                    \t";
        // line 67
        echo "               \t\t </div>
                    <label>Confirm Password *</label>
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form_profile"), "password"), "second"), 'widget', array("required" => false));
        echo "
                    <div class=\"message_container\">
\t                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form_profile"), "password"), "first"), 'errors');
        echo "
\t                </div>
                </div>
                <div>
                    <span>If you don't want to change password leave the password empty.</span>
                </div>
            </div>
            <br>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_profile"), "save"), 'widget', array("required" => false, "attr" => array("class" => "button", "style" => "position:relative; left:30px;")));
        echo "
            ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_profile"), 'form_end');
        echo "            
        </form>
    </div>

    <div style=\"text-align:right;\">
        <a href=\"\" class=\"button\">Back</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:pages:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 80,  153 => 79,  142 => 71,  137 => 69,  133 => 67,  128 => 64,  123 => 61,  117 => 57,  111 => 54,  107 => 52,  101 => 48,  95 => 45,  91 => 43,  85 => 39,  79 => 36,  75 => 34,  69 => 30,  63 => 27,  59 => 25,  53 => 21,  47 => 18,  43 => 16,  33 => 7,  30 => 6,  25 => 4,);
    }
}
