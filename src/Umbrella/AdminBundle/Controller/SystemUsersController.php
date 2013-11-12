<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Umbrella\AdminBundle\Entity\Profile;
use Umbrella\AdminBundle\Form\Type\AddUserType;

class SystemUsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('UmbrellaAdminBundle:Pages:systemUsers.html.twig');
    }

    public function add_userAction(Request $request)
    {
        // New Profile object       
        $profile = new Profile();
        
        // Create profile form
        $form = $this->createForm(new AddUserType(), $profile);

        // Handling request from contacts page
        $form->handleRequest($request); 

        // Valid contacts form
        if (! $form->isValid())
        {
            // Render contacts page whidth valid errors   
            $content = $this->renderView('UmbrellaAdminBundle:Pages:addUser.html.twig', array(
                'form' => $form->createView()
            ));
        }
        else
        {   
            // Send email
            $content = 'user added';
        }

        // return $this->render('UmbrellaAdminBundle:Pages:addUser.html.twig');
        return new Response($content);
    }
}