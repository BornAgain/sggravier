<?php

namespace DataSourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Services;

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

    /**
     * @Route("/add/step1", name="ds_default_stp1")
     */
    public function step1Action(\Symfony\Component\HttpFoundation\Request $request) {
        $entity = new \DataSourceBundle\Entity\Datasource();
        $entity->setUpdateDate(new \DateTime());
        $entity->setCreateDate(new \DateTime());

        $form = $this->get('form.factory')->create(new \DataSourceBundle\Form\DatasourceType, $entity);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('ds_default_stp2', array('id' => $entity->getId())));
        }

        return $this->render("DataSourceBundle:Default:stp1.html.twig", array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/add/step2/{id}", name="ds_default_stp2")
     */
    public function step2Action(\Symfony\Component\HttpFoundation\Request $request, \DataSourceBundle\Entity\Datasource $datasource) {
        $entity = new \DataSourceBundle\Entity\File();
        $form = $this->get('form.factory')->create(new \DataSourceBundle\Form\FileType(), $entity);

        if ($form->handleRequest($request)->isValid()) {

            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $entity->getFile();

            // Generate a unique name for the file before saving it
            $fileName = $file->getClientOriginalName();

            // Move the file to the directory where brochures are stored
            $rootDir = $this->container->getParameter('app_root_files') . 'DS/' . $datasource->getName() . '/';
            $file->move($rootDir, $fileName);
            $entity->setUrl($rootDir . $fileName);

            // Importer le fichier
            $mgMg = new \Services\MongoManager();
            $mgMg->importCsv($this->container->getParameter('mongo_database_name'), $datasource->getName(), 'csv', $entity->getUrl());

            $entity->setName($fileName);
            $entity->setType("string");
            $entity->setContent("content");

            $entity->setDatasource($datasource);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('ds_default_stp3', array('id' => $entity->getDatasource()->getId())));
        }

        return $this->render("DataSourceBundle:Default:stp2.html.twig", array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/add/step3/{id}", name="ds_default_stp3")
     */
    public function step3Action(\Symfony\Component\HttpFoundation\Request $request, \DataSourceBundle\Entity\Datasource $datasource) {

        $fileArray = $datasource->getFiles();
//        var_dump($fileArray);
//        
//        exit;
        $file = $fileArray[0];
        if (($handle = fopen($file->getUrl(), "r")) !== FALSE) {
            $dataHeader = fgetcsv($handle, 1000, ",");
            //var_dump($data); exit;
            $file->setHeader(implode("|", $dataHeader));
        }
        fclose($handle);

        $data = array();
        $formBuilder = $this->createFormBuilder($data);

        foreach ($dataHeader as $key => $value) {
            $formBuilder->add($value, "checkbox", array('required' => false));
        }
        // $formBuilder->add("Submit", "submit");
        $form = $formBuilder->getForm();
        
        /* if ($form->handleRequest($request)->isValid()) {
          $data = $form->getData();
          $headerArray = array();
          foreach ($headerArray as $key => $value) {
          if($value == true)
          $headerArray[] = $key;
          }
          $file->setHeader(implode("|", $headerArray));
          $em = $this->getDoctrine()->getManager();
          $em->persist($datasource);
          $em->flush();
          //            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
          return $this->redirect($this->generateUrl('ds_default_stp3', array('id' => $datasource->getId())));
          } */

        return $this->render("DataSourceBundle:Default:stp3.html.twig", array(
                    "form" => $form->createView(),
                    "headers" => $dataHeader,
                    "id_dt" => $datasource->getId()
        ));
    }
    
    /**
     * @Route("/add/step4/{id}", name="ds_default_stp4")
     */
    public function step4Action(\Symfony\Component\HttpFoundation\Request $request, \DataSourceBundle\Entity\Datasource $datasource) {
            $datasource->setNotBuild(FALSE);
            $em = $this->getDoctrine()->getManager();
            $em->persist($datasource);
            $em->flush();
        return $this->render("DataSourceBundle:Default:stp4.html.twig", array(
        ));
    }

}
