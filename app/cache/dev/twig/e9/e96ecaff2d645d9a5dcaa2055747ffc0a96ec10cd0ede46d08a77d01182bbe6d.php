<?php

/* DashboardBundle:Dashboard:update.html.twig */
class __TwigTemplate_8a33c50bc1a81c419d7d8c56da2db5814de3e2affbb4f4709d4fb24642a90769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:update.html.twig", 1);
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
        $__internal_3a5fe9ae35cca02a601f69899f6a0529fdc52ea3bd2e2d03b10d865e77b45764 = $this->env->getExtension("native_profiler");
        $__internal_3a5fe9ae35cca02a601f69899f6a0529fdc52ea3bd2e2d03b10d865e77b45764->enter($__internal_3a5fe9ae35cca02a601f69899f6a0529fdc52ea3bd2e2d03b10d865e77b45764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a5fe9ae35cca02a601f69899f6a0529fdc52ea3bd2e2d03b10d865e77b45764->leave($__internal_3a5fe9ae35cca02a601f69899f6a0529fdc52ea3bd2e2d03b10d865e77b45764_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd980f6a775e843694ff8b4040b473391ce09f0cbd66cff0ebc9dddcb20e558d = $this->env->getExtension("native_profiler");
        $__internal_bd980f6a775e843694ff8b4040b473391ce09f0cbd66cff0ebc9dddcb20e558d->enter($__internal_bd980f6a775e843694ff8b4040b473391ce09f0cbd66cff0ebc9dddcb20e558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:update";
        
        $__internal_bd980f6a775e843694ff8b4040b473391ce09f0cbd66cff0ebc9dddcb20e558d->leave($__internal_bd980f6a775e843694ff8b4040b473391ce09f0cbd66cff0ebc9dddcb20e558d_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_186cd12de390e94001769faf9b0680aae13c20a00fba62674f8e56bc48869093 = $this->env->getExtension("native_profiler");
        $__internal_186cd12de390e94001769faf9b0680aae13c20a00fba62674f8e56bc48869093->enter($__internal_186cd12de390e94001769faf9b0680aae13c20a00fba62674f8e56bc48869093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"db_dashboard_update\">Update</a>
    </li>
";
        
        $__internal_186cd12de390e94001769faf9b0680aae13c20a00fba62674f8e56bc48869093->leave($__internal_186cd12de390e94001769faf9b0680aae13c20a00fba62674f8e56bc48869093_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_7758bc0ce08538aa18ed3881b8f62ea14366b8423f31be13ff76a001f2e1179b = $this->env->getExtension("native_profiler");
        $__internal_7758bc0ce08538aa18ed3881b8f62ea14366b8423f31be13ff76a001f2e1179b->enter($__internal_7758bc0ce08538aa18ed3881b8f62ea14366b8423f31be13ff76a001f2e1179b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <div class=\"box box-primary\">
        <div class=\"box-header\"></div><!-- /.box-header -->
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group\">
                <label for=\"dashboard_name_id\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("id" => "dashboard_name_id", "class" => "form-control", "placeholder" => "Dashboard Name")));
        echo "
            </div>                
        </div>

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>
        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
";
        
        $__internal_7758bc0ce08538aa18ed3881b8f62ea14366b8423f31be13ff76a001f2e1179b->leave($__internal_7758bc0ce08538aa18ed3881b8f62ea14366b8423f31be13ff76a001f2e1179b_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  104 => 32,  96 => 27,  92 => 26,  86 => 23,  81 => 20,  75 => 19,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:update{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="index.html">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="db_dashboard_update">Update</a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="box box-primary">*/
/*         <div class="box-header"></div><!-- /.box-header -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group">*/
/*                 <label for="dashboard_name_id">{{ form_label(form.name) }}</label>*/
/*                 {{ form_widget(form.name, {'attr': {'id' : 'dashboard_name_id','class': 'form-control','placeholder': 'Dashboard Name'}}) }}*/
/*             </div>                */
/*         </div>*/
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     */
/* {% endblock %}*/
