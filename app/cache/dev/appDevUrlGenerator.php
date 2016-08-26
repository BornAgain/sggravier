<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_dashboard_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DashboardController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_dashboard_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DashboardController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_dashboard_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DashboardController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_dashboard_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DashboardController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_dashboard_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DashboardController::seeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/see',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_dashboard_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DashboardController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_widget_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\WidgetController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/widget/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_widget_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\WidgetController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/widget/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_widget_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\WidgetController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/widget/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_widget_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\WidgetController::seeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/widget/see',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'db_widget_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DashboardBundle\\Controller\\WidgetController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/widget/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cb_cubes_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CubesBundle\\Controller\\CubesController::AddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cubes/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cb_cubes_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CubesBundle\\Controller\\CubesController::ListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cubes/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cubes_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CubesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_entities_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\EntitiesController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/entities/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_entities_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\EntitiesController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/entities/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_entities_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\EntitiesController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/entities/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_entities_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\EntitiesController::seeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/entities/see',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_entities_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\EntitiesController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/entities/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_roles_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RolesController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/roles/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_roles_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RolesController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/roles/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_roles_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RolesController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/roles/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_roles_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RolesController::seeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/roles/see',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_roles_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RolesController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/roles/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SecurityController::LoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/security/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_users_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UsersController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_users_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UsersController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_users_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UsersController::seeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/users/see',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_users_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UsersController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/users/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ab_users_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UsersController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/users/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UsersController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sample_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SampleBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sb_user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SampleBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sb_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SampleBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sb_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SampleBundle\\Controller\\UserController::ListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sb_user_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SampleBundle\\Controller\\UserController::SeeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/See',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataSourceBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/datasource/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_default_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataSourceBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/datasource/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_default_stp1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DataSourceBundle\\Controller\\DefaultController::step1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/datasource/add/step1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_default_stp2' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DataSourceBundle\\Controller\\DefaultController::step2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/datasource/add/step2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_default_stp3' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DataSourceBundle\\Controller\\DefaultController::step3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/datasource/add/step3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Dashboardpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
