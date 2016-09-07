<?php

namespace SampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
     * @Route("/sample/user")
     */
class UserController extends Controller {
    /**
     * @Route("/see/", name="sb_user_see")
     */
    public function SeeAction(\Symfony\Component\HttpFoundation\Request $request) {
        $id = $request->get('id');


        $entity = $this->getDoctrine()
                ->getRepository('SampleBundle:User')
                ->find($id);
        var_dump($entity);
                exit();
        $user = array();
        $user['username'] = $entity->getUsername();
        $user['password'] = $entity->getPassword();

        $response = new \Symfony\Component\HttpFoundation\Response();
        $data = json_encode($user);

        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($data);
        return $response;
    }

}
