<?php

/* UmbrellaFrontendBundle:Pages:auth.html.twig */
class __TwigTemplate_bc697d8e5ed8a14c99423068806789e368856b7a7825109206f41f46b818d0f7 extends Twig_Template
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
    <div style=\"color:red;text-align:center;font-size:11px;font-weight:bold;padding:5px;\"></div>
    
    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <table class=\"admin_table\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                
                <tr>
                    <td colspan=\"2\" align=\"center\"><b>Administrator Login Only</b></td>
                </tr>

                <tr>
                    <td colspan=\"2\" align=\"center\">
                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                            <div class=\"msg_err\">
                                <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </td>
                </tr>

                <tr>
                    <td>
                        <label>E-mail</label>
                    </td>
                    <td>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type=\"password\" id=\"password\" name=\"_password\" />
                    </td>
                </tr>
                
                <tr>
                    <td colspan=\"2\" align=\"center\">                        
                        <button type=\"submit\">login</button> 
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <div>
        <a href=\"\">Forgot password? Click here</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  56 => 19,  53 => 18,  49 => 17,  36 => 7,  31 => 4,  28 => 3,);
    }
}
