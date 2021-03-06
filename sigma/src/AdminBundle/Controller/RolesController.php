<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Repository\RolesRepository;


/**
 * @Route("/roles")
 */
class RolesController extends Controller
{
    /**
     * @Route("/add",name="ab_roles_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \AdminBundle\Entity\Roles();
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\RolesType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager(); //tjr present : pr interaction avec la bd
            
            $entity->setUpdateDate(new \DateTime());
            $entity->setCreateDate(new \DateTime());
            $entity->setChangedPassword(true);
            $entity->setSalt('');
            $entity->setRoles (null);

            
            $em->persist($entity); //save bd
            $em->flush(); //commiter => valider sauvegarde
            $request->getSession()->getFlashBag()->add('notice', 'Informations bien enregistrées.');

            return $this->redirect($this->generateUrl('ab_roles_list'));
        }
        
        return $this->render('AdminBundle:Roles:add.html.twig', array(
            'form' => $form->createView()
        ));
}

     /**
     * @Route("/update/{id}", requirements={"id" = "\d+"},name="ab_roles_update")
     */
    public function updateAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Roles")->find($id);
        $form = $this->get('form.factory')->create(new \AdminBundle\Form\RolesType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            
            $d = date('Y-m-d H:i:s'); 
            $updateDate =   new \DateTime($d);
            $entity->setUpdateDate($updateDate);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            //$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ab_roles_list'));
        }

        return $this->render('AdminBundle:Roles:update.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/list",name="ab_roles_list")
     */
    public function listAction()
    {
        $entities = $this->getDoctrine()->getManager()->getRepository("AdminBundle:Roles")->findAll();
        return $this->render('AdminBundle:Roles:list.html.twig', array(
           'entities' => $entities
        ));
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"}, name="ab_roles_see")
     */
    public function seeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("AdminBundle:Roles")->find($id);
  
        return $this->render('AdminBundle:Roles:see.html.twig', array(
            "entity" => $entity
        ));
    }
    
    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"},name="ab_roles_delete")
     */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("AdminBundle:Roles")->find($id);

        if (!isset($entity) OR $entity->getId() == NULL) {
            throw $this->createNotFoundException('ID Incorrect');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("ab_roles_list"));
    }

}
