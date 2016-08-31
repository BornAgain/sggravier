<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Security\Login;

/**
     * @Route("/security")
     */

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="ab_security_login")
     */
    public function LoginAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        if( $this->get('security.authorization_checker')->isGranted('IS_GRANTED_REMEMBERED'))
            {
               return $this->redirect($this->generateUrl('ab_security_login', array('id' => $entity->getId())));
            }
        $authenticationUtils = $this->get('security.authentication_utils');
        
        return $this->render('AdminBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
        
                
    }

}
