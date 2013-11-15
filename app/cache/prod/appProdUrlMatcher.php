<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'Umbrella\\SecurityBundle\\Controller\\AuthController::indexAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Umbrella\\SecurityBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // system_users
            if ($pathinfo === '/admin/system_users') {
                return array (  '_controller' => 'Umbrella\\AdminBundle\\Controller\\SystemUsersController::indexAction',  '_route' => 'system_users',);
            }

            // profile
            if ($pathinfo === '/admin/profile') {
                return array (  '_controller' => 'Umbrella\\AdminBundle\\Controller\\ProfileController::indexAction',  '_route' => 'profile',);
            }

            // add_user
            if ($pathinfo === '/admin/system_users/add_user') {
                return array (  '_controller' => 'Umbrella\\AdminBundle\\Controller\\SystemUsersController::add_userAction',  '_route' => 'add_user',);
            }

        }

        if (0 === strpos($pathinfo, '/frontend')) {
            // home
            if ($pathinfo === '/frontend/home') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::indexAction',  '_route' => 'home',);
            }

            // about
            if ($pathinfo === '/frontend/about') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::aboutAction',  '_route' => 'about',);
            }

            // sponsors
            if ($pathinfo === '/frontend/sponsors') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::sponsorsAction',  '_route' => 'sponsors',);
            }

            // contact
            if ($pathinfo === '/frontend/contact') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

        }

        // bazinga_exposetranslation_js
        if (0 === strpos($pathinfo, '/i18n') && preg_match('#^/i18n/(?P<domain_name>[^/]++)/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_exposetranslation_js')), array (  '_controller' => 'bazinga.exposetranslation.controller:exposeTranslationAction',  'domain_name' => 'messages',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/jsfv')) {
            // apy_js_form_validation_unique_entity
            if (0 === strpos($pathinfo, '/jsfv/unique-entity') && preg_match('#^/jsfv/unique\\-entity\\.(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_unique_entity')), array (  '_controller' => 'jsfv.controller:uniqueEntityAction',  '_format' => 'json',));
            }

            // apy_js_form_validation_checkmx
            if (0 === strpos($pathinfo, '/jsfv/checkmx') && preg_match('#^/jsfv/checkmx(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_checkmx')), array (  '_controller' => 'jsfv.controller:checkMxAction',  '_format' => 'json',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
