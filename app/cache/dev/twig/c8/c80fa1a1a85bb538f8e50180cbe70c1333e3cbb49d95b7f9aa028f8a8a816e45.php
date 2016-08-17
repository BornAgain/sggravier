<?php

/* AdminBundle:Users:add.html.twig */
class __TwigTemplate_421006dcf5f4c0b731eaf85be3e2fe1dca6bdde5fe198f8abb711836dee8a012 extends Twig_Template
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
        $__internal_5ea33e5af20419148cb21a838280ba3af2eb4771bfe05f7b313d8e7cb26f05ae = $this->env->getExtension("native_profiler");
        $__internal_5ea33e5af20419148cb21a838280ba3af2eb4771bfe05f7b313d8e7cb26f05ae->enter($__internal_5ea33e5af20419148cb21a838280ba3af2eb4771bfe05f7b313d8e7cb26f05ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ea33e5af20419148cb21a838280ba3af2eb4771bfe05f7b313d8e7cb26f05ae->leave($__internal_5ea33e5af20419148cb21a838280ba3af2eb4771bfe05f7b313d8e7cb26f05ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e3f1ab3f799b9e8d428ef3b85d28a52a1b4a51430f33027b7adfc48c7e300ee = $this->env->getExtension("native_profiler");
        $__internal_0e3f1ab3f799b9e8d428ef3b85d28a52a1b4a51430f33027b7adfc48c7e300ee->enter($__internal_0e3f1ab3f799b9e8d428ef3b85d28a52a1b4a51430f33027b7adfc48c7e300ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:add";
        
        $__internal_0e3f1ab3f799b9e8d428ef3b85d28a52a1b4a51430f33027b7adfc48c7e300ee->leave($__internal_0e3f1ab3f799b9e8d428ef3b85d28a52a1b4a51430f33027b7adfc48c7e300ee_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_bf4d8f22279f524d90154063877733fdf0a348003a52228472ed60d500e7e61d = $this->env->getExtension("native_profiler");
        $__internal_bf4d8f22279f524d90154063877733fdf0a348003a52228472ed60d500e7e61d->enter($__internal_bf4d8f22279f524d90154063877733fdf0a348003a52228472ed60d500e7e61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_bf4d8f22279f524d90154063877733fdf0a348003a52228472ed60d500e7e61d->leave($__internal_bf4d8f22279f524d90154063877733fdf0a348003a52228472ed60d500e7e61d_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c685543cf0f351970687ade68bb569ac647f8f4ec457f6097b865d4a76d4b35 = $this->env->getExtension("native_profiler");
        $__internal_9c685543cf0f351970687ade68bb569ac647f8f4ec457f6097b865d4a76d4b35->enter($__internal_9c685543cf0f351970687ade68bb569ac647f8f4ec457f6097b865d4a76d4b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"form-group col-md-6\">
            <label for=\"multiple\" class=\"control-label\">Roles</label>
                <select id=\"multiple\" class=\"form-control select2-multiple\" multiple>
                    <option value=\"U\">User</option>
                    <option value=\"SU\">Super User</option>
                </select>
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"users_enabled_id\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>                
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("tabindex" => "6", "id" => "users_enabled_id", "class" => "form-control", "placeholder" => "User Enabled")));
        echo "
            </div>
        
        </div>
        

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>

    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9c685543cf0f351970687ade68bb569ac647f8f4ec457f6097b865d4a76d4b35->leave($__internal_9c685543cf0f351970687ade68bb569ac647f8f4ec457f6097b865d4a76d4b35_prof);

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
        return array (  173 => 65,  167 => 62,  157 => 55,  153 => 54,  140 => 44,  136 => 43,  130 => 40,  126 => 39,  120 => 36,  116 => 35,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <div class="form-group col-md-6">*/
/*             <label for="multiple" class="control-label">Roles</label>*/
/*                 <select id="multiple" class="form-control select2-multiple" multiple>*/
/*                     <option value="U">User</option>*/
/*                     <option value="SU">Super User</option>*/
/*                 </select>*/
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
