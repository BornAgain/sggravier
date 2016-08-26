<?php

/* AdminBundle:Security:login_1.html.twig */
class __TwigTemplate_77bea0818dc56f14dad4ab8d6a1651023db6bce2022b399f539a29b1f6a8ccdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AdminBundle:Security:login_1.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae7f840dffe74d245fc04935b654e99f5c0383c5c32b2658209411be5fc587d8 = $this->env->getExtension("native_profiler");
        $__internal_ae7f840dffe74d245fc04935b654e99f5c0383c5c32b2658209411be5fc587d8->enter($__internal_ae7f840dffe74d245fc04935b654e99f5c0383c5c32b2658209411be5fc587d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7f840dffe74d245fc04935b654e99f5c0383c5c32b2658209411be5fc587d8->leave($__internal_ae7f840dffe74d245fc04935b654e99f5c0383c5c32b2658209411be5fc587d8_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_fda80890155329ebe3054b596b972dd6a91864b070a9dab2ca786149076a578e = $this->env->getExtension("native_profiler");
        $__internal_fda80890155329ebe3054b596b972dd6a91864b070a9dab2ca786149076a578e->enter($__internal_fda80890155329ebe3054b596b972dd6a91864b070a9dab2ca786149076a578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ab_security_login");
        echo "\">Security</a>
    </li>
";
        
        $__internal_fda80890155329ebe3054b596b972dd6a91864b070a9dab2ca786149076a578e->leave($__internal_fda80890155329ebe3054b596b972dd6a91864b070a9dab2ca786149076a578e_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d0428e3831a93756e34e5b301f4cabd2a43050e727ce4fdeec00d1e8bee9293 = $this->env->getExtension("native_profiler");
        $__internal_4d0428e3831a93756e34e5b301f4cabd2a43050e727ce4fdeec00d1e8bee9293->enter($__internal_4d0428e3831a93756e34e5b301f4cabd2a43050e727ce4fdeec00d1e8bee9293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <!-- BEGIN : LOGIN PAGE 5-2 -->
    <div class=\"user-login-5\">
        <div class=\"row bs-reset\">
            <div class=\"col-md-6 login-container bs-reset\">
                <img class=\"login-logo login-6\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/img/login/login-invert2_.png"), "html", null, true);
        echo "\" alt=\"SIGMAREPORTS\" />
                <div class=\"login-content\">
                    <h1>SIGMAREPORTS</h1>
                    <p> SIGMAREPORTS<sup>TM</sup> provides Banks a simple and easy way to use a secure Reporting platform fully integrated with T24TM. With more than 40 standard built in reports that include regulatory, forex MIS aspects and charts. The solution works with our JBloaderTM tool that provides the extraction of data. </p>
                    ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Error:</span>
                           ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 30
        echo "                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\" class=\"login-form\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <input type=\"text\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control login-username\" id=\"login-username\" name=\"_username\" /> </div>
                            <div class=\"col-xs-6\">
                                <input type=\"password\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control login-password\" id=\"login-password\" name=\"_password\" /> </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <div class=\"rem-password\">
                                    <p>Remember Me
                                        <input type=\"checkbox\" class=\"rem-checkbox\" />
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-sm-8 text-right\">
                                <div class=\"forgot-password\">
                                    <a href=\"javascript:;\">Forgot Password?</a>
                                </div>
                                <button name=\"_submit\" class=\"btn blue\" type=\"submit\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"login-footer\">
                    <div class=\"row bs-reset\">
                        <div class=\"col-xs-4 bs-reset\">
                            <ul class=\"login-social\">
                                <li>
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-social-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-social-twitter\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-social-dribbble\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-xs-8 bs-reset\">
                            <div class=\"login-copyright text-right\">
                                <p>Copyright &copy; Keenthemes 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 bs-reset\">
                <div class=\"login-bg\"> </div>
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-2 -->
    <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->

";
        
        $__internal_4d0428e3831a93756e34e5b301f4cabd2a43050e727ce4fdeec00d1e8bee9293->leave($__internal_4d0428e3831a93756e34e5b301f4cabd2a43050e727ce4fdeec00d1e8bee9293_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  106 => 36,  101 => 34,  95 => 31,  90 => 30,  84 => 27,  79 => 24,  77 => 23,  70 => 19,  64 => 15,  58 => 14,  48 => 11,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="index.html">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_security_login") }}">Security</a>*/
/*     </li>*/
/* {% endblock %}*/
/* {% block fos_user_content %}*/
/*     <!-- BEGIN : LOGIN PAGE 5-2 -->*/
/*     <div class="user-login-5">*/
/*         <div class="row bs-reset">*/
/*             <div class="col-md-6 login-container bs-reset">*/
/*                 <img class="login-logo login-6" src="{{ asset('assets/pages/img/login/login-invert2_.png')}}" alt="SIGMAREPORTS" />*/
/*                 <div class="login-content">*/
/*                     <h1>SIGMAREPORTS</h1>*/
/*                     <p> SIGMAREPORTS<sup>TM</sup> provides Banks a simple and easy way to use a secure Reporting platform fully integrated with T24TM. With more than 40 standard built in reports that include regulatory, forex MIS aspects and charts. The solution works with our JBloaderTM tool that provides the extraction of data. </p>*/
/*                     {% if error %}*/
/*                         <div class="alert alert-danger" role="alert">*/
/*                             <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/*                             <span class="sr-only">Error:</span>*/
/*                            {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="POST" class="login-form">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="row">*/
/*                             <div class="col-xs-6">*/
/*                                 <input type="text" placeholder="{{ 'security.login.username'|trans }}" class="form-control login-username" id="login-username" name="_username" /> </div>*/
/*                             <div class="col-xs-6">*/
/*                                 <input type="password" placeholder="{{ 'security.login.password'|trans }}" class="form-control login-password" id="login-password" name="_password" /> </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <div class="rem-password">*/
/*                                     <p>Remember Me*/
/*                                         <input type="checkbox" class="rem-checkbox" />*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-8 text-right">*/
/*                                 <div class="forgot-password">*/
/*                                     <a href="javascript:;">Forgot Password?</a>*/
/*                                 </div>*/
/*                                 <button name="_submit" class="btn blue" type="submit">{{ 'security.login.submit'|trans }}</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="login-footer">*/
/*                     <div class="row bs-reset">*/
/*                         <div class="col-xs-4 bs-reset">*/
/*                             <ul class="login-social">*/
/*                                 <li>*/
/*                                     <a href="javascript:;">*/
/*                                         <i class="icon-social-facebook"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="javascript:;">*/
/*                                         <i class="icon-social-twitter"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="javascript:;">*/
/*                                         <i class="icon-social-dribbble"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-xs-8 bs-reset">*/
/*                             <div class="login-copyright text-right">*/
/*                                 <p>Copyright &copy; Keenthemes 2015</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 bs-reset">*/
/*                 <div class="login-bg"> </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- END : LOGIN PAGE 5-2 -->*/
/*     <!--[if lt IE 9]>*/
/* <script src="../assets/global/plugins/respond.min.js"></script>*/
/* <script src="../assets/global/plugins/excanvas.min.js"></script> */
/* <![endif]-->*/
/* */
/* {% endblock %}*/
