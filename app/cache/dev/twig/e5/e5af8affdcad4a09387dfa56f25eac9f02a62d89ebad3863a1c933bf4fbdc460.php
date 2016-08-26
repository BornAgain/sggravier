<?php

/* AdminBundle:Users:update.html.twig */
class __TwigTemplate_e61f958158087a90c251afd02b4b8c68b7f9c117ceed01a6a6dd28c6fec863b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Users:update.html.twig", 1);
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
        $__internal_9dd905e019ab9cd6f61c74b1bfff0babc7964dee1b5b2081178e2745627303d6 = $this->env->getExtension("native_profiler");
        $__internal_9dd905e019ab9cd6f61c74b1bfff0babc7964dee1b5b2081178e2745627303d6->enter($__internal_9dd905e019ab9cd6f61c74b1bfff0babc7964dee1b5b2081178e2745627303d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd905e019ab9cd6f61c74b1bfff0babc7964dee1b5b2081178e2745627303d6->leave($__internal_9dd905e019ab9cd6f61c74b1bfff0babc7964dee1b5b2081178e2745627303d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_891670bbbc1e9fc2410272deb274882f7680f7161bdd490c2f86999e81725b35 = $this->env->getExtension("native_profiler");
        $__internal_891670bbbc1e9fc2410272deb274882f7680f7161bdd490c2f86999e81725b35->enter($__internal_891670bbbc1e9fc2410272deb274882f7680f7161bdd490c2f86999e81725b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:update";
        
        $__internal_891670bbbc1e9fc2410272deb274882f7680f7161bdd490c2f86999e81725b35->leave($__internal_891670bbbc1e9fc2410272deb274882f7680f7161bdd490c2f86999e81725b35_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_bc702bb2892dad2d4a52a27138f89fe493d11a3b369deecfeac15b9cb28a8357 = $this->env->getExtension("native_profiler");
        $__internal_bc702bb2892dad2d4a52a27138f89fe493d11a3b369deecfeac15b9cb28a8357->enter($__internal_bc702bb2892dad2d4a52a27138f89fe493d11a3b369deecfeac15b9cb28a8357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <b>Update</b>
    </li>
";
        
        $__internal_bc702bb2892dad2d4a52a27138f89fe493d11a3b369deecfeac15b9cb28a8357->leave($__internal_bc702bb2892dad2d4a52a27138f89fe493d11a3b369deecfeac15b9cb28a8357_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_16f9f8eabb87dc8c2fcd79db52f01587870d534d12b25ef0ca7351cde315a9aa = $this->env->getExtension("native_profiler");
        $__internal_16f9f8eabb87dc8c2fcd79db52f01587870d534d12b25ef0ca7351cde315a9aa->enter($__internal_16f9f8eabb87dc8c2fcd79db52f01587870d534d12b25ef0ca7351cde315a9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group col-md-6\">
                <label for=\"users_userId_id\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "</label>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("id" => "users_userid_id", "class" => "form-control", "placeholder" => "UserId")));
        echo "
            </div>                
            <div class=\"form-group col-md-6\">
                <label for=\"users_lastname_id\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "</label>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("id" => "users_lastname_id", "class" => "form-control", "placeholder" => "User Lastname")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"users_password_id\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "</label>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("id" => "users_password_id", "class" => "form-control", "placeholder" => "User Password")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"users_firstname_id\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "</label>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("id" => "users_firstname_id", "class" => "form-control", "placeholder" => "User Firstname")));
        echo "
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"users_mail_id\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label');
        echo "</label>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("id" => "users_mail_id", "class" => "form-control", "placeholder" => "User Mail")));
        echo "
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"users_enabled_id\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("id" => "users_enabled_id", "attr" => array("class" => "form-control", "placeholder" => "User Enabled")));
        echo "
            </div>
            
            <div class=\"form-group col-md-12 \">
                <label for=\"multiple\" class=\"control-label\">Roles</label>
                <select id=\"multiple\" class=\"form-control select2-multiple\" multiple>
                    <option value=\"AK\">User</option>
                    <option value=\"HI\" disabled=\"disabled\">Admin</option>
                </select>
            </div>
        </div>


        <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
                <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>

        </div>
    </div><!-- /.box -->
";
        
        $__internal_16f9f8eabb87dc8c2fcd79db52f01587870d534d12b25ef0ca7351cde315a9aa->leave($__internal_16f9f8eabb87dc8c2fcd79db52f01587870d534d12b25ef0ca7351cde315a9aa_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Users:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  167 => 62,  150 => 48,  146 => 47,  140 => 44,  136 => 43,  130 => 40,  126 => 39,  120 => 36,  116 => 35,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Users:update{% endblock %}*/
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
/*         <b>Update</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*             {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_userId_id">{{ form_label(form.username) }}</label>*/
/*                 {{ form_widget(form.username, {'attr': {'id' : 'users_userid_id','class': 'form-control','placeholder': 'UserId'}}) }}*/
/*             </div>                */
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_lastname_id">{{ form_label(form.lastname) }}</label>*/
/*                 {{ form_widget(form.lastname, {'attr': {'id' : 'users_lastname_id','class': 'form-control','placeholder': 'User Lastname'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_password_id">{{ form_label(form.password) }}</label>*/
/*                 {{ form_widget(form.password, {'attr': {'id' : 'users_password_id','class': 'form-control','placeholder': 'User Password'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="users_firstname_id">{{ form_label(form.firstname) }}</label>*/
/*                 {{ form_widget(form.firstname, {'attr': {'id' : 'users_firstname_id','class': 'form-control','placeholder': 'User Firstname'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6 col-md-offset-6">*/
/*                 <label for="users_mail_id">{{ form_label(form.mail) }}</label>*/
/*                 {{ form_widget(form.mail, {'attr': {'id' : 'users_mail_id','class': 'form-control','placeholder': 'User Mail'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6 col-md-offset-6">*/
/*                 <label for="users_enabled_id">{{ form_label(form.enabled) }}</label>*/
/*                 {{ form_widget(form.enabled, {'id' : 'users_enabled_id', 'attr': {'class': 'form-control','placeholder': 'User Enabled'}}) }}*/
/*             </div>*/
/*             */
/*             <div class="form-group col-md-12 ">*/
/*                 <label for="multiple" class="control-label">Roles</label>*/
/*                 <select id="multiple" class="form-control select2-multiple" multiple>*/
/*                     <option value="AK">User</option>*/
/*                     <option value="HI" disabled="disabled">Admin</option>*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_users_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/* */
/*         </div>*/
/*     </div><!-- /.box -->*/
/* {% endblock %}*/
