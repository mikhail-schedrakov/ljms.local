<?php

/* UmbrellaAdminBundle:Pages:systemUsers.html.twig */
class __TwigTemplate_8ba14bea7a5cdb160047be4350ed303ff654642939476839d79975feef6dd15e extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"admin_page_title\">
        <h2 >System Users</h2>
    </div>

    ";
        // line 10
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"msg\">
            <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "msg_err"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"msg_err\">
            <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

    <div style=\"float:left\">
        <form action=\"index.php?pid=system_users\" method=\"post\" style=\"margin:0px; padding:0;\">
            <b  style=\"font-size: 14px;\">Filter by:</b>  
            Division
            <select name=\"sys_us_filter_by_division\" style=\"width:100px;\">
            </select>
            Role:
            <select name=\"sys_us_filter_by_role\" style=\"width:100px;\">
                <option selected = \"selected\" value = \"all\">All</option>
                <option  value = \"admin\">Administrator</option>
                <option  value = \"director\">Director</option>
                <option  value = \"coach\">Coach</option>
                <option  value = \"manager\">Manager</option>
                <option  value = \"guardian\">Guardian</option>
            </select>
            <input type=\"submit\" class=\"button\" name=\"filter_by\" value=\"Filter\" style=\"font-size:12px; padding:3px; margin: 0px;\"/>
        </form>
    </div>

    <div style=\"text-align:right\">
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("add_user");
        echo "\">Add user</a>
    </div>

    <div style=\"clear: both\"></div>

    <form action=\"index.php?pid=system_users\" method=\"post\" style=\"margin-bottom:10px; padding: 0;\">
        <span id=\"page_limit\">
            <b class=\"current\">10</b>
            <a href=\"index.php?pid=system_users&limit=20\">20</a>           
            <a href=\"index.php?pid=system_users&limit=30\">30</a>            
            <a href=\"index.php?pid=system_users&limit=All\">All</a>     
        </span>

        <!-- ************************************************* Alpha Tab start ***************************************************************** -->
        <div class=\"aplha_tabs\">
            <span>
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=A\">A</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=B\">B</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=C\">C</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=D\">D</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=E\">E</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=F\">F</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=G\">G</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=H\">H</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=I\">I</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=J\">J</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=K\">K</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=L\">L</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=M\">M</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=N\">N</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=O\">O</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=P\">P</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=Q\">Q</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=R\">R</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=S\">S</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=T\">T</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=U\">U</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=V\">V</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=W\">W</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=X\">X</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=Y\">Y</a>             
            <a href=\"index.php?pid=system_users&limit=10&alpha_filter=Z\">Z</a>             
            <b class=\"current\">All</b>         </span>
        </div>
        <!-- ************************************************* Alpha Tab end ***************************************************************** -->

        <!-- ************************************************* Mark Action start ***************************************************************** -->
        <select id=\"action_select\" name=\"action_select\">
            <option selected = \"selected\" value = \"not_action\">Select</option>
            <option value = \"delete\">Delete</option>
            <option value = \"active\">Active</option>
            <option value = \"inactive\">Inactive</option>
        </select>
        <input type=\"submit\" class=\"button\" id=\"action_mark\" name=\"action_mark\" value=\"Action\" style=\"font-size:12px; padding:3px; margin: 0px;\" />

        <!-- ************************************************* Mark Action end ***************************************************************** -->
        
        <table class=\"info_table\" cellspacing=\"0\" width=\"100%\" style=\"margin-top:5px;\">
            <tr >
                <th width=\"4%\"><input type=\"checkbox\" id=\"mark_all\"/></th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Role(s)</th>
                <th>Divisions</th>
                <th>Teams</th>
                <th>Action</th>
            </tr>
            <tr  >
                <!-- Checkbox -->
                <td><input type=\"checkbox\" class=\"mark\" name=\"mark[]\" value=\"391\"/></td>
                <!-- Name -->
                <td><a href=\"http://www.ljms.info/admin/index.php?pid=info_user&user_id=391\"  >Allen, Chris</a></td>
                <!-- Phone -->
                <td>815-588-0856</td>
                <!-- Email -->
                <td><a href=\"mailto:aallen@psd202.org\" >aallen@psd202.org</a></td>
                <!-- Roles -->
                <td valign=\"top\">
                    <p style=\"margin: 0; padding: 0;\">Guardian</p>
                </td>
                <!-- Divisions -->
                <td valign=\"top\">
                    &nbsp;         
                </td>
                <!-- Teams -->
                <td valign=\"top\">
                    &nbsp;         
                </td>
                <td width=\"100\">
                    <a href=\"index.php?pid=edit_user&user_id=391\" ><img src=\"http://www.ljms.info/images/edit.png\" width=\"21\" height=\"21\" /></a>
                    <a id=\"del_user\" href=\"index.php?pid=system_users&del_user_id=391\" onclick=\"if (confirm('Are you sure you want to delete this item?')) {return true;} else {return false;}\"><img src=\"http://www.ljms.info/images/delete.png\" width=\"16\" height=\"16\" /></a>
                </td>
            </tr>
            <tr  >
                <!-- Checkbox -->
                <td><input type=\"checkbox\" class=\"mark\" name=\"mark[]\" value=\"94\"/></td>
                <!-- Name -->
                <td><a href=\"http://www.ljms.info/admin/index.php?pid=info_user&user_id=94\"  >Alsup, Angela</a></td>
                <!-- Phone -->
                <td>815-351-1404</td>
                <!-- Email -->
                <td><a href=\"mailto:aalsup76@yahoo.com\" >aalsup76@yahoo.com</a></td>
                <!-- Roles -->
                <td valign=\"top\">
                    <p style=\"margin: 0; padding: 0;\">Guardian</p>
                </td>
                <!-- Divisions -->
                <td valign=\"top\">
                    &nbsp;         
                </td>
                <!-- Teams -->
                <td valign=\"top\">
                    &nbsp;         
                </td>
                <td width=\"100\">
                    <a href=\"index.php?pid=edit_user&user_id=94\" ><img src=\"http://www.ljms.info/images/edit.png\" width=\"21\" height=\"21\" /></a>
                    <a id=\"del_user\" href=\"index.php?pid=system_users&del_user_id=94\" onclick=\"if (confirm('Are you sure you want to delete this item?')) {return true;} else {return false;}\"><img src=\"http://www.ljms.info/images/delete.png\" width=\"16\" height=\"16\" /></a>
                </td>
            </tr>

        </table>
    </form>

    <div class='pagination'><span class='disabled'>previous</span><span class='disabled'>To start</span><span class='current'>1</span><a href='index.php?pid=system_users&page=2&limit=10'>2</a><a href='index.php?pid=system_users&page=3&limit=10'>3</a><a href='index.php?pid=system_users&page=4&limit=10'>4</a><a href='index.php?pid=system_users&page=5&limit=10'>5</a><a href='index.php?pid=system_users&page=6&limit=10'>6</a><a href='index.php?pid=system_users&page=7&limit=10'>7</a>...<a href='index.php?pid=system_users&page=41&limit=10'>41</a><a href='index.php?pid=system_users&page=42&limit=10'>42</a><a href='index.php?pid=system_users&page=2&limit=10'>next</a><a href='index.php?pid=system_users&page=42&limit=10'>To end</a></div>
    
";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:Pages:systemUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  74 => 21,  65 => 18,  62 => 17,  58 => 16,  55 => 15,  46 => 12,  43 => 11,  38 => 10,  31 => 4,  28 => 3,);
    }
}
