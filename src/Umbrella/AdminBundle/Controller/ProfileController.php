<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Umbrella\AdminBundle\Entity\Profile;
use Umbrella\AdminBundle\Form\Type\ProfileType;

class ProfileController extends Controller
{
    public function indexAction(Request $request)
    {
        // New Profile object       
        // $profile = new Profile();

        $profile = $this->getDoctrine()
            ->getRepository('UmbrellaAdminBundle:Profile')
            ->find(1);

        // Create profile form
        $form = $this->createForm(new ProfileType(), $profile);        

        // Handling request from contacts page
        $form->handleRequest($request);  

        // Valid contacts form
        if (! $form->isValid())
        {
            // Render contacts page whidth valid errors   
            $content = $this->renderView('UmbrellaAdminBundle:Pages:profile.html.twig', array(
                'form_profile' => $form->createView()
            ));
        }
        else
        {   
            // Send email
            $em = $this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->flush();

            // show message on auth page
            $this->get('session')->getFlashBag()->add(
                'msg',
                'Profile updated.'
            );

            return $this->redirect($this->generateURL('system_users'));  
        }

        return new Response($content);
    }
}