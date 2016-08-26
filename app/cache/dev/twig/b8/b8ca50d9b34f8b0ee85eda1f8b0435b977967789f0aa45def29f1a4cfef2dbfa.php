<?php

/* AdminBundle:Users:add.html.twig */
class __TwigTemplate_2f6d1c81ea2056ff8f0018caf2ea81a55ec8d782b1755e661cefaf5ed04ff8a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Users:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_730559d78134f1952cd7a9d8a4785596a1383112230c4800a23537e2633f4600 = $this->env->getExtension("native_profiler");
        $__internal_730559d78134f1952cd7a9d8a4785596a1383112230c4800a23537e2633f4600->enter($__internal_730559d78134f1952cd7a9d8a4785596a1383112230c4800a23537e2633f4600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_730559d78134f1952cd7a9d8a4785596a1383112230c4800a23537e2633f4600->leave($__internal_730559d78134f1952cd7a9d8a4785596a1383112230c4800a23537e2633f4600_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6809c3d78c0a3f69c54e423a4b144a3ee543ffe6c9dd1ed8edcd87025a2a101b = $this->env->getExtension("native_profiler");
        $__internal_6809c3d78c0a3f69c54e423a4b144a3ee543ffe6c9dd1ed8edcd87025a2a101b->enter($__internal_6809c3d78c0a3f69c54e423a4b144a3ee543ffe6c9dd1ed8edcd87025a2a101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:add";
        
        $__internal_6809c3d78c0a3f69c54e423a4b144a3ee543ffe6c9dd1ed8edcd87025a2a101b->leave($__internal_6809c3d78c0a3f69c54e423a4b144a3ee543ffe6c9dd1ed8edcd87025a2a101b_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0b83b0b9428b7e151b017fc43ea0622de32e8a3303348e43bb961798ae2bf385 = $this->env->getExtension("native_profiler");
        $__internal_0b83b0b9428b7e151b017fc43ea0622de32e8a3303348e43bb961798ae2bf385->enter($__internal_0b83b0b9428b7e151b017fc43ea0622de32e8a3303348e43bb961798ae2bf385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["Dashboard"]) ? $context["Dashboard"] : $this->getContext($context, "Dashboard"))), "html", null, true);
        echo "</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\">Users</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Add</b>
    </li>
";
        
        $__internal_0b83b0b9428b7e151b017fc43ea0622de32e8a3303348e43bb961798ae2bf385->leave($__internal_0b83b0b9428b7e151b017fc43ea0622de32e8a3303348e43bb961798ae2bf385_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8aea484aa6d50ba8a09868982fcfe6fb75e67bbf44457539ff3e18758de481 = $this->env->getExtension("native_profiler");
        $__internal_ee8aea484aa6d50ba8a09868982fcfe6fb75e67bbf44457539ff3e18758de481->enter($__internal_ee8aea484aa6d50ba8a09868982fcfe6fb75e67bbf44457539ff3e18758de481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group col-md-6\">
                <label for=\"users_lastname_id\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "</label>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "users_lastname_id", "class" => "form-control", "placeholder" => "User Last name")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"users_userId_id\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "</label>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("tabindex" => "4", "id" => "users_userid_id", "class" => "form-control", "placeholder" => "User Id")));
        echo "
            </div> 
            <div class=\"form-group col-md-6\">
                <label for=\"users_firstname_id\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "</label>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("tabindex" => "2", "id" => "users_firstname_id", "class" => "form-control", "placeholder" => "User First name")));
        echo "
            </div>  
            <div class=\"form-group col-md-6\">
                <label for=\"users_password_id\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "</label>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("tabindex" => "5", "id" => "users_password_id", "class" => "form-control", "placeholder" => "User Password")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"users_mail_id\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label');
        echo "</label>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("tabindex" => "3", "id" => "users_mail_id", "class" => "form-control", "placeholder" => "User Mail")));
        echo "
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"users_role_id\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleUser", array()), 'label');
        echo "</label>                
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleUser", array()), 'widget', array("attr" => array("tabindex" => "6", "id" => "users_enabled_id", "class" => "form-control", "placeholder" => "User Enabled")));
        echo "
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"users_enabled_id\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>                
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("tabindex" => "6", "id" => "users_enabled_id", "class" => "form-control", "placeholder" => "User Enabled")));
        echo "
            </div>
        
        </div>
        

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>

    ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ee8aea484aa6d50ba8a09868982fcfe6fb75e67bbf44457539ff3e18758de481->leave($__internal_ee8aea484aa6d50ba8a09868982fcfe6fb75e67bbf44457539ff3e18758de481_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Users:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 62,  172 => 59,  162 => 52,  158 => 51,  152 => 48,  148 => 47,  142 => 44,  138 => 43,  132 => 40,  128 => 39,  122 => 36,  118 => 35,  112 => 32,  108 => 31,  102 => 28,  98 => 27,  92 => 24,  86 => 20,  80 => 19,  66 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Users:add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">{{ Dashboard | trans }}</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_users_list") }}">Users</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Add</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_lastname_id">{{ form_label(form.lastname) }}</label>*/
/*                 {{ form_widget(form.lastname, {'attr': {'tabindex' : '1','id' : 'users_lastname_id','class': 'form-control','placeholder': 'User Last name'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_userId_id">{{ form_label(form.username) }}</label>*/
/*                 {{ form_widget(form.username, {'attr': {'tabindex' : '4','id' : 'users_userid_id','class': 'form-control','placeholder': 'User Id'}}) }}*/
/*             </div> */
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_firstname_id">{{ form_label(form.firstname) }}</label>*/
/*                 {{ form_widget(form.firstname, {'attr': {'tabindex' : '2','id' : 'users_firstname_id','class': 'form-control','placeholder': 'User First name'}}) }}*/
/*             </div>  */
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_password_id">{{ form_label(form.password) }}</label>*/
/*                 {{ form_widget(form.password, {'attr': {'tabindex' : '5','id' : 'users_password_id','class': 'form-control','placeholder': 'User Password'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_mail_id">{{ form_label(form.mail) }}</label>*/
/*                 {{ form_widget(form.mail, {'attr': {'tabindex' : '3','id' : 'users_mail_id','class': 'form-control','placeholder': 'User Mail'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6 col-md-offset-6">*/
/*                 <label for="users_role_id">{{ form_label(form.roleUser) }}</label>                */
/*                 {{ form_widget(form.roleUser, {'attr': {'tabindex' : '6','id' : 'users_enabled_id','class': 'form-control','placeholder': 'User Enabled'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6 col-md-offset-6">*/
/*                 <label for="users_enabled_id">{{ form_label(form.enabled) }}</label>                */
/*                 {{ form_widget(form.enabled, {'attr': {'tabindex' : '6','id' : 'users_enabled_id','class': 'form-control','placeholder': 'User Enabled'}}) }}*/
/*             </div>*/
/*         */
/*         </div>*/
/*         */
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("ab_users_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
