<?php

/* ::base.html.twig */
class __TwigTemplate_f4be00f8c3a73304eec0382ab7d029b62adf275b959f17ee40397a9f7da92547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'titlePage' => array($this, 'block_titlePage'),
            'body' => array($this, 'block_body'),
            'plg_javascripts' => array($this, 'block_plg_javascripts'),
            'script_javascripts' => array($this, 'block_script_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_464a4cb853829639aeada868a69f63519ba7d2d801480d9f963ad357c8935b4b = $this->env->getExtension("native_profiler");
        $__internal_464a4cb853829639aeada868a69f63519ba7d2d801480d9f963ad357c8935b4b->enter($__internal_464a4cb853829639aeada868a69f63519ba7d2d801480d9f963ad357c8935b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js') }}\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js') }}\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>SIGMAREPORTS</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        ";
        // line 36
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/themes/grey.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <!-- BEGIN HEADER -->
        <div class=\"page-header navbar navbar-fixed-top\">
            <!-- BEGIN HEADER INNER -->
            <div class=\"page-header-inner \">
                <!-- BEGIN LOGO -->
                <div class=\"page-logo\">
                    <a href=\"index.html\">
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/LogoMakr.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default/>
                    </a>
                    <div class=\"menu-toggler sidebar-toggler\"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class=\"top-menu\">
                    <ul class=\"nav navbar-nav pull-right\">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                <i class=\"icon-bell\"></i>
                                <span class=\"badge badge-default\"> 7 </span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"external\">
                                    <h3>
                                        <span class=\"bold\">12 pending</span> notifications</h3>
                                    <a href=\"page_user_profile_1.html\">view all</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">just now</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-success\">
                                                        <i class=\"fa fa-plus\"></i>
                                                    </span> New user registered. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">3 mins</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-danger\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                    </span> Server #12 overloaded. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">10 mins</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-warning\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </span> Server #2 not responding. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">14 hrs</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-info\">
                                                        <i class=\"fa fa-bullhorn\"></i>
                                                    </span> Application error. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">2 days</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-danger\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                    </span> Database overloaded 68%. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">3 days</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-danger\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                    </span> A user IP blocked. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">4 days</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-warning\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">5 days</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-info\">
                                                        <i class=\"fa fa-bullhorn\"></i>
                                                    </span> System Error. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"time\">9 days</span>
                                                <span class=\"details\">
                                                    <span class=\"label label-sm label-icon label-danger\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                    </span> Storage server failed. </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                <i class=\"icon-envelope-open\"></i>
                                <span class=\"badge badge-default\"> 4 </span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"external\">
                                    <h3>You have
                                        <span class=\"bold\">7 New</span> Messages</h3>
                                    <a href=\"app_inbox.html\">view all</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"photo\">
                                                    <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                <span class=\"subject\">
                                                    <span class=\"from\"> Lisa Wong </span>
                                                    <span class=\"time\">Just Now </span>
                                                </span>
                                                <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"photo\">
                                                    <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                <span class=\"subject\">
                                                    <span class=\"from\"> Richard Doe </span>
                                                    <span class=\"time\">16 mins </span>
                                                </span>
                                                <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"photo\">
                                                    <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                <span class=\"subject\">
                                                    <span class=\"from\"> Bob Nilson </span>
                                                    <span class=\"time\">2 hrs </span>
                                                </span>
                                                <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"photo\">
                                                    <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                <span class=\"subject\">
                                                    <span class=\"from\"> Lisa Wong </span>
                                                    <span class=\"time\">40 mins </span>
                                                </span>
                                                <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"photo\">
                                                    <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout3/img/avatar3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                <span class=\"subject\">
                                                    <span class=\"from\"> Richard Doe </span>
                                                    <span class=\"time\">46 mins </span>
                                                </span>
                                                <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                <i class=\"icon-calendar\"></i>
                                <span class=\"badge badge-default\"> 3 </span>
                            </a>
                            <ul class=\"dropdown-menu extended tasks\">
                                <li class=\"external\">
                                    <h3>You have
                                        <span class=\"bold\">12 pending</span> tasks</h3>
                                    <a href=\"app_todo.html\">view all</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">New release v1.2 </span>
                                                    <span class=\"percent\">30%</span>
                                                </span>
                                                <span class=\"progress\">
                                                    <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">Application deployment</span>
                                                    <span class=\"percent\">65%</span>
                                                </span>
                                                <span class=\"progress\">
                                                    <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">65% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">Mobile app release</span>
                                                    <span class=\"percent\">98%</span>
                                                </span>
                                                <span class=\"progress\">
                                                    <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">98% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">Database migration</span>
                                                    <span class=\"percent\">10%</span>
                                                </span>
                                                <span class=\"progress\">
                                                    <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">10% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">Web server upgrade</span>
                                                    <span class=\"percent\">58%</span>
                                                </span>
                                                <span class=\"progress\">
                                                    <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">58% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">Mobile development</span>
                                                    <span class=\"percent\">85%</span>
                                                </span>
                                                <span class=\"progress\">
                                                    <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">85% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"task\">
                                                    <span class=\"desc\">New UI release</span>
                                                    <span class=\"percent\">38%</span>
                                                </span>
                                                <span class=\"progress progress-striped\">
                                                    <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">38% Complete</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-user\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                <img alt=\"\" class=\"img-circle\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/useravatar.png"), "html", null, true);
        echo "\" />
                                <span class=\"username username-hide-on-mobile\"> User </span>
                                <i class=\"fa fa-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-default\">
                                <li>
                                    <a href=\"page_user_profile_1.html\">
                                        <i class=\"icon-user\"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href=\"app_calendar.html\">
                                        <i class=\"icon-calendar\"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href=\"app_inbox.html\">
                                        <i class=\"icon-envelope-open\"></i> My Inbox
                                        <span class=\"badge badge-danger\"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"app_todo.html\">
                                        <i class=\"icon-rocket\"></i> My Tasks
                                        <span class=\"badge badge-success\"> 7 </span>
                                    </a>
                                </li>
                                <li class=\"divider\"> </li>
                                <li>
                                    <a href=\"page_user_lock_1.html\">
                                        <i class=\"icon-lock\"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href=\"page_user_login_1.html\">
                                        <i class=\"icon-key\"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\">
                                <i class=\"icon-logout\"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            <div class=\"page-sidebar-wrapper\">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                <div class=\"page-sidebar navbar-collapse collapse\">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class=\"sidebar-toggler\"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class=\"nav-item start active open\">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-home\"></i>
                                <span class=\"title\">Dashboard</span>
                                <span class=\"selected\"></span>
                                <span class=\"arrow open\"></span>
                            </a>
                            
                        </li>
                        <li class=\"heading\">
                            <h3 class=\"uppercase\">Features</h3>
                        </li>
                        <li class=\"nav-item  \">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-settings\"></i>
                                <span class=\"title\">ADMIN</span>
                                <span class=\"arrow\"></span>
                            </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"";
        // line 457
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\" class=\"nav-link \">
                                            <span class=\"title\">Roles</span>       
                                        </a> 
                                        
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"";
        // line 463
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\" class=\"nav-link \">
                                            <span class=\"title\">Users</span>       
                                        </a>
                                    </li>
                                    
                                    <li class=\"nav-item  \">
                                        <a href=\"";
        // line 469
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\" class=\"nav-link \">
                                            <span class=\"title\">Entities</span>       
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"";
        // line 474
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\" class=\"nav-link \">
                                            <span class=\"title\">Dashboard</span>       
                                        </a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"nav-item  \">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-diamond\"></i>
                                <span class=\"title\">DATA SOURCES</span>
                                <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item  \">
                                    <a href=\"form_controls.html\" class=\"nav-link \">
                                        <span class=\"title\">Add</span>       
                                    </a>                                  
                                </li>
                                
                                <li class=\"nav-item  \">
                                    <a href=\"form_controls.html\" class=\"nav-link \">
                                        <span class=\"title\">List</span>       
                                    </a>                                  
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item  \">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-layers\"></i>
                                <span class=\"title\">CUBES</span>
                                <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item  \">
                                    <a href=\"";
        // line 508
        echo $this->env->getExtension('routing')->getPath("cb_cubes_add");
        echo "\" class=\"nav-link \">
                                        <span class=\"title\">Add</span>       
                                    </a>                                  
                                </li>
                                
                                <li class=\"nav-item  \">
                                    <a href=\"";
        // line 514
        echo $this->env->getExtension('routing')->getPath("cb_cubes_list");
        echo "\" class=\"nav-link nav-toggle\">
                                        <span class=\"title\">Accounting</span>
                                    </a>
                                </li>
                            </ul> 
                             
                        </li>
                        <li class=\"nav-item  \">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-folder\"></i>
                                <span class=\"title\">REPORTS</span>
                                <span class=\"arrow\"></span>
                            </a>
                            <ul class=\"sub-menu\">
                                <li class=\"nav-item  \">
                                    <a href=\"form_controls.html\" class=\"nav-link \">
                                        <span class=\"title\">Add</span>       
                                    </a>                                  
                                </li>
                                
                                <li class=\"nav-item  \">
                                    <a href=\"form_controls.html\" class=\"nav-link \">
                                        <span class=\"title\">List</span>       
                                    </a>                                  
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class=\"theme-panel hidden-xs hidden-sm\">
                        <div class=\"toggler\"> </div>
                        <div class=\"toggler-close\"> </div>
                        <div class=\"theme-options\">
                            <div class=\"theme-option theme-colors clearfix\">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                    <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                    <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                    <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                    <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                    <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                </ul>
                            </div>
                            <div class=\"theme-option\">
                                <span> Theme Style </span>
                                <select class=\"layout-style-option form-control input-sm\">
                                    <option value=\"square\" selected=\"selected\">Square corners</option>
                                    <option value=\"rounded\">Rounded corners</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Layout </span>
                                <select class=\"layout-option form-control input-sm\">
                                    <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                    <option value=\"boxed\">Boxed</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Header </span>
                                <select class=\"page-header-option form-control input-sm\">
                                    <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                    <option value=\"default\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Top Menu Dropdown</span>
                                <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                    <option value=\"light\" selected=\"selected\">Light</option>
                                    <option value=\"dark\">Dark</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Mode</span>
                                <select class=\"sidebar-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Menu </span>
                                <select class=\"sidebar-menu-option form-control input-sm\">
                                    <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                    <option value=\"hover\">Hover</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Style </span>
                                <select class=\"sidebar-style-option form-control input-sm\">
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                    <option value=\"light\">Light</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Sidebar Position </span>
                                <select class=\"sidebar-pos-option form-control input-sm\">
                                    <option value=\"left\" selected=\"selected\">Left</option>
                                    <option value=\"right\">Right</option>
                                </select>
                            </div>
                            <div class=\"theme-option\">
                                <span> Footer </span>
                                <select class=\"page-footer-option form-control input-sm\">
                                    <option value=\"fixed\">Fixed</option>
                                    <option value=\"default\" selected=\"selected\">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            ";
        // line 639
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 649
        echo "                        </ul>
                        <div class=\"page-toolbar\">
                            <div id=\"dashboard-report-range\" class=\"pull-right tooltips btn btn-sm\" data-container=\"body\" data-placement=\"bottom\" data-original-title=\"Change dashboard date range\">
                                <i class=\"icon-calendar\"></i>&nbsp;
                                <span class=\"thin uppercase hidden-xs\">July 7, 2016</span>&nbsp;
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class=\"page-title\"> 
                    ";
        // line 660
        $this->displayBlock('titlePage', $context, $blocks);
        // line 661
        echo "                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    ";
        // line 665
        $this->displayBlock('body', $context, $blocks);
        // line 666
        echo "                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                <i class=\"icon-login\"></i>
            </a>
            <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
                <div class=\"page-quick-sidebar\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                                <span class=\"badge badge-danger\">2</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                                <span class=\"badge badge-success\">7</span>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                                <i class=\"fa fa-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-bell\"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-info\"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-speech\"></i> Activities </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-settings\"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                            <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                                <h3 class=\"list-heading\">Staff</h3>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">8</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Bob Nilson</h4>
                                            <div class=\"media-heading-sub\"> Project Manager </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Nick Larson</h4>
                                            <div class=\"media-heading-sub\"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">3</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar4.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Deon Hubert</h4>
                                            <div class=\"media-heading-sub\"> CTO </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Ella Wong</h4>
                                            <div class=\"media-heading-sub\"> CEO </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class=\"list-heading\">Customers</h3>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-warning\">2</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar6.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Lara Kunis</h4>
                                            <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"label label-sm label-success\">new</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar7.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                            <div class=\"media-heading-sub\"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar8.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Lisa Stone</h4>
                                            <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">7</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar9.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Deon Portalatin</h4>
                                            <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar10.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Irina Savikova</h4>
                                            <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">4</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar11.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Maria Gomez</h4>
                                            <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"page-quick-sidebar-item\">
                                <div class=\"page-quick-sidebar-chat-user\">
                                    <div class=\"page-quick-sidebar-nav\">
                                        <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                            <i class=\"icon-arrow-left\"></i>Back</a>
                                    </div>
                                    <div class=\"page-quick-sidebar-chat-user-messages\">
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 849
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:16</span>
                                                <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:40</span>
                                                <span class=\"body\"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:40</span>
                                                <span class=\"body\"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"page-quick-sidebar-chat-user-form\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                            <div class=\"input-group-btn\">
                                                <button type=\"button\" class=\"btn green\">
                                                    <i class=\"icon-paper-clip\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                            <div class=\"page-quick-sidebar-alerts-list\">
                                <h3 class=\"list-heading\">General</h3>
                                <ul class=\"feeds list-items\">
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-check\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 4 pending tasks.
                                                        <span class=\"label label-sm label-warning \"> Take action
                                                            <i class=\"fa fa-share\"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bar-chart-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> New order received with
                                                        <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                        <span class=\"label label-sm label-warning\"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-default\">
                                                            <i class=\"fa fa-briefcase\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class=\"list-heading\">System</h3>
                                <ul class=\"feeds list-items\">
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-check\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 4 pending tasks.
                                                        <span class=\"label label-sm label-warning \"> Take action
                                                            <i class=\"fa fa-share\"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-danger\">
                                                            <i class=\"fa fa-bar-chart-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> New order received with
                                                        <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-warning\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                        <span class=\"label label-sm label-default \"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-briefcase\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                            <div class=\"page-quick-sidebar-settings-list\">
                                <h3 class=\"list-heading\">General Settings</h3>
                                <ul class=\"list-items borderless\">
                                    <li> Enable Notifications
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Allow Tracking
                                        <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Log Errors
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Auto Sumbit Issues
                                        <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Enable SMS Alerts
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                </ul>
                                <h3 class=\"list-heading\">System Settings</h3>
                                <ul class=\"list-items borderless\">
                                    <li> Security Level
                                        <select class=\"form-control input-inline input-sm input-small\">
                                            <option value=\"1\">Normal</option>
                                            <option value=\"2\" selected>Medium</option>
                                            <option value=\"e\">High</option>
                                        </select>
                                    </li>
                                    <li> Failed Email Attempts
                                        <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                    <li> Secondary SMTP Port
                                        <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                    <li> Notify On System Error
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Notify On SMTP Error
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                </ul>
                                <div class=\"inner-content\">
                                    <button class=\"btn btn-success\">
                                        <i class=\"icon-settings\"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class=\"page-footer\">
            <div class=\"page-footer-inner\"> 2014 &copy; ITSS.
                <a href=\"http://www.itssglobal.com\" title=\"ITSS\" target=\"_blank\">ITSS</a>
            </div>
            <div class=\"scroll-to-top\">
                <i class=\"icon-arrow-up\"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src=\"";
        // line 1244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
