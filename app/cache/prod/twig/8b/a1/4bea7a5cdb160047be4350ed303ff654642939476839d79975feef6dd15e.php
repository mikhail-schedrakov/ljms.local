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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"msg\">
            <p>";
            // line 12
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "msg_err"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"msg_err\">
            <p>";
            // line 18
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
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
        return array (  407 => 269,  403 => 267,  383 => 254,  372 => 247,  339 => 226,  328 => 219,  318 => 213,  300 => 198,  286 => 187,  258 => 167,  238 => 155,  228 => 149,  206 => 135,  185 => 122,  172 => 113,  68 => 18,  132 => 73,  128 => 62,  86 => 31,  64 => 22,  82 => 29,  79 => 24,  21 => 1,  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 259,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 200,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 30,  61 => 13,  73 => 30,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 37,  91 => 41,  74 => 38,  42 => 9,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 274,  416 => 110,  413 => 271,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 241,  359 => 97,  355 => 95,  348 => 231,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 89,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 43,  92 => 25,  84 => 30,  72 => 26,  48 => 10,  35 => 7,  29 => 8,  69 => 29,  54 => 23,  51 => 17,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 176,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 162,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 52,  147 => 51,  127 => 60,  112 => 55,  96 => 25,  76 => 17,  71 => 17,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 128,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 101,  142 => 95,  136 => 65,  133 => 63,  130 => 56,  120 => 60,  105 => 31,  75 => 27,  53 => 28,  55 => 21,  39 => 7,  50 => 42,  38 => 10,  98 => 45,  78 => 21,  44 => 11,  36 => 4,  60 => 16,  57 => 15,  43 => 6,  114 => 22,  109 => 53,  106 => 49,  101 => 48,  88 => 39,  85 => 37,  77 => 31,  67 => 23,  47 => 12,  28 => 3,  25 => 2,  110 => 45,  100 => 27,  89 => 10,  80 => 41,  65 => 17,  63 => 13,  58 => 12,  46 => 18,  40 => 4,  34 => 4,  26 => 4,  22 => 2,  24 => 4,  32 => 6,  27 => 3,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 140,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 108,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 69,  137 => 37,  129 => 36,  124 => 55,  121 => 24,  118 => 36,  115 => 50,  111 => 32,  107 => 51,  104 => 43,  97 => 37,  93 => 9,  90 => 21,  81 => 29,  70 => 28,  66 => 26,  62 => 22,  59 => 21,  56 => 20,  52 => 12,  49 => 11,  45 => 5,  41 => 7,  37 => 8,  33 => 3,  30 => 1,);
    }
}
