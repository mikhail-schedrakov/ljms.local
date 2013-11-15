<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Umbrella\AdminBundle\Entity\Profile;
use Umbrella\AdminBundle\Entity\AltContact;
use Umbrella\AdminBundle\Entity\Address;
use Umbrella\AdminBundle\Form\Type\AddUserType;

class SystemUsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('UmbrellaAdminBundle:Pages:systemUsers.html.twig');
    }

    public function add_userAction(Request $request)
    {
        $profile = new Profile();

        // Create profile form
        $form = $this->createForm(new AddUserType(), $profile);

        // Handling request from contacts page
        $form->handleRequest($request);

        // Valid form
        if ( ! $form->isValid())
        {
            // Render contacts page whidth valid errors   
            $content = $this->renderView('UmbrellaAdminBundle:Pages:addUser.html.twig', array(
                'form' => $form->createView(),                
            ));

            return new Response($content);
        }
        else
        { 
            $data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();

            // show message on auth page
            $this->get('session')->getFlashBag()->add(
                'msg',
                'New user was added successfully.'
            );

            return $this->redirect($this->generateURL('system_users'));    
        }
    }
}