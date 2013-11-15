<?php

/* APYJsFormValidationBundle:Constraints:IpValidator.js.twig */
class __TwigTemplate_c4d823235b667578f8bcfeefc58ddb936302cd0a2ad4ae4890e31326e2e9eef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "function Ip(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    /*
     * Private functions
     * Inspired by php_filter_validate_ip function
     * Copyright (c) 1997-2011 The PHP Group
     */
    var isIPv4 = function (value) {
        var ip = value.match(/^(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)\$/);
        return ip != null && ip[1] <= 255 && ip[2] <= 255 && ip[3] <= 255 && ip[4] <= 255;
    };

    var isIPv4_no_priv = function (value) {
        var ip = value.match(/^(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)\$/);
        if ( (ip[0] == 10)
          || (ip[0] == 172 && (ip[1] >= 16 && ip[1] <= 31))
          || (ip[0] == 192 && ip[1] == 168) )
        {
            return false;
        }
        else {
            return true;
        }
    };

    var isIPv4_no_res = function (value) {
        var ip = value.match(/^(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)\$/);
        if ( (ip[0] == 0)
          || (ip[0] == 128 && ip[1] == 0)
          || (ip[0] == 191 && ip[1] == 255)
          || (ip[0] == 169 && ip[1] == 254)
          || (ip[0] == 192 && ip[1] == 0 && ip[2] == 2)
          || (ip[0] == 127 && ip[1] == 0 && ip[2] == 0 && ip[3] == 1)
          || (ip[0] >= 224 && ip[0] <= 255) )
        {
            return false;
        }
        else {
            return true;
        }
    };

    var isIPv6 = function (ip) {
";
        // line 52
        echo "
        var pattern = /^\\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]?\\d)){3}))|:)))(%.+)?\\s*\$/
