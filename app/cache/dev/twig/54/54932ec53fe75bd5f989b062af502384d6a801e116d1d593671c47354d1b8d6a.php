<?php

/* AdminBundle:Users:add.html.twig */
class __TwigTemplate_51d3d6008bb3b1629acd87c258a72e664722609c2f1f0f3d594fc461a587cd19 extends Twig_Template
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
        $__internal_9a72479035b09ff3a77e10fbaacb878a10456d00df8b122f97bdcb3f1d72e4a5 = $this->env->getExtension("native_profiler");
        $__internal_9a72479035b09ff3a77e10fbaacb878a10456d00df8b122f97bdcb3f1d72e4a5->enter($__internal_9a72479035b09ff3a77e10fbaacb878a10456d00df8b122f97bdcb3f1d72e4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a72479035b09ff3a77e10fbaacb878a10456d00df8b122f97bdcb3f1d72e4a5->leave($__internal_9a72479035b09ff3a77e10fbaacb878a10456d00df8b122f97bdcb3f1d72e4a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80c468c65a931c838a38d65ed6e16b23fff9ad9e974447dcd5c84c042c290b12 = $this->env->getExtension("native_profiler");
        $__internal_80c468c65a931c838a38d65ed6e16b23fff9ad9e974447dcd5c84c042c290b12->enter($__internal_80c468c65a931c838a38d65ed6e16b23fff9ad9e974447dcd5c84c042c290b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:add";
        
        $__internal_80c468c65a931c838a38d65ed6e16b23fff9ad9e974447dcd5c84c042c290b12->leave($__internal_80c468c65a931c838a38d65ed6e16b23fff9ad9e974447dcd5c84c042c290b12_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_2d9f47c5bdc16be14432436c9bd00372136a11f54eb22efa589608fde5726cac = $this->env->getExtension("native_profiler");
        $__internal_2d9f47c5bdc16be14432436c9bd00372136a11f54eb22efa589608fde5726cac->enter($__internal_2d9f47c5bdc16be14432436c9bd00372136a11f54eb22efa589608fde5726cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
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
        <a href=\"ab_users_add\"><b>Add</b></a>
    </li>
";
        
        $__internal_2d9f47c5bdc16be14432436c9bd00372136a11f54eb22efa589608fde5726cac->leave($__internal_2d9f47c5bdc16be14432436c9bd00372136a11f54eb22efa589608fde5726cac_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe73fcc22f0919cfa711ad335a53bad88230b818b894ac0109cdb1a45e0dbf5 = $this->env->getExtension("native_profiler");
        $__internal_1fe73fcc22f0919cfa711ad335a53bad88230b818b894ac0109cdb1a45e0dbf5->enter($__internal_1fe73fcc22f0919cfa711ad335a53bad88230b818b894ac0109cdb1a45e0dbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fe73fcc22f0919cfa711ad335a53bad88230b818b894ac0109cdb1a45e0dbf5->leave($__internal_1fe73fcc22f0919cfa711ad335a53bad88230b818b894ac0109cdb1a45e0dbf5_prof);

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
        return array (  176 => 62,  170 => 59,  160 => 52,  156 => 51,  150 => 48,  146 => 47,  140 => 44,  136 => 43,  130 => 40,  126 => 39,  120 => 36,  116 => 35,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Users:add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_users_list") }}">Users</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="ab_users_add"><b>Add</b></a>*/
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
