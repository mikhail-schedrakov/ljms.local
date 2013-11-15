<?php

/* APYJsFormValidationBundle::JsFormValidation.js.twig */
class __TwigTemplate_a6d2e679d0cc10fc94d61d89e3ae7dec99578d374a348244108a5f796fab6486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before' => array($this, 'block_before'),
            'removeErrors' => array($this, 'block_removeErrors'),
            'getVal' => array($this, 'block_getVal'),
            'addError' => array($this, 'block_addError'),
            'removeErrors_method' => array($this, 'block_removeErrors_method'),
            'addError_method' => array($this, 'block_addError_method'),
            'onEvent' => array($this, 'block_onEvent'),
            'getters_constraints_field' => array($this, 'block_getters_constraints_field'),
            'getters_constraints_submit' => array($this, 'block_getters_constraints_submit'),
            'onReady' => array($this, 'block_onReady'),
            'after' => array($this, 'block_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

";
        // line 10
        $this->displayBlock('before', $context, $blocks);
        // line 11
        echo "
if (jsfv == undefined) {
    var jsfv = [];
}

jsfv['";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
        echo "'] = new function () {
    var self = this;
    function getComputeMessage(key, placeholders, number) {
        Translator.placeHolderPrefix = '";
        // line 19
        echo "{{";
        echo " ';
        Translator.placeHolderSuffix = ' ";
        // line 20
        echo "}}";
        echo "';
        // Default translations
        if (!Translator.has('";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key)) {
            Translator.add('";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key, key);
        }

        return Translator.get('";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key, placeholders, number) ||
               Translator.get('";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "translation_group"), "html", null, true);
        echo ":'+key, placeholders);
    }

    function isNotDefined(value) {
        return (typeof(value) == 'undefined' || null === value || '' === value);
    }

    function checkError(field, checkFunction, parameters, value) {
        field = self.id(field);
        // Remove old errors of the field
        ";
        // line 37
        $this->displayBlock('removeErrors', $context, $blocks);
        // line 38
        echo "        // Check the value
        errorMessage = checkFunction((value === undefined ? field : value), parameters);
        ";
        // line 42
        echo "/*// ";
        $this->displayBlock('getVal', $context, $blocks);
        echo " */

        if (errorMessage != true) {
";
        // line 45
        $this->displayBlock('addError', $context, $blocks);
        // line 48
        echo "
            return false;
        }

        return true;
    }


";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "librairyCalls"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["librairyCall"]) {
            // line 57
            echo "
";
            // line 58
            $template = $this->env->resolveTemplate($this->getContext($context, "librairyCall"));
            $template->display($context);
            // line 59
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['librairyCall'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "getterHandlers"));
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 63
            echo "
";
            // line 64
            echo $this->getContext($context, "handler");
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    this.id = function (id) {
        return document.getElementById(id);
    };
";
        // line 71
        $this->displayBlock('removeErrors_method', $context, $blocks);
        // line 76
        $this->displayBlock('addError_method', $context, $blocks);
        // line 88
        echo "    this.onEvent = function (field, eventType, handler) {
        if (typeof(field) == 'string') {
            field = self.id(field);
        }
";
        // line 92
        $this->displayBlock('onEvent', $context, $blocks);
        // line 95
        echo "    };
";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 97
            echo "    this.check_";
            echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
            echo " = function() {
        var gv;
        result = true;
";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "constraints"));
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 101
                echo "        result = result && checkError('";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "constraint"), "name"), "html", null, true);
                echo ", ";
                echo $this->getAttribute($this->getContext($context, "constraint"), "parameters");
                echo " );
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            $context["resultvar"] = "result";
            // line 104
            $this->displayBlock('getters_constraints_field', $context, $blocks);
            // line 116
            echo "        return result;
    };
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "    this.submit = function() {
        var gv, submitForm = true;
";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 122
            echo "        submitForm = self.check_";
            echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
            echo "() && submitForm;
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        ";
        $context["resultvar"] = "submitForm";
        $context["fieldName"] = ".";
        // line 125
        echo "        ";
        $this->displayBlock('getters_constraints_submit', $context, $blocks);
        // line 126
        echo "
        return submitForm;
    };
    this.onReady = function() {
";
        // line 130
        if ($this->getAttribute($this->getContext($context, "check_modes"), "submit")) {
            // line 131
            echo "        // On submit checks
        var form = self.id('";
            // line 132
            echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
            echo "');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('";
            // line 138
            echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
            echo "__token').form;
            }

            self.onEvent(form, 'submit', self.submit);
        }
";
        }
        // line 144
        echo "
