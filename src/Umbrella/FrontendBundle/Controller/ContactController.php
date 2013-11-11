<?php

namespace Umbrella\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\True;

/**
 * Show contact page.
 * View page and valid form. If from valid, then send email.
 *
 * @method: public indexAction() - render page, valid form, send email.
 * @method: private buildForm() - builder contact form.
 * @method: private setConstraints() - set validation roles.
 */
class ContactController extends Controller
{
    /**
    * Handles request with contact page.
    * View page and valid form. If from valid, then send email.
    * 
    * @param: $request - request with page
    * 
    * @return: contactn page.
    */
    public function indexAction(Request $request)
    {
        // Create contact from
        $form = $this->buildForm();
        
        // Handling request from contacts page
        $form->handleRequest($request);  

        // Valid contacts form
        if (! $form->isValid())
        {
            // Render contacts page whidth  valid errors   
            $content = $this->renderView('UmbrellaFrontendBundle:Pages:contact.html.twig', array(
                'form_contact' => $form->createView()
            ));
        }
        else
        {   
            // Send email
            $content = 'email send';
        }

        return new Response($content);
    }

    /**
    * Build contact from
    * 
    * @return: buit contact form
    */
    private function buildForm()
    {   
        $constraints = $this->setConstraints();

        // Builder from
        $form = $this->createFormBuilder()
            ->add('name', 'text', $constraints['name'])
            ->add('email', 'email', $constraints['email'])
            ->add('subject', 'text', $constraints['subject'])
            ->add('message', 'textarea', $constraints['message'])
            // ->add('recaptcha', 'ewz_recaptcha', $constraints['recaptcha'])
            ->add('send', 'submit')
            ->getForm();

        return $form;    
    }

    /**
    * Constraints list from contact fields
    * 
    * @return: constraints array
    */
    private function setConstraints()
    {
        $constraints = array(
            
            'name' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array(
                        'min' => 2,
                        'max' => 255,
                        'charset' => 'UTF-8'
                    )),
                )
            ),

            'email' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Email()
                )   
            ),

            'subject' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array(
                        'min' => 2,
                        'max' => 255,
                        'charset' => 'UTF-8'
                    )),
                )   
            ),

            'message' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array(
                        'min' => 2,
                        'max' => 1000,
                        'charset' => 'UTF-8'
                    )),
                )   
            ),

            'recaptcha' => array(
                'attr'          => array(
                    'options' => array(
                        'theme' => 'clean'
                    )
                ),
                'mapped' => false,
                'constraints'   => array(
                    new True()
                )
            )
        );

        return $constraints;
    }
}