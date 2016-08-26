<?php

/* DashboardBundle:Widget:add.html.twig */
class __TwigTemplate_b84181a6a88daf30a8b54e8dcd34f6fe386e005840260649123d8263565e1842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Widget:add.html.twig", 1);
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
        $__internal_f8a239ceaddb2d7b591187b948e9db4da8f8164e874d02fe5420202f011d7e32 = $this->env->getExtension("native_profiler");
        $__internal_f8a239ceaddb2d7b591187b948e9db4da8f8164e874d02fe5420202f011d7e32->enter($__internal_f8a239ceaddb2d7b591187b948e9db4da8f8164e874d02fe5420202f011d7e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a239ceaddb2d7b591187b948e9db4da8f8164e874d02fe5420202f011d7e32->leave($__internal_f8a239ceaddb2d7b591187b948e9db4da8f8164e874d02fe5420202f011d7e32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76a0e572849b5ef6764a82c8949abdad56a685074ea98fbb70e0ca963f479105 = $this->env->getExtension("native_profiler");
        $__internal_76a0e572849b5ef6764a82c8949abdad56a685074ea98fbb70e0ca963f479105->enter($__internal_76a0e572849b5ef6764a82c8949abdad56a685074ea98fbb70e0ca963f479105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Widget:add";
        
        $__internal_76a0e572849b5ef6764a82c8949abdad56a685074ea98fbb70e0ca963f479105->leave($__internal_76a0e572849b5ef6764a82c8949abdad56a685074ea98fbb70e0ca963f479105_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_22174ac92c8a7f50f4d96baf3c65a025108e4f91866ef50fa6b781532bdb09d1 = $this->env->getExtension("native_profiler");
        $__internal_22174ac92c8a7f50f4d96baf3c65a025108e4f91866ef50fa6b781532bdb09d1->enter($__internal_22174ac92c8a7f50f4d96baf3c65a025108e4f91866ef50fa6b781532bdb09d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\">Widgets</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Add</b>
    </li>
";
        
        $__internal_22174ac92c8a7f50f4d96baf3c65a025108e4f91866ef50fa6b781532bdb09d1->leave($__internal_22174ac92c8a7f50f4d96baf3c65a025108e4f91866ef50fa6b781532bdb09d1_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_16ed982c8a2cf3cea01da8939c1b45d9b0bdc42f2d5f07f371302bcbe8fa903d = $this->env->getExtension("native_profiler");
        $__internal_16ed982c8a2cf3cea01da8939c1b45d9b0bdc42f2d5f07f371302bcbe8fa903d->enter($__internal_16ed982c8a2cf3cea01da8939c1b45d9b0bdc42f2d5f07f371302bcbe8fa903d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\"> </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
           <div class=\"form-group col-md-6\">
                <label for=\"widget_type_name\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_type_id", "class" => "form-control", "placeholder" => "Widget name")));
        echo "
            </div> 
            <div class=\"form-group col-md-6\">
                <label for=\"widget_type_id\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</label>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_type_id", "class" => "form-control", "placeholder" => "Widget type")));
        echo "
            </div>  
            <div class=\"form-group col-md-6\">
                <label for=\"widget_position_id\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "</label>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_position_id", "class" => "form-control", "placeholder" => "Widget position")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"widget_query_id\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query", array()), 'label');
        echo "</label>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_query_id", "class" => "form-control", "placeholder" => "Query")));
        echo "
            </div>
            <div class=\"form-group col-md-6 col-md-offset-6\">
                <label for=\"multiple\" class=\"control-label\">Dashboard</label>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dashboard", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "widget_position_id", "class" => "form-control", "placeholder" => "Widget position")));
        echo "
            </div> 
            
            
        </div>

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>
        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_16ed982c8a2cf3cea01da8939c1b45d9b0bdc42f2d5f07f371302bcbe8fa903d->leave($__internal_16ed982c8a2cf3cea01da8939c1b45d9b0bdc42f2d5f07f371302bcbe8fa903d_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Widget:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  146 => 50,  136 => 43,  129 => 39,  125 => 38,  119 => 35,  115 => 34,  109 => 31,  105 => 30,  99 => 27,  95 => 26,  89 => 23,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Widget:add{% endblock %}*/
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
/*         <b>Add</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header"> </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*            <div class="form-group col-md-6">*/
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
/*             </div> */
/*             */
/*             */
/*         </div>*/
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