";
        // line 145
        if ($this->getAttribute($this->getContext($context, "check_modes"), "blur")) {
            // line 146
            echo "        // On blur checks
";
            // line 147
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 148
                echo "        self.onEvent('";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo "', 'blur', self.check_";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 151
        echo "
";
        // line 152
        if ($this->getAttribute($this->getContext($context, "check_modes"), "change")) {
            // line 153
            echo "        // On change checks
";
            // line 154
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldConstraints"));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 155
                echo "        self.onEvent('";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo "', 'change', self.check_";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 158
        echo "    };
}

";
        // line 161
        $this->displayBlock('onReady', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('after', $context, $blocks);
    }

    // line 10
    public function block_before($context, array $blocks = array())
    {
    }

    // line 37
    public function block_removeErrors($context, array $blocks = array())
    {
        ob_start();
        echo "self.removeErrors(field);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_getVal($context, array $blocks = array())
    {
    }

    // line 45
    public function block_addError($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        ob_start();
        echo "self.addError(field, errorMessage);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_removeErrors_method($context, array $blocks = array())
    {
        // line 72
        echo "    this.removeErrors = function (field) {
        \$(field).siblings('ul.error_list').remove();
    };
";
    }

    // line 76
    public function block_addError_method($context, array $blocks = array())
    {
        // line 77
        echo "    this.addError = function (field, errorMessage) {
        // Add errors block
        field = \$(field);
        if (field.siblings('ul.error_list').length == 0)  {
            field.before('<ul class=\"error_list\"></ul>');
        }

        // Add error
        field.prev().filter('ul').append('<li>'+errorMessage+'</li>');
    };
";
    }

    // line 92
    public function block_onEvent($context, array $blocks = array())
    {
        // line 93
        echo "        \$(field).bind(eventType, handler);
";
    }

    // line 104
    public function block_getters_constraints_field($context, array $blocks = array())
    {
        // line 105
        if ($this->getAttribute($this->getContext($context, "gettersConstraints", true), $this->getContext($context, "fieldName"), array(), "array", true, true)) {
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "gettersConstraints"), $this->getContext($context, "fieldName"), array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 107
                echo "            if (";
                echo twig_escape_filter($this->env, $this->getContext($context, "resultvar"), "html", null, true);
                echo ") {
                gv = ";
                // line 108
                echo $this->getContext($context, "getterHandler");
                echo "();
";
                // line 109
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "getterConstraints"));
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 110
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "resultvar"), "html", null, true);
                    echo " = checkError(";
                    if (($this->getContext($context, "fieldName") == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        echo twig_escape_filter($this->env, $this->getContext($context, "fieldName"), "html", null, true);
                        echo "'";
                    }
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "constraint"), "name"), "html", null, true);
                    echo ", ";
                    echo $this->getAttribute($this->getContext($context, "constraint"), "parameters");
                    echo ", gv);
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "            }
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['getterHandler'], $context['getterConstraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 125
    public function block_getters_constraints_submit($context, array $blocks = array())
    {
        $this->displayBlock("getters_constraints_field", $context, $blocks);
    }

    // line 161
    public function block_onReady($context, array $blocks = array())
    {
        // line 162
        echo "\$(jsfv['";
        echo twig_escape_filter($this->env, $this->getContext($context, "formName"), "html", null, true);
        echo "'].onReady);
";
    }

    // line 165
    public function block_after($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 155,  338 => 153,  336 => 152,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 97,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  165 => 64,  155 => 61,  137 => 58,  65 => 22,  58 => 23,  134 => 57,  129 => 80,  127 => 79,  110 => 56,  150 => 65,  126 => 55,  202 => 59,  200 => 58,  197 => 57,  192 => 95,  181 => 13,  167 => 105,  148 => 88,  104 => 47,  97 => 51,  84 => 41,  70 => 35,  53 => 11,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 106,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 51,  128 => 49,  107 => 48,  61 => 13,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 66,  102 => 32,  71 => 17,  67 => 15,  63 => 27,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 62,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 56,  105 => 45,  91 => 45,  62 => 24,  49 => 17,  38 => 5,  93 => 28,  88 => 6,  78 => 37,  94 => 38,  89 => 37,  85 => 25,  75 => 26,  68 => 32,  56 => 19,  27 => 1,  26 => 2,  87 => 43,  46 => 17,  44 => 12,  31 => 4,  25 => 3,  21 => 2,  28 => 3,  24 => 4,  19 => 1,  79 => 27,  72 => 34,  69 => 23,  47 => 9,  40 => 16,  37 => 5,  22 => 18,  246 => 90,  157 => 56,  145 => 86,  139 => 45,  131 => 52,  123 => 67,  120 => 40,  115 => 64,  111 => 37,  108 => 49,  101 => 54,  98 => 42,  96 => 31,  83 => 25,  74 => 36,  66 => 34,  55 => 12,  52 => 21,  50 => 16,  43 => 11,  41 => 10,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 76,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 83,  133 => 55,  130 => 56,  125 => 65,  122 => 63,  116 => 51,  112 => 50,  109 => 60,  106 => 54,  103 => 52,  99 => 31,  95 => 40,  92 => 37,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 14,  60 => 20,  57 => 30,  54 => 22,  51 => 10,  48 => 9,  45 => 17,  42 => 6,  39 => 9,  36 => 7,  33 => 4,  30 => 1,);
    }
}
