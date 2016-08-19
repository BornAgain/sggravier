<?php

/* DashboardBundle:Widget:update.html.twig */
class __TwigTemplate_b9b0ade2e713214b6e2313efc7d82c9fdb8a06e65c5790f7443df1005fdf40cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Widget:update.html.twig", 1);
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
        $__internal_bd636e9b4948c1e5f7efe0c7991589b114c123e9f1a875628245e49d28c00d6f = $this->env->getExtension("native_profiler");
        $__internal_bd636e9b4948c1e5f7efe0c7991589b114c123e9f1a875628245e49d28c00d6f->enter($__internal_bd636e9b4948c1e5f7efe0c7991589b114c123e9f1a875628245e49d28c00d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd636e9b4948c1e5f7efe0c7991589b114c123e9f1a875628245e49d28c00d6f->leave($__internal_bd636e9b4948c1e5f7efe0c7991589b114c123e9f1a875628245e49d28c00d6f_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f712262f409f8762b64750ceb47069ed7f602865e3e6034b39c0654c2dfbb86d = $this->env->getExtension("native_profiler");
        $__internal_f712262f409f8762b64750ceb47069ed7f602865e3e6034b39c0654c2dfbb86d->enter($__internal_f712262f409f8762b64750ceb47069ed7f602865e3e6034b39c0654c2dfbb86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_f712262f409f8762b64750ceb47069ed7f602865e3e6034b39c0654c2dfbb86d->leave($__internal_f712262f409f8762b64750ceb47069ed7f602865e3e6034b39c0654c2dfbb86d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e8f9cb19031559c131f05482b87a468c451a2dba579b4d443585ca1c8f14dd6 = $this->env->getExtension("native_profiler");
        $__internal_9e8f9cb19031559c131f05482b87a468c451a2dba579b4d443585ca1c8f14dd6->enter($__internal_9e8f9cb19031559c131f05482b87a468c451a2dba579b4d443585ca1c8f14dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"form-group col-md-12\">
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
        </div>
        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_9e8f9cb19031559c131f05482b87a468c451a2dba579b4d443585ca1c8f14dd6->leave($__internal_9e8f9cb19031559c131f05482b87a468c451a2dba579b4d443585ca1c8f14dd6_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  132 => 47,  124 => 42,  117 => 38,  113 => 37,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  87 => 26,  83 => 25,  77 => 22,  71 => 18,  65 => 17,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <div class="form-group col-md-12">*/
/*                 <label for="multiple" class="control-label">Dashboard</label>*/
/*                 {{ form_widget(form.dashboard, {'attr': {'tabindex' : '1','id' : 'widget_position_id','class': 'form-control','placeholder': 'Widget position'}}) }}*/
/*             </div>            */
/*         </div>*/
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_widget_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */