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

        if (0 === strpos($pathinfo, '/dashboard')) {
            // db_dashboard_add
            if ($pathinfo === '/dashboard/add') {
                return array (  '_controller' => 'DashboardBundle\\Controller\\DashboardController::addAction',  '_route' => 'db_dashboard_add',);
            }

            // db_dashboard_delete
            if (0 === strpos($pathinfo, '/dashboard/delete') && preg_match('#^/dashboard/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_dashboard_delete')), array (  '_controller' => 'DashboardBundle\\Controller\\DashboardController::deleteAction',));
            }

            // db_dashboard_home
            if ($pathinfo === '/dashboard/home') {
                return array (  '_controller' => 'DashboardBundle\\Controller\\DashboardController::homeAction',  '_route' => 'db_dashboard_home',);
            }

            // db_dashboard_list
            if ($pathinfo === '/dashboard/list') {
                return array (  '_controller' => 'DashboardBundle\\Controller\\DashboardController::listAction',  '_route' => 'db_dashboard_list',);
            }

            // db_dashboard_see
            if (0 === strpos($pathinfo, '/dashboard/see') && preg_match('#^/dashboard/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_dashboard_see')), array (  '_controller' => 'DashboardBundle\\Controller\\DashboardController::seeAction',));
            }

            // db_dashboard_update
            if (0 === strpos($pathinfo, '/dashboard/update') && preg_match('#^/dashboard/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_dashboard_update')), array (  '_controller' => 'DashboardBundle\\Controller\\DashboardController::updateAction',));
            }

        }

        // dashboard_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dashboard_default_index');
            }

            return array (  '_controller' => 'DashboardBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dashboard_default_index',);
        }

        if (0 === strpos($pathinfo, '/widget')) {
            // db_widget_add
            if ($pathinfo === '/widget/add') {
                return array (  '_controller' => 'DashboardBundle\\Controller\\WidgetController::addAction',  '_route' => 'db_widget_add',);
            }

            // db_widget_delete
            if (0 === strpos($pathinfo, '/widget/delete') && preg_match('#^/widget/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_widget_delete')), array (  '_controller' => 'DashboardBundle\\Controller\\WidgetController::deleteAction',));
            }

            // db_widget_list
            if ($pathinfo === '/widget/list') {
                return array (  '_controller' => 'DashboardBundle\\Controller\\WidgetController::listAction',  '_route' => 'db_widget_list',);
            }

            // db_widget_see
            if (0 === strpos($pathinfo, '/widget/see') && preg_match('#^/widget/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_widget_see')), array (  '_controller' => 'DashboardBundle\\Controller\\WidgetController::seeAction',));
            }

            // db_widget_update
            if (0 === strpos($pathinfo, '/widget/update') && preg_match('#^/widget/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_widget_update')), array (  '_controller' => 'DashboardBundle\\Controller\\WidgetController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cubes')) {
            // cb_cubes_add
            if ($pathinfo === '/cubes/add') {
                return array (  '_controller' => 'CubesBundle\\Controller\\CubesController::AddAction',  '_route' => 'cb_cubes_add',);
            }

            // cb_cubes_list
            if ($pathinfo === '/cubes/list') {
                return array (  '_controller' => 'CubesBundle\\Controller\\CubesController::ListAction',  '_route' => 'cb_cubes_list',);
            }

        }

        // cubes_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cubes_default_index');
            }

            return array (  '_controller' => 'CubesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cubes_default_index',);
        }

        // admin_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        if (0 === strpos($pathinfo, '/entities')) {
            // ab_entities_add
            if ($pathinfo === '/entities/add') {
                return array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::addAction',  '_route' => 'ab_entities_add',);
            }

            // ab_entities_delete
            if (0 === strpos($pathinfo, '/entities/delete') && preg_match('#^/entities/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_entities_delete')), array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::deleteAction',));
            }

            // ab_entities_list
            if ($pathinfo === '/entities/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::listAction',  '_route' => 'ab_entities_list',);
            }

            // ab_entities_see
            if (0 === strpos($pathinfo, '/entities/see') && preg_match('#^/entities/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_entities_see')), array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::seeAction',));
            }

            // ab_entities_update
            if (0 === strpos($pathinfo, '/entities/update') && preg_match('#^/entities/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_entities_update')), array (  '_controller' => 'AdminBundle\\Controller\\EntitiesController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/roles')) {
            // ab_roles_add
            if ($pathinfo === '/roles/add') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RolesController::addAction',  '_route' => 'ab_roles_add',);
            }

            // ab_roles_delete
            if (0 === strpos($pathinfo, '/roles/delete') && preg_match('#^/roles/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_roles_delete')), array (  '_controller' => 'AdminBundle\\Controller\\RolesController::deleteAction',));
            }

            // ab_roles_list
            if ($pathinfo === '/roles/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RolesController::listAction',  '_route' => 'ab_roles_list',);
            }

            // ab_roles_see
            if (0 === strpos($pathinfo, '/roles/see') && preg_match('#^/roles/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_roles_see')), array (  '_controller' => 'AdminBundle\\Controller\\RolesController::seeAction',));
            }

            // ab_roles_update
            if (0 === strpos($pathinfo, '/roles/update') && preg_match('#^/roles/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_roles_update')), array (  '_controller' => 'AdminBundle\\Controller\\RolesController::updateAction',));
            }

        }

        // ab_security_login
        if ($pathinfo === '/security/login') {
            return array (  '_controller' => 'AdminBundle\\Controller\\SecurityController::LoginAction',  '_route' => 'ab_security_login',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // ab_users_add
            if ($pathinfo === '/users/add') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::addAction',  '_route' => 'ab_users_add',);
            }

            // ab_users_list
            if ($pathinfo === '/users/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::listAction',  '_route' => 'ab_users_list',);
            }

            // ab_users_see
            if (0 === strpos($pathinfo, '/users/see') && preg_match('#^/users/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_users_see')), array (  '_controller' => 'AdminBundle\\Controller\\UsersController::seeAction',));
            }

            // ab_users_update
            if (0 === strpos($pathinfo, '/users/update') && preg_match('#^/users/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_users_update')), array (  '_controller' => 'AdminBundle\\Controller\\UsersController::updateAction',));
            }

            // ab_users_delete
            if (0 === strpos($pathinfo, '/users/delete') && preg_match('#^/users/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ab_users_delete')), array (  '_controller' => 'AdminBundle\\Controller\\UsersController::deleteAction',));
            }

            // login_user
            if ($pathinfo === '/users/login') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::loginAction',  '_route' => 'login_user',);
            }

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
            // Dashboard
            if (rtrim($pathinfo, '/') === '/datasource') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Dashboard');
                }

                return array (  '_controller' => 'DataSourceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Dashboard',);
            }

            // ds_default_add
            if ($pathinfo === '/datasource/add') {
                return array (  '_controller' => 'DataSourceBundle\\Controller\\DefaultController::addAction',  '_route' => 'ds_default_add',);
            }

        }

        // Dashboardpage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Dashboardpage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Dashboardpage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
