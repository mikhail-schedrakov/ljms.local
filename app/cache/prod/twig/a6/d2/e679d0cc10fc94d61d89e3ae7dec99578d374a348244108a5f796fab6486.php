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
        if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
        echo twig_escape_filter($this->env, $_formName_, "html", null, true);
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
        if (isset($context["translation_group"])) { $_translation_group_ = $context["translation_group"]; } else { $_translation_group_ = null; }
        echo twig_escape_filter($this->env, $_translation_group_, "html", null, true);
        echo ":'+key)) {
            Translator.add('";
        // line 23
        if (isset($context["translation_group"])) { $_translation_group_ = $context["translation_group"]; } else { $_translation_group_ = null; }
        echo twig_escape_filter($this->env, $_translation_group_, "html", null, true);
        echo ":'+key, key);
        }

        return Translator.get('";
        // line 26
        if (isset($context["translation_group"])) { $_translation_group_ = $context["translation_group"]; } else { $_translation_group_ = null; }
        echo twig_escape_filter($this->env, $_translation_group_, "html", null, true);
        echo ":'+key, placeholders, number) ||
               Translator.get('";
        // line 27
        if (isset($context["translation_group"])) { $_translation_group_ = $context["translation_group"]; } else { $_translation_group_ = null; }
        echo twig_escape_filter($this->env, $_translation_group_, "html", null, true);
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
        if (isset($context["librairyCalls"])) { $_librairyCalls_ = $context["librairyCalls"]; } else { $_librairyCalls_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_librairyCalls_);
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
            if (isset($context["librairyCall"])) { $_librairyCall_ = $context["librairyCall"]; } else { $_librairyCall_ = null; }
            $template = $this->env->resolveTemplate($_librairyCall_);
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
        if (isset($context["getterHandlers"])) { $_getterHandlers_ = $context["getterHandlers"]; } else { $_getterHandlers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_getterHandlers_);
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 63
            echo "
";
            // line 64
            if (isset($context["handler"])) { $_handler_ = $context["handler"]; } else { $_handler_ = null; }
            echo $_handler_;
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
        if (isset($context["fieldConstraints"])) { $_fieldConstraints_ = $context["fieldConstraints"]; } else { $_fieldConstraints_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fieldConstraints_);
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
            if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
            echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
            echo " = function() {
        var gv;
        result = true;
";
            // line 100
            if (isset($context["constraints"])) { $_constraints_ = $context["constraints"]; } else { $_constraints_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_constraints_);
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 101
                echo "        result = result && checkError('";
                if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
                echo "', ";
                if (isset($context["constraint"])) { $_constraint_ = $context["constraint"]; } else { $_constraint_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_constraint_, "name"), "html", null, true);
                echo ", ";
                if (isset($context["constraint"])) { $_constraint_ = $context["constraint"]; } else { $_constraint_ = null; }
                echo $this->getAttribute($_constraint_, "parameters");
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
        if (isset($context["fieldConstraints"])) { $_fieldConstraints_ = $context["fieldConstraints"]; } else { $_fieldConstraints_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fieldConstraints_);
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 122
            echo "        submitForm = self.check_";
            if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
            echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
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
        if (isset($context["check_modes"])) { $_check_modes_ = $context["check_modes"]; } else { $_check_modes_ = null; }
        if ($this->getAttribute($_check_modes_, "submit")) {
            // line 131
            echo "        // On submit checks
        var form = self.id('";
            // line 132
            if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
            echo twig_escape_filter($this->env, $_formName_, "html", null, true);
            echo "');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('";
            // line 138
            if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
            echo twig_escape_filter($this->env, $_formName_, "html", null, true);
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
        if (isset($context["check_modes"])) { $_check_modes_ = $context["check_modes"]; } else { $_check_modes_ = null; }
        if ($this->getAttribute($_check_modes_, "blur")) {
            // line 146
            echo "        // On blur checks
";
            // line 147
            if (isset($context["fieldConstraints"])) { $_fieldConstraints_ = $context["fieldConstraints"]; } else { $_fieldConstraints_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_fieldConstraints_);
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 148
                echo "        self.onEvent('";
                if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
                echo "', 'blur', self.check_";
                if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
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
        if (isset($context["check_modes"])) { $_check_modes_ = $context["check_modes"]; } else { $_check_modes_ = null; }
        if ($this->getAttribute($_check_modes_, "change")) {
            // line 153
            echo "        // On change checks
";
            // line 154
            if (isset($context["fieldConstraints"])) { $_fieldConstraints_ = $context["fieldConstraints"]; } else { $_fieldConstraints_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_fieldConstraints_);
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 155
                echo "        self.onEvent('";
                if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
                echo "', 'change', self.check_";
                if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
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
        if (isset($context["gettersConstraints"])) { $_gettersConstraints_ = $context["gettersConstraints"]; } else { $_gettersConstraints_ = null; }
        if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
        if ($this->getAttribute($_gettersConstraints_, $_fieldName_, array(), "array", true, true)) {
            // line 106
            if (isset($context["gettersConstraints"])) { $_gettersConstraints_ = $context["gettersConstraints"]; } else { $_gettersConstraints_ = null; }
            if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gettersConstraints_, $_fieldName_, array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 107
                echo "            if (";
                if (isset($context["resultvar"])) { $_resultvar_ = $context["resultvar"]; } else { $_resultvar_ = null; }
                echo twig_escape_filter($this->env, $_resultvar_, "html", null, true);
                echo ") {
                gv = ";
                // line 108
                if (isset($context["getterHandler"])) { $_getterHandler_ = $context["getterHandler"]; } else { $_getterHandler_ = null; }
                echo $_getterHandler_;
                echo "();
";
                // line 109
                if (isset($context["getterConstraints"])) { $_getterConstraints_ = $context["getterConstraints"]; } else { $_getterConstraints_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_getterConstraints_);
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 110
                    echo "                ";
                    if (isset($context["resultvar"])) { $_resultvar_ = $context["resultvar"]; } else { $_resultvar_ = null; }
                    echo twig_escape_filter($this->env, $_resultvar_, "html", null, true);
                    echo " = checkError(";
                    if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                    if (($_fieldName_ == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        if (isset($context["fieldName"])) { $_fieldName_ = $context["fieldName"]; } else { $_fieldName_ = null; }
                        echo twig_escape_filter($this->env, $_fieldName_, "html", null, true);
                        echo "'";
                    }
                    echo ", ";
                    if (isset($context["constraint"])) { $_constraint_ = $context["constraint"]; } else { $_constraint_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_constraint_, "name"), "html", null, true);
                    echo ", ";
                    if (isset($context["constraint"])) { $_constraint_ = $context["constraint"]; } else { $_constraint_ = null; }
                    echo $this->getAttribute($_constraint_, "parameters");
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
        if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
        echo twig_escape_filter($this->env, $_formName_, "html", null, true);
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
        return array (  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 164,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 130,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 27,  61 => 20,  73 => 32,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 36,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 46,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 17,  35 => 5,  29 => 3,  69 => 14,  54 => 18,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 119,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 76,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 65,  147 => 59,  127 => 60,  112 => 48,  96 => 25,  76 => 17,  71 => 23,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 21,  39 => 5,  50 => 16,  38 => 5,  98 => 45,  78 => 26,  44 => 9,  36 => 4,  60 => 14,  57 => 19,  43 => 11,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 22,  47 => 15,  28 => 3,  25 => 3,  110 => 45,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 23,  46 => 12,  40 => 5,  34 => 7,  26 => 2,  22 => 18,  24 => 4,  32 => 3,  27 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 57,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 37,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 22,  62 => 24,  59 => 23,  56 => 12,  52 => 8,  49 => 17,  45 => 6,  41 => 10,  37 => 8,  33 => 4,  30 => 1,);
    }
}
