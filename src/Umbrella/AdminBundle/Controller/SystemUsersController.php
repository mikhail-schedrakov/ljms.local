<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SystemUsersController extends Controller
{
    public function indexAction()
    {
         return $this->render('UmbrellaAdminBundle:Pages:systemUsers.html.twig');
    }

    public function add_userAction()
    {
        return $this->render('UmbrellaAdminBundle:Pages:addUser.html.twig');
    }
}