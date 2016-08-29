<?php

namespace SampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/sample")
     */
    public function indexAction()
    {
        return $this->render('SampleBundle:Default:index.html.twig');
    }
}
