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
        return array (  23 => 3,  503 => 165,  496 => 162,  493 => 161,  487 => 125,  477 => 112,  456 => 110,  452 => 109,  448 => 108,  443 => 107,  439 => 106,  434 => 104,  429 => 93,  426 => 92,  412 => 77,  399 => 71,  392 => 46,  389 => 45,  376 => 37,  371 => 10,  367 => 165,  364 => 164,  357 => 158,  345 => 155,  338 => 153,  336 => 152,  333 => 151,  321 => 148,  317 => 147,  300 => 138,  291 => 132,  288 => 131,  286 => 130,  280 => 126,  277 => 125,  260 => 121,  256 => 119,  236 => 103,  223 => 101,  212 => 97,  195 => 96,  190 => 92,  184 => 88,  180 => 71,  174 => 67,  165 => 64,  155 => 61,  137 => 58,  65 => 22,  58 => 23,  134 => 57,  129 => 80,  127 => 79,  110 => 56,  150 => 65,  126 => 55,  202 => 59,  200 => 58,  197 => 57,  192 => 95,  181 => 13,  167 => 105,  148 => 88,  104 => 47,  97 => 51,  84 => 41,  70 => 35,  53 => 11,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 105,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 76,  407 => 131,  402 => 72,  398 => 129,  393 => 126,  387 => 122,  384 => 42,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 106,  341 => 154,  337 => 103,  322 => 101,  314 => 146,  312 => 145,  309 => 144,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 122,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 51,  128 => 49,  107 => 48,  61 => 13,  273 => 124,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 104,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 100,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 66,  102 => 32,  71 => 17,  67 => 15,  63 => 27,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 102,  158 => 62,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 56,  105 => 45,  91 => 45,  62 => 24,  49 => 17,  38 => 5,  93 => 28,  88 => 6,  78 => 37,  94 => 38,  89 => 37,  85 => 25,  75 => 26,  68 => 32,  56 => 19,  27 => 1,  26 => 2,  87 => 43,  46 => 17,  44 => 12,  31 => 4,  25 => 3,  21 => 2,  28 => 3,  24 => 4,  19 => 1,  79 => 27,  72 => 34,  69 => 23,  47 => 9,  40 => 16,  37 => 5,  22 => 18,  246 => 90,  157 => 56,  145 => 86,  139 => 45,  131 => 52,  123 => 67,  120 => 40,  115 => 64,  111 => 37,  108 => 49,  101 => 54,  98 => 42,  96 => 31,  83 => 25,  74 => 36,  66 => 34,  55 => 12,  52 => 21,  50 => 16,  43 => 11,  41 => 10,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 16,  182 => 76,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 83,  133 => 55,  130 => 56,  125 => 65,  122 => 63,  116 => 51,  112 => 50,  109 => 60,  106 => 54,  103 => 52,  99 => 31,  95 => 40,  92 => 37,  86 => 28,  82 => 22,  80 => 41,  73 => 52,  64 => 14,  60 => 20,  57 => 30,  54 => 22,  51 => 10,  48 => 9,  45 => 17,  42 => 6,  39 => 9,  36 => 7,  33 => 4,  30 => 1,);
    }
}
