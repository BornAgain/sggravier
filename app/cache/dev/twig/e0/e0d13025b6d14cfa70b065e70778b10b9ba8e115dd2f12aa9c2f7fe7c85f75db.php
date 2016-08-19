<?php

/* DashboardBundle:Dashboard:add.html.twig */
class __TwigTemplate_c710da1b19deaad36cee49b1f45e80b8cf1994fea9ad9b4bbb3e02d971b44c1a extends Twig_Template
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
        $__internal_f591c5c234bf5bf4e8afbdcac9bd16c124c574f017edd8a60edf369f19c87018 = $this->env->getExtension("native_profiler");
        $__internal_f591c5c234bf5bf4e8afbdcac9bd16c124c574f017edd8a60edf369f19c87018->enter($__internal_f591c5c234bf5bf4e8afbdcac9bd16c124c574f017edd8a60edf369f19c87018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f591c5c234bf5bf4e8afbdcac9bd16c124c574f017edd8a60edf369f19c87018->leave($__internal_f591c5c234bf5bf4e8afbdcac9bd16c124c574f017edd8a60edf369f19c87018_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59a873d42ec5499e955937d5123cd3080490159e0c691fcfb329798ef4dfb177 = $this->env->getExtension("native_profiler");
        $__internal_59a873d42ec5499e955937d5123cd3080490159e0c691fcfb329798ef4dfb177->enter($__internal_59a873d42ec5499e955937d5123cd3080490159e0c691fcfb329798ef4dfb177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:add";
        
        $__internal_59a873d42ec5499e955937d5123cd3080490159e0c691fcfb329798ef4dfb177->leave($__internal_59a873d42ec5499e955937d5123cd3080490159e0c691fcfb329798ef4dfb177_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f99045daf3770e680bb0bbbd4edb95e667e72e2f923f8d3a7f8c8623a12da18b = $this->env->getExtension("native_profiler");
        $__internal_f99045daf3770e680bb0bbbd4edb95e667e72e2f923f8d3a7f8c8623a12da18b->enter($__internal_f99045daf3770e680bb0bbbd4edb95e667e72e2f923f8d3a7f8c8623a12da18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Add</b>
    </li>
";
        
        $__internal_f99045daf3770e680bb0bbbd4edb95e667e72e2f923f8d3a7f8c8623a12da18b->leave($__internal_f99045daf3770e680bb0bbbd4edb95e667e72e2f923f8d3a7f8c8623a12da18b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30596e933bef530168f82e7cf6bb8648076d5e79c374db91435480e561a2f78 = $this->env->getExtension("native_profiler");
        $__internal_f30596e933bef530168f82e7cf6bb8648076d5e79c374db91435480e561a2f78->enter($__internal_f30596e933bef530168f82e7cf6bb8648076d5e79c374db91435480e561a2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\"> </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group col-md-12\">
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
        
        $__internal_f30596e933bef530168f82e7cf6bb8648076d5e79c374db91435480e561a2f78->leave($__internal_f30596e933bef530168f82e7cf6bb8648076d5e79c374db91435480e561a2f78_prof);

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
/*             <div class="form-group col-md-12">*/
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
