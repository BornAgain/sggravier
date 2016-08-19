<?php

namespace DataSourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/datasource")
 */
class DefaultController extends Controller {

    /**
     * @Route("/", name="Dashboard")
     */
    public function indexAction() {
        $entities = $this->getDoctrine()->getManager()->getRepository("DataSourceBundle:Datasource")->findAll();

        return array(
            'entities' => $entities
        );
    }
    
    /**
     * @Route("/add", name="ds_default_add")
     */
    public function addAction(\Symfony\Component\HttpFoundation\Request $request) {
        $entity = new \DataSourceBundle\Entity\Datasource();
        $form = $this->get('form.factory')->create(new \DataSourceBundle\Form\DatasourceType, $entity);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('ds_default_add', array('id' => $entity->getId())));
        }

        return $this->render("DataSourceBundle:Default:add.html.twig", array(
                    'form' => $form->createView()
        ));
    }

}
