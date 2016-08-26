<?php

/* AdminBundle:Roles:update.html.twig */
class __TwigTemplate_9c66fdf7aa13a58f79f787114c8d7111ff0b93057ea63fafb2a46e9accfbd981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Roles:update.html.twig", 1);
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
        $__internal_43fd6740a3bf293f4fce3c29893d59a6117d7a140ec9588d118136ff913a9790 = $this->env->getExtension("native_profiler");
        $__internal_43fd6740a3bf293f4fce3c29893d59a6117d7a140ec9588d118136ff913a9790->enter($__internal_43fd6740a3bf293f4fce3c29893d59a6117d7a140ec9588d118136ff913a9790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43fd6740a3bf293f4fce3c29893d59a6117d7a140ec9588d118136ff913a9790->leave($__internal_43fd6740a3bf293f4fce3c29893d59a6117d7a140ec9588d118136ff913a9790_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b73995263482ace39dc89941475dbc9d00cfb4606d49080abeca11d9b247c449 = $this->env->getExtension("native_profiler");
        $__internal_b73995263482ace39dc89941475dbc9d00cfb4606d49080abeca11d9b247c449->enter($__internal_b73995263482ace39dc89941475dbc9d00cfb4606d49080abeca11d9b247c449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Roles:update";
        
        $__internal_b73995263482ace39dc89941475dbc9d00cfb4606d49080abeca11d9b247c449->leave($__internal_b73995263482ace39dc89941475dbc9d00cfb4606d49080abeca11d9b247c449_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_db64fbcbd2bf6b6022af377a1147b36f47ab0ebaa8c18bd142ead8e42f595bc1 = $this->env->getExtension("native_profiler");
        $__internal_db64fbcbd2bf6b6022af377a1147b36f47ab0ebaa8c18bd142ead8e42f595bc1->enter($__internal_db64fbcbd2bf6b6022af377a1147b36f47ab0ebaa8c18bd142ead8e42f595bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <a href=\"ab_entities_update\"><b>Update</b></a>
    </li>
";
        
        $__internal_db64fbcbd2bf6b6022af377a1147b36f47ab0ebaa8c18bd142ead8e42f595bc1->leave($__internal_db64fbcbd2bf6b6022af377a1147b36f47ab0ebaa8c18bd142ead8e42f595bc1_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_9604487258a5e173df1e715f4a8eb11f371091a0539d01bcd29a7cc5cdd94342 = $this->env->getExtension("native_profiler");
        $__internal_9604487258a5e173df1e715f4a8eb11f371091a0539d01bcd29a7cc5cdd94342->enter($__internal_9604487258a5e173df1e715f4a8eb11f371091a0539d01bcd29a7cc5cdd94342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            <div class=\"box-body\">
                <div class=\"form-group col-md-6\">
                    <label for=\"name\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Name")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"country\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                </div>
            </div><!-- /.box-body -->

            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>

            </div>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div><!-- /.box -->
";
        
        $__internal_9604487258a5e173df1e715f4a8eb11f371091a0539d01bcd29a7cc5cdd94342->leave($__internal_9604487258a5e173df1e715f4a8eb11f371091a0539d01bcd29a7cc5cdd94342_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Roles:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  122 => 38,  118 => 37,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Roles:update{% endblock %}*/
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
/*         <a href="ab_entities_update"><b>Update</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*             <div class="box-body">*/
/*                 <div class="form-group col-md-6">*/
/*                     <label for="name">{{ form_label(form.description) }}</label>*/
/*                     {{ form_widget(form.description, {'attr': {'class': 'form-control','placeholder': 'Institution Name'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="country">{{ form_label(form.enabled) }}</label>*/
/*                     {{ form_widget(form.enabled, {'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*                 </div>*/
/*             </div><!-- /.box-body -->*/
/* */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/* */
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div><!-- /.box -->*/
/* {% endblock %}*/
/* */
