<?php

/* @Admin/Users/add.html.twig */
class __TwigTemplate_557093ab50774fa97e70c7e298764f5101ef288688524d03fad4a69e54b44bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Users/add.html.twig", 1);
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
        $__internal_1230784f0c16bd6dbf5ea7531eb6c76166213db80292312cddc0b14842625d0f = $this->env->getExtension("native_profiler");
        $__internal_1230784f0c16bd6dbf5ea7531eb6c76166213db80292312cddc0b14842625d0f->enter($__internal_1230784f0c16bd6dbf5ea7531eb6c76166213db80292312cddc0b14842625d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Users/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1230784f0c16bd6dbf5ea7531eb6c76166213db80292312cddc0b14842625d0f->leave($__internal_1230784f0c16bd6dbf5ea7531eb6c76166213db80292312cddc0b14842625d0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc7a6e9c3f89d2a1a456eadfc50601919247c4bd90dc2b78e31d486816d113ea = $this->env->getExtension("native_profiler");
        $__internal_fc7a6e9c3f89d2a1a456eadfc50601919247c4bd90dc2b78e31d486816d113ea->enter($__internal_fc7a6e9c3f89d2a1a456eadfc50601919247c4bd90dc2b78e31d486816d113ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:add";
        
        $__internal_fc7a6e9c3f89d2a1a456eadfc50601919247c4bd90dc2b78e31d486816d113ea->leave($__internal_fc7a6e9c3f89d2a1a456eadfc50601919247c4bd90dc2b78e31d486816d113ea_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_64e86964c6f9ce266cc94c7b9582bcf57c9ab9f3aa0382d44081fc1f6b8107d5 = $this->env->getExtension("native_profiler");
        $__internal_64e86964c6f9ce266cc94c7b9582bcf57c9ab9f3aa0382d44081fc1f6b8107d5->enter($__internal_64e86964c6f9ce266cc94c7b9582bcf57c9ab9f3aa0382d44081fc1f6b8107d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_64e86964c6f9ce266cc94c7b9582bcf57c9ab9f3aa0382d44081fc1f6b8107d5->leave($__internal_64e86964c6f9ce266cc94c7b9582bcf57c9ab9f3aa0382d44081fc1f6b8107d5_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_371ff4eb5131fda1f298d92f84de9a1a57251272292ce4d7730d56fe1f27223c = $this->env->getExtension("native_profiler");
        $__internal_371ff4eb5131fda1f298d92f84de9a1a57251272292ce4d7730d56fe1f27223c->enter($__internal_371ff4eb5131fda1f298d92f84de9a1a57251272292ce4d7730d56fe1f27223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_371ff4eb5131fda1f298d92f84de9a1a57251272292ce4d7730d56fe1f27223c->leave($__internal_371ff4eb5131fda1f298d92f84de9a1a57251272292ce4d7730d56fe1f27223c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Users/add.html.twig";
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
