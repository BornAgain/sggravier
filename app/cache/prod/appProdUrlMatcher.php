<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // admin_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        // ab_entities_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::addAction',  '_route' => 'ab_entities_add',);
        }

        // admin_entities_update
        if ($pathinfo === '/update') {
            return array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::updateAction',  '_route' => 'admin_entities_update',);
        }

        // admin_entities_list
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::listAction',  '_route' => 'admin_entities_list',);
        }

        // admin_entities_see
        if ($pathinfo === '/see') {
            return array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::seeAction',  '_route' => 'admin_entities_see',);
        }

        // sample_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sample_default_index');
            }

            return array (  '_controller' => 'SampleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sample_default_index',);
        }

        // sb_user_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'SampleBundle\\Controller\\UserController::addAction',  '_route' => 'sb_user_add',);
        }

        // sb_user_update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sb_user_update')), array (  '_controller' => 'SampleBundle\\Controller\\UserController::updateAction',));
        }

        // sb_user_list
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'SampleBundle\\Controller\\UserController::ListAction',  '_route' => 'sb_user_list',);
        }

        // sb_user_see
        if (0 === strpos($pathinfo, '/See') && preg_match('#^/See/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sb_user_see')), array (  '_controller' => 'SampleBundle\\Controller\\UserController::SeeAction',));
        }

        if (0 === strpos($pathinfo, '/datasource')) {
            // home
            if (rtrim($pathinfo, '/') === '/datasource') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home');
                }

                return array (  '_controller' => 'DataSourceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
            }

            // ds_default_add
            if ($pathinfo === '/datasource/add') {
                return array (  '_controller' => 'DataSourceBundle\\Controller\\DefaultController::addAction',  '_route' => 'ds_default_add',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
