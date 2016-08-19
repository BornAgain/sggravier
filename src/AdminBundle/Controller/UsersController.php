<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Repository\UsersRepository;
use AdminBundle\Entity\Users;


    /**
     * @Route("/users")
     */

class UsersController extends Controller
{
    /**
     * @Route("/add", name="ab_users_add")
     */
public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \AdminBundle\Entity\Users();
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\UsersType, $entity);

        if ($form->handleRequest($request)->isValid()) {
           
            $entity->setUpdateDate(new \DateTime());
            $entity->setCreateDate(new \DateTime());
            $entity->setChangedPassword(true);
            $entity->setSalt('');
                   
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Utilisateur bien enregistré.');

            return $this->redirect($this->generateUrl('ab_users_list'));
        }
        return $this->render('AdminBundle:Users:add.html.twig', array(
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/list", name="ab_users_list")
     */
    public function listAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Users")->findAll();
        return $this->render('AdminBundle:Users:list.html.twig', array(
           'entities' => $entities
        ));
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="ab_users_see")
     */
    public function seeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("AdminBundle:Users")->find($id);
        
        return $this->render('AdminBundle:Users:see.html.twig', array(
            "entity" => $entity
        ));
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"}, name="ab_users_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Users")->find($id);
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\UsersType(), $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $entity->setUpdateDate(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ab_users_list'));
        }

        return $this->render('AdminBundle:Users:update.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"},name="ab_users_delete")
     */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("AdminBundle:Users")->find($id);

        if (!isset($entity) OR $entity->getId() == NULL) {
            throw $this->createNotFoundException('ID Incorrect');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("ab_users_list"));
    }
    
    
    
    /**
     * @Route("/login", name="login_user")
     */
    public function loginAction() {
         // Si le visiteur est déjà identifié, on le redirige vers l'accueil

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
          return $this->redirectToRoute('ab_users_list');
        }
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('AdminBundle:Users:login.html.twig', array(
          'last_username' => $authenticationUtils->getLastUsername(),
          'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
}