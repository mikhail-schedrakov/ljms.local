/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


if (jsfv == undefined) {
    var jsfv = [];
}

jsfv['form'] = new function () {
    var self = this;
    function getComputeMessage(key, placeholders, number) {
        Translator.placeHolderPrefix = '{{ ';
        Translator.placeHolderSuffix = ' }}';
        // Default translations
        if (!Translator.has('validators:'+key)) {
            Translator.add('validators:'+key, key);
        }

        return Translator.get('validators:'+key, placeholders, number) ||
               Translator.get('validators:'+key, placeholders);
    }

    function isNotDefined(value) {
        return (typeof(value) == 'undefined' || null === value || '' === value);
    }

    function checkError(field, checkFunction, parameters, value) {
        field = self.id(field);
        // Remove old errors of the field
        self.removeErrors(field);        // Check the value
        errorMessage = checkFunction((value === undefined ? field : value), parameters);
        /*//  */

        if (errorMessage != true) {
        self.addError(field, errorMessage);
            return false;
        }

        return true;
    }




    this.id = function (id) {
        return document.getElementById(id);
    };
    this.removeErrors = function (field) {
        $(field).siblings('ul.error_list').remove();
    };
    this.addError = function (field, errorMessage) {
        // Add errors block
        field = $(field);
        if (field.siblings('ul.error_list').length == 0)  {
            field.before('<ul class="error_list"></ul>');
        }

        // Add error
        field.prev().filter('ul').append('<li>'+errorMessage+'</li>');
    };
    this.onEvent = function (field, eventType, handler) {
        if (typeof(field) == 'string') {
            field = self.id(field);
        }
        $(field).bind(eventType, handler);
    };
    this.submit = function() {
        var gv, submitForm = true;
                
        return submitForm;
    };
    this.onReady = function() {
        // On submit checks
        var form = self.id('form');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('form__token').form;
            }

            self.onEvent(form, 'submit', self.submit);
        }

        // On blur checks

    };
}

$(jsfv['form'].onReady);

