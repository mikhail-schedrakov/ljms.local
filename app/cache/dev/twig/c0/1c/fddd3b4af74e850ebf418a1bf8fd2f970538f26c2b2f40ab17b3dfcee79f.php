<?php

/* UmbrellaAdminBundle:Pages:addUser.html.twig */
class __TwigTemplate_c01cfddd3b4af74e850ebf418a1bf8fd2f970538f26c2b2f40ab17b3dfcee79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaAdminBundle::adminLayout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_errors($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 9
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <p class=\"msg_err\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        // line 13
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"add_edit_page_title\">
        <h2>Add System User</h2>
    </div>

    <form id=\"add_user_form\" action=\"\" method=\"post\">
        <div class=\"form_container\">
            <table border=\"0\" align=\"center\" width=\"80%\" >
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
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "firstName"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td width=\"18%\">
                        Last Name *
                    </td>
                    <td width=\"28%\">                    
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastName"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "firstName"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastName"), 'errors');
        echo "
                    </td>
                </tr>

                ";
        // line 72
        echo "                ";
        // line 88
        echo "
                <tr>
                    <td>
                        Email *
                    </td>
                    <td>                        
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "first"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Home Phone *
                    </td>
                    <td>
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "homePhone"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "first"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "homePhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Email Confirm *
                    </td>
                    <td>
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "second"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Cell Phone
                    </td>
                    <td>
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cellPhone"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "second"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cellPhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Password *
                    </td>
                    <td>
                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "first"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Alterntive Phone
                    </td>
                    <td>
                        ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "altPhone"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "first"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "altPhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Password<br/>  Confirm *
                    </td>
                    <td>
                        ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "second"), 'widget', array("required" => false, "attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "second"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                    </td>
                </tr>

            </table>
        </div>

        <div style=\"text-align:center\">
            ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("required" => false, "attr" => array("class" => "button")));
        echo "
        </div>        
        ";
        // line 200
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </form>

    <a href=\"";
        // line 203
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
        return array (  287 => 203,  281 => 200,  276 => 198,  261 => 186,  247 => 175,  235 => 166,  227 => 161,  217 => 154,  208 => 148,  196 => 139,  188 => 134,  178 => 127,  169 => 121,  157 => 112,  149 => 107,  139 => 100,  130 => 94,  122 => 88,  120 => 72,  113 => 54,  105 => 49,  95 => 42,  86 => 36,  65 => 17,  62 => 16,  57 => 13,  54 => 12,  45 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  26 => 4,);
    }
}
