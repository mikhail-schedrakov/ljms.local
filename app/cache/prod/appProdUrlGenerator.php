<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\SecurityBundle\\Controller\\AuthController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\SecurityBundle\\Controller\\AuthController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'system_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\AdminBundle\\Controller\\SystemUsersController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/system_users',    ),  ),  4 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\AdminBundle\\Controller\\ProfileController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile',    ),  ),  4 =>   array (  ),),
        'add_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\AdminBundle\\Controller\\SystemUsersController::add_userAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/system_users/add_user',    ),  ),  4 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/home',    ),  ),  4 =>   array (  ),),
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/about',    ),  ),  4 =>   array (  ),),
        'sponsors' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::sponsorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/sponsors',    ),  ),  4 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/contact',    ),  ),  4 =>   array (  ),),
        'bazinga_exposetranslation_js' => array (  0 =>   array (    0 => 'domain_name',    1 => '_locale',    2 => '_format',  ),  1 =>   array (    '_controller' => 'bazinga.exposetranslation.controller:exposeTranslationAction',    'domain_name' => 'messages',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => '_locale',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'domain_name',    ),    3 =>     array (      0 => 'text',      1 => '/i18n',    ),  ),  4 =>   array (  ),),
        'apy_js_form_validation_unique_entity' => array (  0 =>   array (    0 => '_locale',    1 => '_format',  ),  1 =>   array (    '_controller' => 'jsfv.controller:uniqueEntityAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/\\.]++',      3 => '_locale',    ),    2 =>     array (      0 => 'text',      1 => '/jsfv/unique-entity',    ),  ),  4 =>   array (  ),),
        'apy_js_form_validation_checkmx' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'jsfv.controller:checkMxAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/jsfv/checkmx',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
