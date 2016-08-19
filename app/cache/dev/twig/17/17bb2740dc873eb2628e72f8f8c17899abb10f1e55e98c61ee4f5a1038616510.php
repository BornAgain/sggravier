<?php

/* AdminBundle:Roles:add.html.twig */
class __TwigTemplate_6575b4a64ccd95bd6f369009064f593d6fa5fad1c22fa98621b71f6a07fc0290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Roles:add.html.twig", 1);
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
        $__internal_f06998eee5cad0dfbaa581c2baf70163bc6180a8f20c339949a5828e3a19dad6 = $this->env->getExtension("native_profiler");
        $__internal_f06998eee5cad0dfbaa581c2baf70163bc6180a8f20c339949a5828e3a19dad6->enter($__internal_f06998eee5cad0dfbaa581c2baf70163bc6180a8f20c339949a5828e3a19dad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06998eee5cad0dfbaa581c2baf70163bc6180a8f20c339949a5828e3a19dad6->leave($__internal_f06998eee5cad0dfbaa581c2baf70163bc6180a8f20c339949a5828e3a19dad6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ac76f9748e899cd291432dcfedf7094c739607559ec3b2b8aad21353fb5189b = $this->env->getExtension("native_profiler");
        $__internal_0ac76f9748e899cd291432dcfedf7094c739607559ec3b2b8aad21353fb5189b->enter($__internal_0ac76f9748e899cd291432dcfedf7094c739607559ec3b2b8aad21353fb5189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Roles:add";
        
        $__internal_0ac76f9748e899cd291432dcfedf7094c739607559ec3b2b8aad21353fb5189b->leave($__internal_0ac76f9748e899cd291432dcfedf7094c739607559ec3b2b8aad21353fb5189b_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_488d2eb97c58d77b41bfba05668046cd9eefb1c6f879f1f2e49a1d23ab99191d = $this->env->getExtension("native_profiler");
        $__internal_488d2eb97c58d77b41bfba05668046cd9eefb1c6f879f1f2e49a1d23ab99191d->enter($__internal_488d2eb97c58d77b41bfba05668046cd9eefb1c6f879f1f2e49a1d23ab99191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\">Roles</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"><b>Add</b></a>
    </li>
";
        
        $__internal_488d2eb97c58d77b41bfba05668046cd9eefb1c6f879f1f2e49a1d23ab99191d->leave($__internal_488d2eb97c58d77b41bfba05668046cd9eefb1c6f879f1f2e49a1d23ab99191d_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a94bbd88e09d1fd06a09ab65fec8d71d624a338fed52e0614768c8bb1df915f8 = $this->env->getExtension("native_profiler");
        $__internal_a94bbd88e09d1fd06a09ab65fec8d71d624a338fed52e0614768c8bb1df915f8->enter($__internal_a94bbd88e09d1fd06a09ab65fec8d71d624a338fed52e0614768c8bb1df915f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo " <div class=\"box box-primary\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">Roles Form</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body\">
            <div class=\"form-group\">
                <label for=\"roles_description_id\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("id" => "roles_description_id", "class" => "form-control", "placeholder" => "User role")));
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"roles_enabled_id\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("id" => "roles_enabled_id", "attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
            </div>                
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
            </div>
        </div><!-- /.box -->
    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a94bbd88e09d1fd06a09ab65fec8d71d624a338fed52e0614768c8bb1df915f8->leave($__internal_a94bbd88e09d1fd06a09ab65fec8d71d624a338fed52e0614768c8bb1df915f8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Roles:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  120 => 36,  114 => 33,  110 => 32,  104 => 29,  100 => 28,  94 => 25,  87 => 20,  81 => 19,  71 => 15,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Roles:add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_roles_list") }}">Roles</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_roles_list") }}"><b>Add</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*  <div class="box box-primary">*/
/*     <div class="box-header">*/
/*         <h3 class="box-title">Roles Form</h3>*/
/*     </div><!-- /.box-header -->*/
/*     <!-- form start -->*/
/*     {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body">*/
/*             <div class="form-group">*/
/*                 <label for="roles_description_id">{{ form_label(form.description) }}</label>*/
/*                     {{ form_widget(form.description, {'attr': {'id' : 'roles_description_id','class': 'form-control','placeholder': 'User role'}}) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="roles_enabled_id">{{ form_label(form.enabled) }}</label>*/
/*                     {{ form_widget(form.enabled, {'id' : 'roles_enabled_id', 'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*             </div>                */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*             </div>*/
/*         </div><!-- /.box -->*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
