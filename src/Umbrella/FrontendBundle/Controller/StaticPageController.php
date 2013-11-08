<?php

namespace Umbrella\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/* 
 * StaticPageController:    
 * Show static page (home, sponsors, about).
 */
class StaticPageController extends Controller
{
    /*
     * Show home page.
     */
    public function indexAction()
    {
        $content = $this->renderView('UmbrellaFrontendBundle:Pages:home.html.twig');

        return new Response($content);
    }

    /*
     * Show about page.
     */
    public function aboutAction()
    {
        $content = $this->renderView('UmbrellaFrontendBundle:Pages:about.html.twig');

        return new Response($content);
    }

    /*
     * Show sponsors page.
     */
    public function sponsorsAction()
    {
        $content = $this->renderView('UmbrellaFrontendBundle:Pages:sponsors.html.twig');

        return new Response($content);
    }
}