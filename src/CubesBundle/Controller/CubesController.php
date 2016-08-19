<?php

namespace CubesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CubesBundleBundle\Repository\CubesRepository;
use CubesBundle\Entity\Cubes;


/**
     * @Route("/cubes")
     */


class CubesController extends Controller
{
    /**
     * @Route("/add", name="cb_cubes_add")
     */
    public function AddAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \CubesBundle\Entity\Cubes();
        $form = $this->get('form.factory')->create(new \CubesBundle\Form\CubesType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setACCTDATE(new \DateTime());
                        
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('cb_cubes_list', array('id' => $entity->getId())));
        }
        return $this->render('CubesBundle:Cubes:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/list", name="cb_cubes_list")
     */
    public function ListAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("CubesBundle:Cubes")->findAll();
        
        return $this->render('CubesBundle:Cubes:list.html.twig', array(
           'entities' => $entities
        ));
    }

}
