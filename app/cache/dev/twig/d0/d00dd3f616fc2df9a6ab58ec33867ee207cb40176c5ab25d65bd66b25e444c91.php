<?php

/* @Dashboard/Widget/update.html.twig */
class __TwigTemplate_95072c9ae7082b9cce5ab9cc1f0ca7ee48040d6b284b4de46f0ffbdd2f2256a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Widget/update.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7b8db68c1e2550f0d6078d7b70ab74c13cdc63279a470b02737be8866d8fa611 = $this->env->getExtension("native_profiler");
        $__internal_7b8db68c1e2550f0d6078d7b70ab74c13cdc63279a470b02737be8866d8fa611->enter($__internal_7b8db68c1e2550f0d6078d7b70ab74c13cdc63279a470b02737be8866d8fa611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Widget/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b8db68c1e2550f0d6078d7b70ab74c13cdc63279a470b02737be8866d8fa611->leave($__internal_7b8db68c1e2550f0d6078d7b70ab74c13cdc63279a470b02737be8866d8fa611_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e6eb12af5086fa862be720a62fb58ce4861d4b24b46f4a735a22be03371fd555 = $this->env->getExtension("native_profiler");
        $__internal_e6eb12af5086fa862be720a62fb58ce4861d4b24b46f4a735a22be03371fd555->enter($__internal_e6eb12af5086fa862be720a62fb58ce4861d4b24b46f4a735a22be03371fd555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\">Widgets</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Update</b>
    </li>
";
        
        $__internal_e6eb12af5086fa862be720a62fb58ce4861d4b24b46f4a735a22be03371fd555->leave($__internal_e6eb12af5086fa862be720a62fb58ce4861d4b24b46f4a735a22be03371fd555_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0736dc256007e5312e26a61abc868279b0d9e29fcdc23e4f077b10b6f43b8036 = $this->env->getExtension("native_profiler");
        $__internal_0736dc256007e5312e26a61abc868279b0d9e29fcdc23e4f077b10b6f43b8036->enter($__internal_0736dc256007e5312e26a61abc868279b0d9e29fcdc23e4f077b10b6f43b8036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <div class=\"box box-primary\">
        <div class=\"box-header\"> </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">                        
            <div class=\"form-group col-md-6\">
                <label for=\"widget_type_name\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_type_id", "class" => "form-control", "placeholder" => "Widget name")));
        echo "
            </div> 
            <div class=\"form-group col-md-6\">
                <label for=\"widget_type_id\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</label>
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_type_id", "class" => "form-control", "placeholder" => "Widget type")));
        echo "
            </div>  
            <div class=\"form-group col-md-6\">
                <label for=\"widget_position_id\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "</label>
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_position_id", "class" => "form-control", "placeholder" => "Widget position")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"widget_query_id\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query", array()), 'label');
        echo "</label>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_query_id", "class" => "form-control", "placeholder" => "Query")));
        echo "
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"multiple\" class=\"control-label\">Dashboard</label>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dashboard", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_position_id", "class" => "form-control", "placeholder" => "Widget position")));
        echo "
            </div>            
        </div>

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>

        </div>
        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_0736dc256007e5312e26a61abc868279b0d9e29fcdc23e4f077b10b6f43b8036->leave($__internal_0736dc256007e5312e26a61abc868279b0d9e29fcdc23e4f077b10b6f43b8036_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Widget/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  136 => 48,  132 => 47,  124 => 42,  117 => 38,  113 => 37,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  87 => 26,  83 => 25,  77 => 22,  71 => 18,  65 => 17,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("db_widget_list") }}">Widgets</a>*/
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
/*         <div class="box-header"> </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">                        */
/*             <div class="form-group col-md-6">*/
/*                 <label for="widget_type_name">{{ form_label(form.name) }}</label>*/
/*                 {{ form_widget(form.name, {'attr': {'tabindex' : '1','id' : 'widget_type_id','class': 'form-control','placeholder': 'Widget name'}}) }}*/
/*             </div> */
/*             <div class="form-group col-md-6">*/
/*                 <label for="widget_type_id">{{ form_label(form.type) }}</label>*/
/*                 {{ form_widget(form.type, {'attr': {'tabindex' : '1','id' : 'widget_type_id','class': 'form-control','placeholder': 'Widget type'}}) }}*/
/*             </div>  */
/*             <div class="form-group col-md-6">*/
/*                 <label for="widget_position_id">{{ form_label(form.position) }}</label>*/
/*                 {{ form_widget(form.position, {'attr': {'tabindex' : '1','id' : 'widget_position_id','class': 'form-control','placeholder': 'Widget position'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="widget_query_id">{{ form_label(form.query) }}</label>*/
/*                 {{ form_widget(form.query, {'attr': {'tabindex' : '1','id' : 'widget_query_id','class': 'form-control','placeholder': 'Query'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6 col-md-offset-6">*/
/*                 <label for="multiple" class="control-label">Dashboard</label>*/
/*                 {{ form_widget(form.dashboard, {'attr': {'tabindex' : '1','id' : 'widget_position_id','class': 'form-control','placeholder': 'Widget position'}}) }}*/
/*             </div>            */
/*         </div>*/
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_widget_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*             <a href="{{ path ("db_widget_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/* */
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
