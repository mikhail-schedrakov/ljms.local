<?php

/* UmbrellaAdminBundle:Pages:addUser.html.twig */
class __TwigTemplate_c01cfddd3b4af74e850ebf418a1bf8fd2f970538f26c2b2f40ab17b3dfcee79f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"add_edit_page_title\">
        <h2>Add System User</h2>
    </div>

    <form id=\"add_user_form\" action=\"\" method=\"post\">
        <div class=\"form_container\">
            <table border=\"0\" align=\"center\" width=\"80%\">
                <tr class=\"form_head\">
                    <td  colspan=4>
                        <h3>User information</h3>
                    </td>
                </tr>
                <tr>
                    <td width=\"18%\">
                        First Name *
                    </td>
                    <td width=\"34%\">
                        <input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                    <td width=\"18%\">
                        Last Name *
                    </td>
                    <td width=\"28%\">
                        <input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                </tr>
                ";
        // line 48
        echo "                ";
        // line 64
        echo "                <tr>
                    <td>
                        Email *
                    </td>
                    <td>
                        <input type=\"text\" id=\"email\" name=\"email\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                    <td>
                        Home Phone *
                    </td>
                    <td>
                        <input type=\"text\" id=\"home_phone\" name=\"home_phone\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email Confirm *
                    </td>
                    <td>
                        <input type=\"text\" id=\"email_confirm\" name=\"email_confirm\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                    <td>
                        Cell Phone
                    </td>
                    <td>
                        <input type=\"text\" id=\"cell_phone\" name=\"cell_phone\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password *
                    </td>
                    <td>
                        <input type=\"password\" id=\"password\" name=\"password\" style=\"width: 150px;\"></input>
                    </td>
                    <td>
                        Alterntive Phone
                    </td>
                    <td>
                        <input type=\"text\" id=\"alt_phone\" name=\"alt_phone\" value=\"\" style=\"width: 150px;\"></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password<br/>  Confirm *
                    </td>
                    <td>
                        <input type=\"password\" id=\"password_confirm\" name=\"password_confirm\" style=\"width: 150px;\"></input>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
        </div>

        <div style=\"text-align:center\">
            <input type=\"submit\" class=\"button\" name=\"add_user\" id=\"add_user\" value=\"Save\"></input>
        </div>        
    
    </form>

    <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("system_users");
        echo "\" class=\"button\" style=\"margin-left:900px;\">Back</a>
";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:Pages:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 127,  62 => 64,  60 => 48,  31 => 7,  28 => 6,);
    }
}