";
        echo "
        return pattern.test(ip);
    };

    var isIPv6_no_priv = function (value) {
        var vallow = value.toLowerCase();
        if ( value.length >=2 && ( 'fc' == vallow.substr(0, 2) || 'fd' == vallow.substr(0, 2) ) ) {
            return false;
        }
        else {
            return true;
        }
    };

    var isIPv6_no_res = function (value) {
        var vallow = value.toLowerCase();
        var vallen = value.length;
        switch (vallen) {
            case 0:
            case 1: break;
            case 2:
                if ( '::' == vallow ) {
                    return false;
                }
                break;
            case 3:
                if ( '::1' == vallow || '5f:' == vallow ) {
                    return false;
                }
                break;
            default:
                if (vallen >= 5) {
                    if ( \"fe8\" == vallow.substr(0, 3)
                      || \"fe9\" == vallow.substr(0, 3)
                      || \"fea\" == vallow.substr(0, 3)
                      || \"feb\" == vallow.substr(0, 3) )
                    {
                           return false;
                    }
                }
                if ( (vallen >= 9 && \"2001:0db8\" == vallow.substr(0, 9))
                  || (vallen >= 2 && \"5f\" == vallow.substr(0, 2))
                  || (vallen >= 4 && \"3ff3\" == vallow.substr(0, 4))
                  || (vallen >= 8 && \"2001:001\" == vallow.substr(0, 8)) )
                {
                    return false;
                }
            break;
        }

        return true;
    };

    value = String(value);

    var result = false;
    switch (params.version) {
        case '4':
            result = isIPv4(value);
            break;
        case '6':
            result = isIPv6(value);
            break;
        case 'all':
            result = isIPv4(value) || isIPv6(value);
            break;
        case '4_no_priv':
            result = isIPv4(value) && isIPv4_no_priv(value);
            break;
        case '6_no_priv':
            result = isIPv6(value) && isIPv6_no_priv(value);
            break;
        case 'all_no_priv':
            result = ( (isIPv4(value) && isIPv4_no_priv(value))
                    || (isIPv6(value) && isIPv6_no_priv(value)) );
            break;
        case '4_no_res':
            result = isIPv4(value) && isIPv4_no_res(value);
            break;
        case '6_no_res':
            result = isIPv6(value) && isIPv6_no_res(value);
            break;
        case 'all_no_res':
            result = ( (isIPv4(value) && isIPv4_no_res(value))
                    || (isIPv6(value) && isIPv6_no_res(value)) );
            break;
        case '4_public':
            result = isIPv4(value) && isIPv4_no_priv(value) && isIPv4_no_res(value);
            break;
        case '6_public':
            result = isIPv6(value) && isIPv6_no_priv(value) && isIPv6_no_res(value);
            break;
        case 'all_public':
            result = ( (isIPv4(value) && isIPv4_no_priv(value) && isIPv4_no_res(value))
                    || (isIPv6(value) && isIPv6_no_priv(value) && isIPv6_no_res(value)) );
            break;
        default:
            result = false
            break;
    }

    return result ? result : getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:IpValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  544 => 165,  536 => 162,  533 => 161,  527 => 125,  517 => 112,  486 => 109,  481 => 108,  475 => 107,  465 => 105,  462 => 104,  457 => 93,  454 => 92,  440 => 77,  430 => 72,  427 => 71,  417 => 45,  412 => 42,  404 => 37,  399 => 10,  395 => 165,  392 => 164,  385 => 158,  371 => 155,  366 => 154,  363 => 153,  360 => 152,  357 => 151,  343 => 148,  338 => 147,  335 => 146,  332 => 145,  329 => 144,  319 => 138,  309 => 132,  306 => 131,  303 => 130,  297 => 126,  294 => 125,  290 => 124,  280 => 122,  275 => 121,  255 => 116,  235 => 101,  230 => 100,  199 => 92,  191 => 76,  170 => 63,  165 => 62,  103 => 42,  99 => 38,  83 => 27,  61 => 20,  73 => 52,  144 => 61,  126 => 55,  116 => 51,  95 => 40,  200 => 58,  176 => 12,  167 => 105,  148 => 88,  145 => 83,  141 => 83,  123 => 67,  119 => 56,  94 => 43,  91 => 41,  74 => 36,  42 => 6,  20 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 110,  488 => 143,  483 => 142,  473 => 134,  469 => 106,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 76,  434 => 119,  429 => 116,  423 => 112,  420 => 46,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 161,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 103,  239 => 69,  231 => 68,  219 => 67,  201 => 95,  143 => 58,  138 => 79,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  108 => 49,  102 => 28,  92 => 25,  84 => 41,  72 => 15,  48 => 17,  35 => 5,  29 => 3,  69 => 14,  54 => 18,  51 => 10,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 119,  264 => 74,  261 => 81,  257 => 79,  253 => 104,  249 => 76,  247 => 70,  237 => 73,  204 => 96,  198 => 65,  194 => 64,  150 => 65,  147 => 59,  127 => 60,  112 => 48,  96 => 25,  76 => 17,  71 => 23,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 57,  195 => 65,  192 => 17,  189 => 71,  186 => 60,  181 => 13,  178 => 61,  173 => 64,  162 => 61,  158 => 56,  155 => 55,  152 => 86,  142 => 52,  136 => 65,  133 => 63,  130 => 56,  120 => 40,  105 => 31,  75 => 26,  53 => 28,  55 => 21,  39 => 5,  50 => 16,  38 => 5,  98 => 45,  78 => 26,  44 => 9,  36 => 4,  60 => 14,  57 => 19,  43 => 11,  114 => 22,  109 => 60,  106 => 49,  101 => 54,  88 => 6,  85 => 38,  77 => 34,  67 => 22,  47 => 15,  28 => 3,  25 => 3,  110 => 45,  100 => 27,  89 => 37,  80 => 41,  65 => 14,  63 => 13,  58 => 23,  46 => 12,  40 => 5,  34 => 7,  26 => 2,  22 => 18,  24 => 4,  32 => 3,  27 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 97,  215 => 73,  211 => 84,  208 => 70,  202 => 59,  196 => 64,  193 => 88,  187 => 16,  183 => 67,  180 => 59,  171 => 54,  166 => 51,  163 => 102,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 57,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 54,  111 => 32,  107 => 57,  104 => 47,  97 => 37,  93 => 9,  90 => 21,  81 => 14,  70 => 35,  66 => 22,  62 => 24,  59 => 23,  56 => 12,  52 => 8,  49 => 17,  45 => 6,  41 => 10,  37 => 8,  33 => 4,  30 => 1,);
    }
}
