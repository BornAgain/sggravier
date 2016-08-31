<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
        public function traductionAction($name)
    {
      return $this->render('AdminBundle:Default:traduction.html.twig', array(
       'name' => $name
      ));

    }
    
}
