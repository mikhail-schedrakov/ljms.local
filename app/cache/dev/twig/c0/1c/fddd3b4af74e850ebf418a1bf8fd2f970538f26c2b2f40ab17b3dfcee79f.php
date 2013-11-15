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
        echo " 
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"add_edit_page_title\">
        <h2>Add System User</h2>
    </div>

    <form id=\"add_user_form\" action=\"\" method=\"post\" novalidate>
        ";
        // line 24
        echo "        <div class=\"form_container\">
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
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "firstName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td width=\"18%\">
                        Last Name *
                    </td>
                    <td width=\"28%\">                    
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "lastName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "firstName"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "lastName"), 'errors');
        echo "
                    </td>
                </tr>

                ";
        // line 60
        echo "                ";
        // line 113
        echo "                ";
        // line 114
        echo "
                <tr>
                    <td>
                        Email *
                    </td>
                    <td>                        
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "email"), "first"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>                        
                        Email Confirm *
                    </td>
                    <td>
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "email"), "second"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "email"), "first"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">                        
                        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "email"), "second"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Home Phone *
                    </td>
                    <td>                        
                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "homePhone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Cell Phone
                    </td>
                    <td>
                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "cellPhone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "homePhone"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "cellPhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Password *
                    </td>
                    <td>
                        ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "password"), "first"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Alterntive Phone
                    </td>
                    <td>
                        ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "altPhone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                </tr>
                <tr valign=\"top\">
                    <td width=\"18%\">  
                    </td>
                    <td width=\"34%\" >
                        ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "password"), "first"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "altPhone"), 'errors');
        echo "
                    </td>
                </tr>

                <tr>
                    <td>
                        Password<br/>  Confirm *
                    </td>
                    <td>
                        ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "password"), "second"), 'widget', array("attr" => array("style" => "width: 150px;")));
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
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "profile"), "password"), "second"), 'errors');
        echo "
                    </td>
                    <td width=\"18%\">
                    </td>
                    <td width=\"28%\">
                    </td>
                </tr>

            </table>
        </div>
        ";
        // line 223
        echo "
        ";
        // line 225
        echo "        <div class=\"form_container\" style=\"margin: 10px auto;\">
            <table  border=\"0\" align=\"center\" width=\"80%\" >
                <tr>
                    <td class=\"form_head\"  colspan=4>
                        <h3>Alt Contact</h3>
                    </td>
                </tr>

                <tr>                
                    <td>
                        First Name
                    </td>
                    <td>
                        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "firstName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Last Name
                    </td>
                    <td>
                        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "lastName"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>               
                </tr>
                <tr>                
                    <td>
                    </td>
                    <td>
                        ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "firstName"), 'errors');
        echo "
                    </td>
                    <td>                    
                    </td>
                    <td>
                        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "lastName"), 'errors');
        echo "
                    </td>               
                </tr>


                <tr>                
                    <td>
                        Email
                    </td>
                    <td>
                        ";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "email"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>
                    <td>
                        Phone
                    </td>
                    <td>
                        ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "phone"), 'widget', array("attr" => array("style" => "width: 150px;")));
        echo "
                    </td>               
                </tr>
                <tr>                
                    <td>
                    </td>
                    <td>
                        ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "email"), 'errors');
        echo "
                    </td>
                    <td>                    
                    </td>
                    <td>
                        ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "altContact"), "phone"), 'errors');
        echo "
                    </td>               
                </tr>

            </table>
        </div>
        ";
        // line 291
        echo "
        <div style=\"text-align:center\">
            ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save"), 'widget', array("attr" => array("class" => "button")));
        echo "
        </div>        
        ";
        // line 295
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </form>

    <a href=\"";
        // line 298
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
        return array (  389 => 298,  383 => 295,  378 => 293,  374 => 291,  365 => 284,  357 => 279,  347 => 272,  338 => 266,  325 => 256,  317 => 251,  307 => 244,  298 => 238,  283 => 225,  280 => 223,  267 => 212,  253 => 201,  241 => 192,  233 => 187,  223 => 180,  214 => 174,  202 => 165,  194 => 160,  184 => 153,  175 => 147,  163 => 138,  155 => 133,  145 => 126,  136 => 120,  128 => 114,  126 => 113,  124 => 60,  117 => 55,  109 => 50,  99 => 43,  90 => 37,  75 => 24,  67 => 17,  64 => 16,  57 => 13,  54 => 12,  45 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  26 => 4,);
    }
}