<![endif]-->
        
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 1249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1251
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        ";
        // line 1259
        $this->displayBlock('plg_javascripts', $context, $blocks);
        // line 1260
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        // line 1289
        echo "        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 1291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        ";
        // line 1294
        $this->displayBlock('script_javascripts', $context, $blocks);
        echo " 
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 1297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>";
        
        $__internal_464a4cb853829639aeada868a69f63519ba7d2d801480d9f963ad357c8935b4b->leave($__internal_464a4cb853829639aeada868a69f63519ba7d2d801480d9f963ad357c8935b4b_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15a7f3b89686a2de8fd66514b5193d8404d32163f0a46ba106724c3d0eb0c1b8 = $this->env->getExtension("native_profiler");
        $__internal_15a7f3b89686a2de8fd66514b5193d8404d32163f0a46ba106724c3d0eb0c1b8->enter($__internal_15a7f3b89686a2de8fd66514b5193d8404d32163f0a46ba106724c3d0eb0c1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15a7f3b89686a2de8fd66514b5193d8404d32163f0a46ba106724c3d0eb0c1b8->leave($__internal_15a7f3b89686a2de8fd66514b5193d8404d32163f0a46ba106724c3d0eb0c1b8_prof);

    }

    // line 639
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_99740c58ea15aac9fe4ef4ffb72e6a304ecfed74df9c4c43423aa37410ad74eb = $this->env->getExtension("native_profiler");
        $__internal_99740c58ea15aac9fe4ef4ffb72e6a304ecfed74df9c4c43423aa37410ad74eb->enter($__internal_99740c58ea15aac9fe4ef4ffb72e6a304ecfed74df9c4c43423aa37410ad74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 640
        echo "                            <li>
                                <a href=\"index.html\">Home</a>
                                <i class=\"fa fa-circle\"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>

                            ";
        
        $__internal_99740c58ea15aac9fe4ef4ffb72e6a304ecfed74df9c4c43423aa37410ad74eb->leave($__internal_99740c58ea15aac9fe4ef4ffb72e6a304ecfed74df9c4c43423aa37410ad74eb_prof);

    }

    // line 660
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_58e8dd57cb86a9bd6b169e193de2fc682e2a5c37e9668ed3a8f17f59ba4c2ed0 = $this->env->getExtension("native_profiler");
        $__internal_58e8dd57cb86a9bd6b169e193de2fc682e2a5c37e9668ed3a8f17f59ba4c2ed0->enter($__internal_58e8dd57cb86a9bd6b169e193de2fc682e2a5c37e9668ed3a8f17f59ba4c2ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        
        $__internal_58e8dd57cb86a9bd6b169e193de2fc682e2a5c37e9668ed3a8f17f59ba4c2ed0->leave($__internal_58e8dd57cb86a9bd6b169e193de2fc682e2a5c37e9668ed3a8f17f59ba4c2ed0_prof);

    }

    // line 665
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a386006eacd0bd84d0feeae5f0a344092eda3b7b2b51e5c02bc80862c768e7 = $this->env->getExtension("native_profiler");
        $__internal_44a386006eacd0bd84d0feeae5f0a344092eda3b7b2b51e5c02bc80862c768e7->enter($__internal_44a386006eacd0bd84d0feeae5f0a344092eda3b7b2b51e5c02bc80862c768e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44a386006eacd0bd84d0feeae5f0a344092eda3b7b2b51e5c02bc80862c768e7->leave($__internal_44a386006eacd0bd84d0feeae5f0a344092eda3b7b2b51e5c02bc80862c768e7_prof);

    }

    // line 1259
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_c5e771ffbcef69adcd42cc71d78934640028db79d381e291de8d2777d1081a4c = $this->env->getExtension("native_profiler");
        $__internal_c5e771ffbcef69adcd42cc71d78934640028db79d381e291de8d2777d1081a4c->enter($__internal_c5e771ffbcef69adcd42cc71d78934640028db79d381e291de8d2777d1081a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        
        $__internal_c5e771ffbcef69adcd42cc71d78934640028db79d381e291de8d2777d1081a4c->leave($__internal_c5e771ffbcef69adcd42cc71d78934640028db79d381e291de8d2777d1081a4c_prof);

    }

    // line 1294
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_82237c61500b303ae6f6ba8275d4e56a2c5961d529207a8fe50b341268af1263 = $this->env->getExtension("native_profiler");
        $__internal_82237c61500b303ae6f6ba8275d4e56a2c5961d529207a8fe50b341268af1263->enter($__internal_82237c61500b303ae6f6ba8275d4e56a2c5961d529207a8fe50b341268af1263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        
        $__internal_82237c61500b303ae6f6ba8275d4e56a2c5961d529207a8fe50b341268af1263->leave($__internal_82237c61500b303ae6f6ba8275d4e56a2c5961d529207a8fe50b341268af1263_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1559 => 1294,  1548 => 1259,  1537 => 665,  1526 => 660,  1511 => 640,  1505 => 639,  1494 => 36,  1482 => 1299,  1478 => 1298,  1474 => 1297,  1468 => 1294,  1462 => 1291,  1458 => 1289,  1454 => 1261,  1449 => 1260,  1447 => 1259,  1441 => 1256,  1437 => 1255,  1433 => 1254,  1429 => 1253,  1425 => 1252,  1421 => 1251,  1417 => 1250,  1413 => 1249,  1406 => 1245,  1402 => 1244,  1049 => 894,  1037 => 885,  1025 => 876,  1013 => 867,  1001 => 858,  989 => 849,  977 => 840,  965 => 831,  953 => 822,  933 => 805,  920 => 795,  910 => 788,  896 => 777,  885 => 769,  871 => 758,  855 => 745,  845 => 738,  832 => 728,  822 => 721,  765 => 666,  763 => 665,  757 => 661,  755 => 660,  742 => 649,  740 => 639,  612 => 514,  603 => 508,  566 => 474,  558 => 469,  549 => 463,  540 => 457,  440 => 360,  309 => 232,  295 => 221,  281 => 210,  267 => 199,  253 => 188,  120 => 58,  104 => 45,  100 => 44,  96 => 43,  90 => 40,  86 => 39,  82 => 37,  80 => 36,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!-- */
/* Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5*/
/* Version: 4.5.1*/
/* Author: KeenThemes*/
/* Website: http://www.keenthemes.com/*/
/* Contact: support@keenthemes.com*/
/* Follow: www.twitter.com/keenthemes*/
/* Like: www.facebook.com/keenthemes*/
/* Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes*/
/* License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.*/
/* -->*/
/* <!--[if IE 8]> <html lang="en" class="ie8 no-js') }}"> <![endif]-->*/
/* <!--[if IE 9]> <html lang="en" class="ie9 no-js') }}"> <![endif]-->*/
/* <!--[if !IE]><!-->*/
/* <html lang="en">*/
/*     <!--<![endif]-->*/
/*     <!-- BEGIN HEAD -->*/
/* */
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title>SIGMAREPORTS</title>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1" name="viewport" />*/
/*         <meta content="" name="description" />*/
/*         <meta content="" name="author" />*/
/*         <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*         <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END GLOBAL MANDATORY STYLES -->*/
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/*         <!-- BEGIN THEME GLOBAL STYLES -->*/
/*         <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*         <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END THEME GLOBAL STYLES -->*/
/*         <!-- BEGIN THEME LAYOUT STYLES -->*/
/*         <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/layouts/layout/css/themes/grey.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />*/
/*         <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END THEME LAYOUT STYLES -->*/
/*         <link rel="shortcut icon" href="favicon.ico" /> </head>*/
/*     <!-- END HEAD -->*/
/* */
/*     <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">*/
/*         <!-- BEGIN HEADER -->*/
/*         <div class="page-header navbar navbar-fixed-top">*/
/*             <!-- BEGIN HEADER INNER -->*/
/*             <div class="page-header-inner ">*/
/*                 <!-- BEGIN LOGO -->*/
/*                 <div class="page-logo">*/
/*                     <a href="index.html">*/
/*                         <img src="{{ asset('assets/layouts/layout/img/LogoMakr.png')}}" alt="logo" class="logo-default/>*/
/*                     </a>*/
/*                     <div class="menu-toggler sidebar-toggler"> </div>*/
/*                 </div>*/
/*                 <!-- END LOGO -->*/
/*                 <!-- BEGIN RESPONSIVE MENU TOGGLER -->*/
/*                 <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>*/
/*                 <!-- END RESPONSIVE MENU TOGGLER -->*/
/*                 <!-- BEGIN TOP NAVIGATION MENU -->*/
/*                 <div class="top-menu">*/
/*                     <ul class="nav navbar-nav pull-right">*/
/*                         <!-- BEGIN NOTIFICATION DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/*                                 <i class="icon-bell"></i>*/
/*                                 <span class="badge badge-default"> 7 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class="external">*/
/*                                     <h3>*/
/*                                         <span class="bold">12 pending</span> notifications</h3>*/
/*                                     <a href="page_user_profile_1.html">view all</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">just now</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-success">*/
/*                                                         <i class="fa fa-plus"></i>*/
/*                                                     </span> New user registered. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">3 mins</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-danger">*/
/*                                                         <i class="fa fa-bolt"></i>*/
/*                                                     </span> Server #12 overloaded. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">10 mins</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-warning">*/
/*                                                         <i class="fa fa-bell-o"></i>*/
/*                                                     </span> Server #2 not responding. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">14 hrs</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-info">*/
/*                                                         <i class="fa fa-bullhorn"></i>*/
/*                                                     </span> Application error. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">2 days</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-danger">*/
/*                                                         <i class="fa fa-bolt"></i>*/
/*                                                     </span> Database overloaded 68%. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">3 days</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-danger">*/
/*                                                         <i class="fa fa-bolt"></i>*/
/*                                                     </span> A user IP blocked. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">4 days</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-warning">*/
/*                                                         <i class="fa fa-bell-o"></i>*/
/*                                                     </span> Storage Server #4 not responding dfdfdfd. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">5 days</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-info">*/
/*                                                         <i class="fa fa-bullhorn"></i>*/
/*                                                     </span> System Error. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="time">9 days</span>*/
/*                                                 <span class="details">*/
/*                                                     <span class="label label-sm label-icon label-danger">*/
/*                                                         <i class="fa fa-bolt"></i>*/
/*                                                     </span> Storage server failed. </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END NOTIFICATION DROPDOWN -->*/
/*                         <!-- BEGIN INBOX DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/*                                 <i class="icon-envelope-open"></i>*/
/*                                 <span class="badge badge-default"> 4 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class="external">*/
/*                                     <h3>You have*/
/*                                         <span class="bold">7 New</span> Messages</h3>*/
/*                                     <a href="app_inbox.html">view all</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                 <span class="photo">*/
/*                                                     <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg')}}" class="img-circle" alt=""> </span>*/
/*                                                 <span class="subject">*/
/*                                                     <span class="from"> Lisa Wong </span>*/
/*                                                     <span class="time">Just Now </span>*/
/*                                                 </span>*/
/*                                                 <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                 <span class="photo">*/
/*                                                     <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}" class="img-circle" alt=""> </span>*/
/*                                                 <span class="subject">*/
/*                                                     <span class="from"> Richard Doe </span>*/
/*                                                     <span class="time">16 mins </span>*/
/*                                                 </span>*/
/*                                                 <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                 <span class="photo">*/
/*                                                     <img src="{{ asset('assets/layouts/layout3/img/avatar1.jpg') }}" class="img-circle" alt=""> </span>*/
/*                                                 <span class="subject">*/
/*                                                     <span class="from"> Bob Nilson </span>*/
/*                                                     <span class="time">2 hrs </span>*/
/*                                                 </span>*/
/*                                                 <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                 <span class="photo">*/
/*                                                     <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}" class="img-circle" alt=""> </span>*/
/*                                                 <span class="subject">*/
/*                                                     <span class="from"> Lisa Wong </span>*/
/*                                                     <span class="time">40 mins </span>*/
/*                                                 </span>*/
/*                                                 <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">*/
/*                                                 <span class="photo">*/
/*                                                     <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}" class="img-circle" alt=""> </span>*/
/*                                                 <span class="subject">*/
/*                                                     <span class="from"> Richard Doe </span>*/
/*                                                     <span class="time">46 mins </span>*/
/*                                                 </span>*/
/*                                                 <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END INBOX DROPDOWN -->*/
/*                         <!-- BEGIN TODO DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/*                                 <i class="icon-calendar"></i>*/
/*                                 <span class="badge badge-default"> 3 </span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended tasks">*/
/*                                 <li class="external">*/
/*                                     <h3>You have*/
/*                                         <span class="bold">12 pending</span> tasks</h3>*/
/*                                     <a href="app_todo.html">view all</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">New release v1.2 </span>*/
/*                                                     <span class="percent">30%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress">*/
/*                                                     <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">40% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">Application deployment</span>*/
/*                                                     <span class="percent">65%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress">*/
/*                                                     <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">65% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">Mobile app release</span>*/
/*                                                     <span class="percent">98%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress">*/
/*                                                     <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">98% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">Database migration</span>*/
/*                                                     <span class="percent">10%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress">*/
/*                                                     <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">10% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">Web server upgrade</span>*/
/*                                                     <span class="percent">58%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress">*/
/*                                                     <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">58% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">Mobile development</span>*/
/*                                                     <span class="percent">85%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress">*/
/*                                                     <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">85% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span class="task">*/
/*                                                     <span class="desc">New UI release</span>*/
/*                                                     <span class="percent">38%</span>*/
/*                                                 </span>*/
/*                                                 <span class="progress progress-striped">*/
/*                                                     <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">*/
/*                                                         <span class="sr-only">38% Complete</span>*/
/*                                                     </span>*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END TODO DROPDOWN -->*/
/*                         <!-- BEGIN USER LOGIN DROPDOWN -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="dropdown dropdown-user">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/*                                 <img alt="" class="img-circle" src="{{ asset('assets/layouts/layout/img/useravatar.png') }}" />*/
/*                                 <span class="username username-hide-on-mobile"> User </span>*/
/*                                 <i class="fa fa-angle-down"></i>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-menu-default">*/
/*                                 <li>*/
/*                                     <a href="page_user_profile_1.html">*/
/*                                         <i class="icon-user"></i> My Profile </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="app_calendar.html">*/
/*                                         <i class="icon-calendar"></i> My Calendar </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="app_inbox.html">*/
/*                                         <i class="icon-envelope-open"></i> My Inbox*/
/*                                         <span class="badge badge-danger"> 3 </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="app_todo.html">*/
/*                                         <i class="icon-rocket"></i> My Tasks*/
/*                                         <span class="badge badge-success"> 7 </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="divider"> </li>*/
/*                                 <li>*/
/*                                     <a href="page_user_lock_1.html">*/
/*                                         <i class="icon-lock"></i> Lock Screen </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="page_user_login_1.html">*/
/*                                         <i class="icon-key"></i> Log Out </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- END USER LOGIN DROPDOWN -->*/
/*                         <!-- BEGIN QUICK SIDEBAR TOGGLER -->*/
/*                         <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/*                         <li class="dropdown dropdown-quick-sidebar-toggler">*/
/*                             <a href="javascript:;" class="dropdown-toggle">*/
/*                                 <i class="icon-logout"></i>*/
/*                             </a>*/
/*                         </li>*/
/*                         <!-- END QUICK SIDEBAR TOGGLER -->*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- END TOP NAVIGATION MENU -->*/
/*             </div>*/
/*             <!-- END HEADER INNER -->*/
/*         </div>*/
/*         <!-- END HEADER -->*/
/*         <!-- BEGIN HEADER & CONTENT DIVIDER -->*/
/*         <div class="clearfix"> </div>*/
/*         <!-- END HEADER & CONTENT DIVIDER -->*/
/*         <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN SIDEBAR -->*/
/*             <div class="page-sidebar-wrapper">*/
/*                 <!-- BEGIN SIDEBAR -->*/
/*                 <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/*                 <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/*                 <div class="page-sidebar navbar-collapse collapse">*/
/*                     <!-- BEGIN SIDEBAR MENU -->*/
/*                     <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->*/
/*                     <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->*/
/*                     <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->*/
/*                     <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/*                     <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->*/
/*                     <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/*                     <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">*/
/*                         <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->*/
/*                         <li class="sidebar-toggler-wrapper hide">*/
/*                             <!-- BEGIN SIDEBAR TOGGLER BUTTON -->*/
/*                             <div class="sidebar-toggler"> </div>*/
/*                             <!-- END SIDEBAR TOGGLER BUTTON -->*/
/*                         </li>*/
/*                         <li class="nav-item start active open">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-home"></i>*/
/*                                 <span class="title">Dashboard</span>*/
/*                                 <span class="selected"></span>*/
/*                                 <span class="arrow open"></span>*/
/*                             </a>*/
/*                             */
/*                         </li>*/
/*                         <li class="heading">*/
/*                             <h3 class="uppercase">Features</h3>*/
/*                         </li>*/
/*                         <li class="nav-item  ">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-settings"></i>*/
/*                                 <span class="title">ADMIN</span>*/
/*                                 <span class="arrow"></span>*/
/*                             </a>*/
/*                                 <ul class="sub-menu">*/
/*                                     <li class="nav-item  ">*/
/*                                         <a href="{{ path("ab_roles_list") }}" class="nav-link ">*/
/*                                             <span class="title">Roles</span>       */
/*                                         </a> */
/*                                         */
/*                                     </li>*/
/*                                     <li class="nav-item  ">*/
/*                                         <a href="{{ path("ab_users_list") }}" class="nav-link ">*/
/*                                             <span class="title">Users</span>       */
/*                                         </a>*/
/*                                     </li>*/
/*                                     */
/*                                     <li class="nav-item  ">*/
/*                                         <a href="{{ path("ab_entities_list") }}" class="nav-link ">*/
/*                                             <span class="title">Entities</span>       */
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="nav-item  ">*/
/*                                         <a href="{{ path("db_dashboard_list") }}" class="nav-link ">*/
/*                                             <span class="title">Dashboard</span>       */
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                         </li>*/
/*                         <li class="nav-item  ">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-diamond"></i>*/
/*                                 <span class="title">DATA SOURCES</span>*/
/*                                 <span class="arrow"></span>*/
/*                             </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li class="nav-item  ">*/
/*                                     <a href="form_controls.html" class="nav-link ">*/
/*                                         <span class="title">Add</span>       */
/*                                     </a>                                  */
/*                                 </li>*/
/*                                 */
/*                                 <li class="nav-item  ">*/
/*                                     <a href="form_controls.html" class="nav-link ">*/
/*                                         <span class="title">List</span>       */
/*                                     </a>                                  */
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="nav-item  ">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-layers"></i>*/
/*                                 <span class="title">CUBES</span>*/
/*                                 <span class="arrow"></span>*/
/*                             </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li class="nav-item  ">*/
/*                                     <a href="{{ path("cb_cubes_add") }}" class="nav-link ">*/
/*                                         <span class="title">Add</span>       */
/*                                     </a>                                  */
/*                                 </li>*/
/*                                 */
/*                                 <li class="nav-item  ">*/
/*                                     <a href="{{ path("cb_cubes_list") }}" class="nav-link nav-toggle">*/
/*                                         <span class="title">Accounting</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul> */
/*                              */
/*                         </li>*/
/*                         <li class="nav-item  ">*/
/*                             <a href="javascript:;" class="nav-link nav-toggle">*/
/*                                 <i class="icon-folder"></i>*/
/*                                 <span class="title">REPORTS</span>*/
/*                                 <span class="arrow"></span>*/
/*                             </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li class="nav-item  ">*/
/*                                     <a href="form_controls.html" class="nav-link ">*/
/*                                         <span class="title">Add</span>       */
/*                                     </a>                                  */
/*                                 </li>*/
/*                                 */
/*                                 <li class="nav-item  ">*/
/*                                     <a href="form_controls.html" class="nav-link ">*/
/*                                         <span class="title">List</span>       */
/*                                     </a>                                  */
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                     <!-- END SIDEBAR MENU -->*/
/*                     <!-- END SIDEBAR MENU -->*/
/*                 </div>*/
/*                 <!-- END SIDEBAR -->*/
/*             </div>*/
/*             <!-- END SIDEBAR -->*/
/*             <!-- BEGIN CONTENT -->*/
/*             <div class="page-content-wrapper">*/
/*                 <!-- BEGIN CONTENT BODY -->*/
/*                 <div class="page-content">*/
/*                     <!-- BEGIN PAGE HEADER-->*/
/*                     <!-- BEGIN THEME PANEL -->*/
/*                     <div class="theme-panel hidden-xs hidden-sm">*/
/*                         <div class="toggler"> </div>*/
/*                         <div class="toggler-close"> </div>*/
/*                         <div class="theme-options">*/
/*                             <div class="theme-option theme-colors clearfix">*/
/*                                 <span> THEME COLOR </span>*/
/*                                 <ul>*/
/*                                     <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>*/
/*                                     <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>*/
/*                                     <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>*/
/*                                     <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>*/
/*                                     <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>*/
/*                                     <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Theme Style </span>*/
/*                                 <select class="layout-style-option form-control input-sm">*/
/*                                     <option value="square" selected="selected">Square corners</option>*/
/*                                     <option value="rounded">Rounded corners</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Layout </span>*/
/*                                 <select class="layout-option form-control input-sm">*/
/*                                     <option value="fluid" selected="selected">Fluid</option>*/
/*                                     <option value="boxed">Boxed</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Header </span>*/
/*                                 <select class="page-header-option form-control input-sm">*/
/*                                     <option value="fixed" selected="selected">Fixed</option>*/
/*                                     <option value="default">Default</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Top Menu Dropdown</span>*/
/*                                 <select class="page-header-top-dropdown-style-option form-control input-sm">*/
/*                                     <option value="light" selected="selected">Light</option>*/
/*                                     <option value="dark">Dark</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Sidebar Mode</span>*/
/*                                 <select class="sidebar-option form-control input-sm">*/
/*                                     <option value="fixed">Fixed</option>*/
/*                                     <option value="default" selected="selected">Default</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Sidebar Menu </span>*/
/*                                 <select class="sidebar-menu-option form-control input-sm">*/
/*                                     <option value="accordion" selected="selected">Accordion</option>*/
/*                                     <option value="hover">Hover</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Sidebar Style </span>*/
/*                                 <select class="sidebar-style-option form-control input-sm">*/
/*                                     <option value="default" selected="selected">Default</option>*/
/*                                     <option value="light">Light</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Sidebar Position </span>*/
/*                                 <select class="sidebar-pos-option form-control input-sm">*/
/*                                     <option value="left" selected="selected">Left</option>*/
/*                                     <option value="right">Right</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="theme-option">*/
/*                                 <span> Footer </span>*/
/*                                 <select class="page-footer-option form-control input-sm">*/
/*                                     <option value="fixed">Fixed</option>*/
/*                                     <option value="default" selected="selected">Default</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- END THEME PANEL -->*/
/*                     <!-- BEGIN PAGE BAR -->*/
/*                     <div class="page-bar">*/
/*                         <ul class="page-breadcrumb">*/
/*                             {% block pageTitle %}*/
/*                             <li>*/
/*                                 <a href="index.html">Home</a>*/
/*                                 <i class="fa fa-circle"></i>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span>Dashboard</span>*/
/*                             </li>*/
/* */
/*                             {% endblock %}*/
/*                         </ul>*/
/*                         <div class="page-toolbar">*/
/*                             <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">*/
/*                                 <i class="icon-calendar"></i>&nbsp;*/
/*                                 <span class="thin uppercase hidden-xs">July 7, 2016</span>&nbsp;*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- END PAGE BAR -->*/
/*                     <!-- BEGIN PAGE TITLE-->*/
/*                     <h3 class="page-title"> */
/*                     {% block titlePage %}{% endblock %}*/
/*                     </h3>*/
/*                     <!-- END PAGE TITLE-->*/
/*                     <!-- END PAGE HEADER-->*/
/*                     <!-- BEGIN DASHBOARD STATS 1-->*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*                 <!-- END CONTENT BODY -->*/
/*             </div>*/
/*             <!-- END CONTENT -->*/
/*             <!-- BEGIN QUICK SIDEBAR -->*/
/*             <a href="javascript:;" class="page-quick-sidebar-toggler">*/
/*                 <i class="icon-login"></i>*/
/*             </a>*/
/*             <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">*/
/*                 <div class="page-quick-sidebar">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active">*/
/*                             <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users*/
/*                                 <span class="badge badge-danger">2</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts*/
/*                                 <span class="badge badge-success">7</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More*/
/*                                 <i class="fa fa-angle-down"></i>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu pull-right">*/
/*                                 <li>*/
/*                                     <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/
/*                                         <i class="icon-bell"></i> Alerts </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/
/*                                         <i class="icon-info"></i> Notifications </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/
/*                                         <i class="icon-speech"></i> Activities </a>*/
/*                                 </li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li>*/
/*                                     <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/
/*                                         <i class="icon-settings"></i> Settings </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">*/
/*                             <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">*/
/*                                 <h3 class="list-heading">Staff</h3>*/
/*                                 <ul class="media-list list-items">*/
/*                                     <li class="media">*/
/*                                         <div class="media-status">*/
/*                                             <span class="badge badge-success">8</span>*/
/*                                         </div>*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar3.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Bob Nilson</h4>*/
/*                                             <div class="media-heading-sub"> Project Manager </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar1.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Nick Larson</h4>*/
/*                                             <div class="media-heading-sub"> Art Director </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <div class="media-status">*/
/*                                             <span class="badge badge-danger">3</span>*/
/*                                         </div>*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar4.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Deon Hubert</h4>*/
/*                                             <div class="media-heading-sub"> CTO </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar2.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Ella Wong</h4>*/
/*                                             <div class="media-heading-sub"> CEO </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <h3 class="list-heading">Customers</h3>*/
/*                                 <ul class="media-list list-items">*/
/*                                     <li class="media">*/
/*                                         <div class="media-status">*/
/*                                             <span class="badge badge-warning">2</span>*/
/*                                         </div>*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar6.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Lara Kunis</h4>*/
/*                                             <div class="media-heading-sub"> CEO, Loop Inc </div>*/
/*                                             <div class="media-heading-small"> Last seen 03:10 AM </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <div class="media-status">*/
/*                                             <span class="label label-sm label-success">new</span>*/
/*                                         </div>*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar7.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Ernie Kyllonen</h4>*/
/*                                             <div class="media-heading-sub"> Project Manager,*/
/*                                                 <br> SmartBizz PTL </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar8.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Lisa Stone</h4>*/
/*                                             <div class="media-heading-sub"> CTO, Keort Inc </div>*/
/*                                             <div class="media-heading-small"> Last seen 13:10 PM </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <div class="media-status">*/
/*                                             <span class="badge badge-success">7</span>*/
/*                                         </div>*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar9.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Deon Portalatin</h4>*/
/*                                             <div class="media-heading-sub"> CFO, H&D LTD </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar10.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Irina Savikova</h4>*/
/*                                             <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="media">*/
/*                                         <div class="media-status">*/
/*                                             <span class="badge badge-danger">4</span>*/
/*                                         </div>*/
/*                                         <img class="media-object" src="{{ asset('assets/layouts/layout/img/avatar11.jpg') }}" alt="...">*/
/*                                         <div class="media-body">*/
/*                                             <h4 class="media-heading">Maria Gomez</h4>*/
/*                                             <div class="media-heading-sub"> Manager, Infomatic Inc </div>*/
/*                                             <div class="media-heading-small"> Last seen 03:10 AM </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="page-quick-sidebar-item">*/
/*                                 <div class="page-quick-sidebar-chat-user">*/
/*                                     <div class="page-quick-sidebar-nav">*/
/*                                         <a href="javascript:;" class="page-quick-sidebar-back-to-list">*/
/*                                             <i class="icon-arrow-left"></i>Back</a>*/
/*                                     </div>*/
/*                                     <div class="page-quick-sidebar-chat-user-messages">*/
/*                                         <div class="post out">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar3.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Bob Nilson</a>*/
/*                                                 <span class="datetime">20:15</span>*/
/*                                                 <span class="body"> When could you send me the report ? </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post in">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar2.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Ella Wong</a>*/
/*                                                 <span class="datetime">20:15</span>*/
/*                                                 <span class="body"> Its almost done. I will be sending it shortly </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post out">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar3.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Bob Nilson</a>*/
/*                                                 <span class="datetime">20:15</span>*/
/*                                                 <span class="body"> Alright. Thanks! :) </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post in">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar2.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Ella Wong</a>*/
/*                                                 <span class="datetime">20:16</span>*/
/*                                                 <span class="body"> You are most welcome. Sorry for the delay. </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post out">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar3.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Bob Nilson</a>*/
/*                                                 <span class="datetime">20:17</span>*/
/*                                                 <span class="body"> No probs. Just take your time :) </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post in">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar2.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Ella Wong</a>*/
/*                                                 <span class="datetime">20:40</span>*/
/*                                                 <span class="body"> Alright. I just emailed it to you. </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post out">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar3.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Bob Nilson</a>*/
/*                                                 <span class="datetime">20:17</span>*/
/*                                                 <span class="body"> Great! Thanks. Will check it right away. </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post in">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar2.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Ella Wong</a>*/
/*                                                 <span class="datetime">20:40</span>*/
/*                                                 <span class="body"> Please let me know if you have any comment. </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="post out">*/
/*                                             <img class="avatar" alt="" src="{{ asset('assets/layouts/layout/img/avatar3.jpg') }}" />*/
/*                                             <div class="message">*/
/*                                                 <span class="arrow"></span>*/
/*                                                 <a href="javascript:;" class="name">Bob Nilson</a>*/
/*                                                 <span class="datetime">20:17</span>*/
/*                                                 <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="page-quick-sidebar-chat-user-form">*/
/*                                         <div class="input-group">*/
/*                                             <input type="text" class="form-control" placeholder="Type a message here...">*/
/*                                             <div class="input-group-btn">*/
/*                                                 <button type="button" class="btn green">*/
/*                                                     <i class="icon-paper-clip"></i>*/
/*                                                 </button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">*/
/*                             <div class="page-quick-sidebar-alerts-list">*/
/*                                 <h3 class="list-heading">General</h3>*/
/*                                 <ul class="feeds list-items">*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-info">*/
/*                                                         <i class="fa fa-check"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> You have 4 pending tasks.*/
/*                                                         <span class="label label-sm label-warning "> Take action*/
/*                                                             <i class="fa fa-share"></i>*/
/*                                                         </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> Just now </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             <div class="col1">*/
/*                                                 <div class="cont">*/
/*                                                     <div class="cont-col1">*/
/*                                                         <div class="label label-sm label-success">*/
/*                                                             <i class="fa fa-bar-chart-o"></i>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="cont-col2">*/
/*                                                         <div class="desc"> Finance Report for year 2013 has been released. </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col2">*/
/*                                                 <div class="date"> 20 mins </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-danger">*/
/*                                                         <i class="fa fa-user"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> You have 5 pending membership that requires a quick review. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 24 mins </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-info">*/
/*                                                         <i class="fa fa-shopping-cart"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> New order received with*/
/*                                                         <span class="label label-sm label-success"> Reference Number: DR23923 </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 30 mins </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-success">*/
/*                                                         <i class="fa fa-user"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> You have 5 pending membership that requires a quick review. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 24 mins </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-info">*/
/*                                                         <i class="fa fa-bell-o"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> Web server hardware needs to be upgraded.*/
/*                                                         <span class="label label-sm label-warning"> Overdue </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 2 hours </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             <div class="col1">*/
/*                                                 <div class="cont">*/
/*                                                     <div class="cont-col1">*/
/*                                                         <div class="label label-sm label-default">*/
/*                                                             <i class="fa fa-briefcase"></i>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="cont-col2">*/
/*                                                         <div class="desc"> IPO Report for year 2013 has been released. </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col2">*/
/*                                                 <div class="date"> 20 mins </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <h3 class="list-heading">System</h3>*/
/*                                 <ul class="feeds list-items">*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-info">*/
/*                                                         <i class="fa fa-check"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> You have 4 pending tasks.*/
/*                                                         <span class="label label-sm label-warning "> Take action*/
/*                                                             <i class="fa fa-share"></i>*/
/*                                                         </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> Just now </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             <div class="col1">*/
/*                                                 <div class="cont">*/
/*                                                     <div class="cont-col1">*/
/*                                                         <div class="label label-sm label-danger">*/
/*                                                             <i class="fa fa-bar-chart-o"></i>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="cont-col2">*/
/*                                                         <div class="desc"> Finance Report for year 2013 has been released. </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col2">*/
/*                                                 <div class="date"> 20 mins </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-default">*/
/*                                                         <i class="fa fa-user"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> You have 5 pending membership that requires a quick review. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 24 mins </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-info">*/
/*                                                         <i class="fa fa-shopping-cart"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> New order received with*/
/*                                                         <span class="label label-sm label-success"> Reference Number: DR23923 </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 30 mins </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-success">*/
/*                                                         <i class="fa fa-user"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> You have 5 pending membership that requires a quick review. </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 24 mins </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="col1">*/
/*                                             <div class="cont">*/
/*                                                 <div class="cont-col1">*/
/*                                                     <div class="label label-sm label-warning">*/
/*                                                         <i class="fa fa-bell-o"></i>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="cont-col2">*/
/*                                                     <div class="desc"> Web server hardware needs to be upgraded.*/
/*                                                         <span class="label label-sm label-default "> Overdue </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col2">*/
/*                                             <div class="date"> 2 hours </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             <div class="col1">*/
/*                                                 <div class="cont">*/
/*                                                     <div class="cont-col1">*/
/*                                                         <div class="label label-sm label-info">*/
/*                                                             <i class="fa fa-briefcase"></i>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="cont-col2">*/
/*                                                         <div class="desc"> IPO Report for year 2013 has been released. </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col2">*/
/*                                                 <div class="date"> 20 mins </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">*/
/*                             <div class="page-quick-sidebar-settings-list">*/
/*                                 <h3 class="list-heading">General Settings</h3>*/
/*                                 <ul class="list-items borderless">*/
/*                                     <li> Enable Notifications*/
/*                                         <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                     <li> Allow Tracking*/
/*                                         <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                     <li> Log Errors*/
/*                                         <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                     <li> Auto Sumbit Issues*/
/*                                         <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                     <li> Enable SMS Alerts*/
/*                                         <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                 </ul>*/
/*                                 <h3 class="list-heading">System Settings</h3>*/
/*                                 <ul class="list-items borderless">*/
/*                                     <li> Security Level*/
/*                                         <select class="form-control input-inline input-sm input-small">*/
/*                                             <option value="1">Normal</option>*/
/*                                             <option value="2" selected>Medium</option>*/
/*                                             <option value="e">High</option>*/
/*                                         </select>*/
/*                                     </li>*/
/*                                     <li> Failed Email Attempts*/
/*                                         <input class="form-control input-inline input-sm input-small" value="5" /> </li>*/
/*                                     <li> Secondary SMTP Port*/
/*                                         <input class="form-control input-inline input-sm input-small" value="3560" /> </li>*/
/*                                     <li> Notify On System Error*/
/*                                         <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                     <li> Notify On SMTP Error*/
/*                                         <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/
/*                                 </ul>*/
/*                                 <div class="inner-content">*/
/*                                     <button class="btn btn-success">*/
/*                                         <i class="icon-settings"></i> Save Changes</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END QUICK SIDEBAR -->*/
/*         </div>*/
/*         <!-- END CONTAINER -->*/
/*         <!-- BEGIN FOOTER -->*/
/*         <div class="page-footer">*/
/*             <div class="page-footer-inner"> 2014 &copy; ITSS.*/
/*                 <a href="http://www.itssglobal.com" title="ITSS" target="_blank">ITSS</a>*/
/*             </div>*/
/*             <div class="scroll-to-top">*/
/*                 <i class="icon-arrow-up"></i>*/
/*             </div>*/
/*         </div>*/
/*         <!-- END FOOTER -->*/
/*         <!--[if lt IE 9]>*/
/* <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>*/
/* <script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script> */
/* <![endif]-->*/
/*         */
/*         <!-- BEGIN CORE PLUGINS -->*/
/*         <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END CORE PLUGINS -->*/
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         {% block plg_javascripts %}{% endblock %}*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>*/
/*         {#<script src="{{ asset('assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>#}*/
/*         <!-- END PAGE LEVEL PLUGINS -->*/
/*         <!-- BEGIN THEME GLOBAL SCRIPTS -->*/
/*         <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END THEME GLOBAL SCRIPTS -->*/
/*         <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/*         {% block script_javascripts %}{% endblock %} */
/*         <!-- END PAGE LEVEL SCRIPTS -->*/
/*         <!-- BEGIN THEME LAYOUT SCRIPTS -->*/
/*         <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>*/
/*         <!-- END THEME LAYOUT SCRIPTS -->*/
/*     </body>*/
/* */
/* </html>*/