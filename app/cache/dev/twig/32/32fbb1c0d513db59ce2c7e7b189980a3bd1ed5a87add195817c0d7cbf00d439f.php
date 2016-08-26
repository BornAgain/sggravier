<?php

/* @Admin/Security/login.html.twig */
class __TwigTemplate_6d9ea94eb1bf76d171abe316136730df7a68b778c85cd82637046685595818cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Admin/Security/login.html.twig", 1);
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
        $__internal_f620e1f7a4216934a0dd88bd6ec5572f22963e86bcb0b53e19ed845958c4c57e = $this->env->getExtension("native_profiler");
        $__internal_f620e1f7a4216934a0dd88bd6ec5572f22963e86bcb0b53e19ed845958c4c57e->enter($__internal_f620e1f7a4216934a0dd88bd6ec5572f22963e86bcb0b53e19ed845958c4c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f620e1f7a4216934a0dd88bd6ec5572f22963e86bcb0b53e19ed845958c4c57e->leave($__internal_f620e1f7a4216934a0dd88bd6ec5572f22963e86bcb0b53e19ed845958c4c57e_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6423c6f7050e9a2d3172f33d7b190f68f13ddad0837624d0dfd14a62b8b5e254 = $this->env->getExtension("native_profiler");
        $__internal_6423c6f7050e9a2d3172f33d7b190f68f13ddad0837624d0dfd14a62b8b5e254->enter($__internal_6423c6f7050e9a2d3172f33d7b190f68f13ddad0837624d0dfd14a62b8b5e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_6423c6f7050e9a2d3172f33d7b190f68f13ddad0837624d0dfd14a62b8b5e254->leave($__internal_6423c6f7050e9a2d3172f33d7b190f68f13ddad0837624d0dfd14a62b8b5e254_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a1e9bdbe6523160d197db5d29abdb18763b93dd5d3484d9325adb77bfda9e1a = $this->env->getExtension("native_profiler");
        $__internal_8a1e9bdbe6523160d197db5d29abdb18763b93dd5d3484d9325adb77bfda9e1a->enter($__internal_8a1e9bdbe6523160d197db5d29abdb18763b93dd5d3484d9325adb77bfda9e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <!-- BEGIN : LOGIN PAGE 5-2 -->
    <div class=\"user-login-5\">
        <div class=\"row bs-reset\">
            <div class=\"col-md-6 login-container bs-reset\">
";
        // line 20
        echo "                <h1 class=\"text-center\">SIGMAREPORTS</h1>
                <div class=\"login-content\">
";
        // line 23
        echo "                    <p> SIGMAREPORTS<sup>TM</sup> provides Banks a simple and easy way to use a secure Reporting platform fully integrated with T24<sup>TM</sup>. With more than 40 standard built in reports that include regulatory, forex MIS aspects and charts. The solution works with our JBloaderTM tool that provides the extraction of data. </p>
                    ";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Error:</span>
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 31
        echo "                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\" class=\"login-form\" style=\"margin-top: 0px;\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <input type=\"text\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control login-username\" id=\"login-username\" name=\"_username\" /> </div>
                            <div class=\"col-xs-6\">
                                <input type=\"password\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control login-password\" id=\"login-password\" name=\"_password\" /> </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <div class=\"rem-password\">
                                    <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        <input type=\"checkbox\" class=\"rem-checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-sm-8 text-right\">
                                <div class=\"forgot-password\">
                                    <a href=\"javascript:;\">Forgot Password?</a>
                                </div>
                                <button name=\"_submit\" class=\"btn blue\" type=\"submit\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"login-footer\">
                    <div class=\"row bs-reset\">
                        <!-- <div class=\"col-xs-4 bs-reset\">
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
                        </div>-->
                        <div class=\"col-xs-offset-4 col-xs-8 bs-reset\">
                            <div class=\"login-copyright text-right\">
                                <p>Copyright &copy; ITSS</p>
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
        
        $__internal_8a1e9bdbe6523160d197db5d29abdb18763b93dd5d3484d9325adb77bfda9e1a->leave($__internal_8a1e9bdbe6523160d197db5d29abdb18763b93dd5d3484d9325adb77bfda9e1a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  114 => 42,  106 => 37,  101 => 35,  95 => 32,  90 => 31,  84 => 28,  79 => 25,  77 => 24,  74 => 23,  70 => 20,  64 => 15,  58 => 14,  48 => 11,  41 => 6,  35 => 5,  11 => 1,);
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
/* {#                <img class="login-logo login-6" src="{{ asset('assets/pages/img/login/login-invert2_.png')}}" alt="SIGMAREPORTS" />#}*/
/*                 <h1 class="text-center">SIGMAREPORTS</h1>*/
/*                 <div class="login-content">*/
/* {#                    <h1>SIGMAREPORTS</h1>#}*/
/*                     <p> SIGMAREPORTS<sup>TM</sup> provides Banks a simple and easy way to use a secure Reporting platform fully integrated with T24<sup>TM</sup>. With more than 40 standard built in reports that include regulatory, forex MIS aspects and charts. The solution works with our JBloaderTM tool that provides the extraction of data. </p>*/
/*                     {% if error %}*/
/*                         <div class="alert alert-danger" role="alert">*/
/*                             <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/*                             <span class="sr-only">Error:</span>*/
/*                             {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="POST" class="login-form" style="margin-top: 0px;">*/
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
/*                                     <p>{{ 'security.login.remember_me'|trans }}*/
/*                                         <input type="checkbox" class="rem-checkbox"  id="remember_me" name="_remember_me" value="on" />*/
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
/*                         <!-- <div class="col-xs-4 bs-reset">*/
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
/*                         </div>-->*/
/*                         <div class="col-xs-offset-4 col-xs-8 bs-reset">*/
/*                             <div class="login-copyright text-right">*/
/*                                 <p>Copyright &copy; ITSS</p>*/
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
