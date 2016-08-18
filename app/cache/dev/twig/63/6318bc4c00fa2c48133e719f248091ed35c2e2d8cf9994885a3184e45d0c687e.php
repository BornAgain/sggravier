<?php

/* DashboardBundle:Dashboard:add.html.twig */
class __TwigTemplate_22d3ce2acf5a6cfd2bc5757834a3f720c78807311a508b319dcb29f497b39bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:add.html.twig", 1);
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
        $__internal_62f4cd374cfa9274924630d348578ceafb0d2f291c7dc25d4acce772ce577978 = $this->env->getExtension("native_profiler");
        $__internal_62f4cd374cfa9274924630d348578ceafb0d2f291c7dc25d4acce772ce577978->enter($__internal_62f4cd374cfa9274924630d348578ceafb0d2f291c7dc25d4acce772ce577978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f4cd374cfa9274924630d348578ceafb0d2f291c7dc25d4acce772ce577978->leave($__internal_62f4cd374cfa9274924630d348578ceafb0d2f291c7dc25d4acce772ce577978_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c858194a96b543a67950d1cb5df0682c46384a89a2f7f4bf169d8b8153ae1420 = $this->env->getExtension("native_profiler");
        $__internal_c858194a96b543a67950d1cb5df0682c46384a89a2f7f4bf169d8b8153ae1420->enter($__internal_c858194a96b543a67950d1cb5df0682c46384a89a2f7f4bf169d8b8153ae1420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:add";
        
        $__internal_c858194a96b543a67950d1cb5df0682c46384a89a2f7f4bf169d8b8153ae1420->leave($__internal_c858194a96b543a67950d1cb5df0682c46384a89a2f7f4bf169d8b8153ae1420_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b41e41d435d209aa9249d371d4b5ab88b67609a28587a6907749240acd748d39 = $this->env->getExtension("native_profiler");
        $__internal_b41e41d435d209aa9249d371d4b5ab88b67609a28587a6907749240acd748d39->enter($__internal_b41e41d435d209aa9249d371d4b5ab88b67609a28587a6907749240acd748d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"db_dashboard_add\"><b>Add</b></a>
    </li>
";
        
        $__internal_b41e41d435d209aa9249d371d4b5ab88b67609a28587a6907749240acd748d39->leave($__internal_b41e41d435d209aa9249d371d4b5ab88b67609a28587a6907749240acd748d39_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa03ab8bd2a3b74a21b0e7758d45961569d42cfdbf5951bce67d7632063e768 = $this->env->getExtension("native_profiler");
        $__internal_4aa03ab8bd2a3b74a21b0e7758d45961569d42cfdbf5951bce67d7632063e768->enter($__internal_4aa03ab8bd2a3b74a21b0e7758d45961569d42cfdbf5951bce67d7632063e768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\"> </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group\">
                <label for=\"dashboard_name_id\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "dashboard_name_id", "class" => "form-control", "placeholder" => "Dashboard name")));
        echo "
            </div>   
            
        </div>
        
        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
";
        
        $__internal_4aa03ab8bd2a3b74a21b0e7758d45961569d42cfdbf5951bce67d7632063e768->leave($__internal_4aa03ab8bd2a3b74a21b0e7758d45961569d42cfdbf5951bce67d7632063e768_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  101 => 29,  92 => 23,  88 => 22,  82 => 19,  77 => 16,  71 => 15,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="db_dashboard_add"><b>Add</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header"> </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group">*/
/*                 <label for="dashboard_name_id">{{ form_label(form.name) }}</label>*/
/*                 {{ form_widget(form.name, {'attr': {'tabindex' : '1','id' : 'dashboard_name_id','class': 'form-control','placeholder': 'Dashboard name'}}) }}*/
/*             </div>   */
/*             */
/*         </div>*/
/*         */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
