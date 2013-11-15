<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Umbrella\AdminBundle\Entity\Profile;
use Umbrella\AdminBundle\Entity\AltContact;
use Umbrella\AdminBundle\Entity\Address;
use Umbrella\AdminBundle\Form\Type\AddUserType;
use Umbrella\AdminBundle\Form\Model\AddUser;



class SystemUsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('UmbrellaAdminBundle:Pages:systemUsers.html.twig');
    }

    public function addUserAction(Request $request)
    {
        $addUser = new AddUser();

        $form = $this->createForm(new AddUserType(), $addUser);

        $form->handleRequest($request);

        if ( ! $form->isValid()) {
            return $this->render(
                'UmbrellaAdminBundle:Pages:addUser.html.twig',
                array('form' => $form->createView())
            );
        }
        else
        {
            $addUser = $form->getData();

            $em = $this->getDoctrine()->getEntityManager();   
            $em->persist($addUser->getProfile());
            $em->persist($addUser->getAltContact());
            $em->flush();
            
            return new Response('add user');
        }
        

    }
}